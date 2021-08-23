<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');

        check_role(['admin']);
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $data['posts']      = (array) $this->main->get('posts');
        $data['category']   = (array) $this->main->get('category');
        $data['video']   = (array) $this->main->get('video');
        $data['uploadF']   = (array) $this->main->get('uploadF');
        // $data['members']    = (array) $this->main->get_where('users', ['role' => 'member'], true);
        // $data['comments']   = (array) $this->main->get('comments');

        admin_template('dashboard', $data);
    }

    public function upload_image()
    {
        if (isset($_FILES["image"]["name"])) {
            $path = FCPATH . '/assets/dist/img/posts/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp';
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = $path . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = $path . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url('assets/dist/img/posts/') . $data['file_name'];
            }
        }
    }

    //Delete image summernote
    function delete_image()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }
}
