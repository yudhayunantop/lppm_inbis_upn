<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->path = FCPATH . "assets/dist/img/posts/";
        check_role(['admin']);
    }

    public function index()
    {
        $data['title'] = "Member";
        $data['members'] = $this->main->get_where('users', ['role' => 'member'], true);

        admin_template('member/list', $data);
    }

    public function delete($id)
    {
        $where = ['user_id' => $id];
        $user = $this->main->get_where('users', $where);

        if ($user->avatar) {
            if (is_file($this->path . $user->avatar)) {
                unlink($this->path . $user->avatar);
            }
        }

        $this->main->delete('users', $where);

        setMsg('success', 'User deleted.');
        redirect('member');
    }
}
