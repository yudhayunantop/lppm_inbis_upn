<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
    }

    //method pertama yang akan di eksekusi
    public function index()
    {
        check_role(['admin']);

        $data["title"] = "Video";
        //ambil fungsi getAll untuk menampilkan semua data video
        $data["video"] = $this->video->getAll();
        admin_template('video/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('link', 'Link', 'required');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create New Link Video";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('video/create', $data);
        } else {
            $this->save();
        }
    }

    private function save()
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link'] = $this->input->post('link', false);

        $this->main->insert('video', $input);
        redirect('video');
    }

    public function edit($video_id)
    {
        check_role(['admin']);

        $where = ['video_id' => encode_php_tags($video_id)];

        $data['title'] = 'Edit Post';
        $data['video'] = $this->main->get_where('video', $where);
        if (!$data['video']) redirect('video');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('video/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link'] = $this->input->post('link', false);

        setMsg('success', 'Post updated.');
        $this->main->update('video', $input, $where);
        redirect('video');
    }

    public function delete($video_id)
    {
        check_role(['admin']);

        $id = encode_php_tags($video_id);
        $where = ['video_id' => $id];

        $query = $this->main->get_where('video', $where);
        if (!$query) redirect('video');

        setMsg('success', "Video deleted successfully.");
        $this->main->delete('video', $where);
        redirect('video');
    }
}