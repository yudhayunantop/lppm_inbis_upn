<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Configuration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');

        check_session();
    }

    private function _configUpload($path)
    {
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        $this->upload->initialize($config);
    }

    private function _compressImg($path, $name)
    {
        $config['image_library']    = 'gd2';
        $config['source_image']     = $path . $name;
        $config['create_thumb']     = FALSE;
        $config['maintain_ratio']   = FALSE;
        $config['width']            = "150";
        $config['height']           = "150";
        $config['quality']          = '50%';
        $config['new_image']        = $path . $name;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $this->image_lib->crop();
    }

    public function account()
    {
        $data['title'] = "Account";

        $uname = $this->input->post('username', true) == userdata()->username ? "" : "|is_unique[users.username]";

        $this->form_validation->set_rules("fullname", "Name", "required|trim");
        $this->form_validation->set_rules("username", "Username", "required|trim|min_length[3]|alpha_dash" . $uname);

        if ($this->form_validation->run() == false) {
            admin_template("config/account", $data);
        } else {
            $input = $this->input->post(null, true);

            if (empty($_FILES['avatar']['name'])) {
                $input['avatar'] = userdata()->avatar;
            } else {
                $path = FCPATH . 'assets/dist/img/users/';
                $this->_configUpload($path);

                if ($this->upload->do_upload('avatar')) {
                    $gbr = $this->upload->data();

                    //Compress Image
                    $this->_compressImg($path, $gbr['file_name']);

                    $input['avatar'] = $gbr['file_name'];
                } else {
                    setMsg('danger', "Failed upload image : " . $this->upload->display_errors());
                    redirect('configuration/account');
                }

                $oldimg = userdata()->avatar;
                if ($oldimg) {
                    if (is_file($path . $oldimg)) {
                        unlink($path . $oldimg);
                    }
                }
            }

            $this->main->update('users', $input, ['user_id' => userdata()->user_id]);

            setMsg("success", 'Account has been updated!');
            redirect('configuration/account');
        }
    }

    public function change_password()
    {
        $data['title'] = "Change Password";

        $this->form_validation->set_rules('old_password', 'Old Password', 'required');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[4]|alpha_dash');
        $this->form_validation->set_rules('password', 'Confirm Password', 'required|matches[new_password]');

        if ($this->form_validation->run() == false) {
            admin_template("config/change_password", $data);
        } else {
            $input = $this->input->post(null, false);
            $where = ['user_id' => userdata()->user_id];

            $get_password = $this->main->get_where('users', $where)->password;
            if (password_verify($input['old_password'], $get_password)) {
                $this->main->update('users', [
                    'password' => password_hash($input['password'], PASSWORD_DEFAULT)
                ], $where);

                setMsg('success', 'Password has changed.');
            } else {
                setMsg('danger', "Old Password Not Same!");
            }
            redirect('configuration/change_password');
        }
    }
}
