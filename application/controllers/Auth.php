<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if (userdata()) redirect('dashboard');

        $data['title'] = "Sign In";

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/sign-in', $data);
        } else {
            $input = $this->input->post(null, true);
            $user = $input['username'];
            $pass = $input['password'];

            $getUser = $this->main->get_where('users', ['username' => $user]);
            if ($getUser) {
                if (password_verify($pass, $getUser->password)) {
                    $this->session->set_userdata('user_session', $getUser->user_id);
                    if ($getUser->role == "member") {
                        redirect('post');
                    } else {
                        redirect('dashboard');
                    }
                } else {
                    setMsg("danger", "Wrong Password!");
                }
            } else {
                setMsg("danger", "Username not registered");
            }
            redirect("signin");
        }
    }

    public function signup()
    {
        if (userdata()) redirect('dashboard');

        $data['title'] = "Sign Up";

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/sign-up', $data);
        } else {
            $input = $this->input->post(null, true);

            unset($input['password2']);
            $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);
            $input['role'] = 'member';

            $this->main->insert('users', $input);
            setMsg('success', 'Sign up success, now you can sign in.');
            redirect('signin');
        }
    }

    public function signout()
    {
        $this->session->unset_userdata('user_session');
        redirect('post/index');
    }
}
