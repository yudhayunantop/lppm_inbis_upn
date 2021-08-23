<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        check_role(['admin']);

        $data['title'] = "Comments";
        $data['comment'] = $this->comment->get_all_comments();

        admin_template('comment/index', $data);
    }

    public function add()
    {
        if (!userdata()) {
            redirect('signin');
        } else {
            $input = $this->input->post(null, true);
            $input['comment_date']  = date('Y-m-d');
            $input['user_id']       = userdata()->user_id;

            $this->form_validation->set_rules('comment_body', 'Comment', 'required|trim');
            if ($this->form_validation->run() == true) {
                $this->main->insert('comments', $input);
            }
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }
    }

    public function delete($comment_id)
    {
        if (!userdata()) {
            redirect('signin');
        } else {
            $where = [
                'comment_id' => encode_php_tags($comment_id)
            ];

            $comment = $this->main->get_where('comments', $where);
            $parent = $comment->comment_parent;

            if (userdata()->role == "member") {
                if (userdata()->user_id != $comment->user_id) {
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }

            if ($parent == "0") {
                $this->main->delete('comments', ['comment_parent' => $comment->comment_id]);
            }

            $this->main->delete('comments', $where);
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }
    }
}
