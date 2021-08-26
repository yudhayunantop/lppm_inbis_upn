<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadF extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/unggahan/";
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = "File Download";

        $config['base_url'] = base_url('uploadf/index');
        $config['total_rows'] = $this->uploadF->count_data();
        $config['per_page'] = 5;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);

        $start = $this->uri->segment(3);

        $data['uploadF'] = $this->uploadF->tampilUpload($config['per_page'], $start);
        public_template('uploadf/list', $data);
    }

    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Upload";
        $data['uploadF'] = $this->uploadF->tampilUploadAdmin();
        admin_template('uploadf/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('file', 'File', 'required');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Upload New File";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('uploadf/create', $data);
        } else {
            $this->save();
        }
    }

    private function _configUpload()
    {
        $config['upload_path'] = $this->path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp|pdf|docx|doc|odt|xps';
        $config['max_size'] = 3000;
        $this->load->library('upload');
        $this->upload->initialize($config);
    }

    private function save()
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);

        $input['name'] = $this->input->post('name', false);
        // $input['file_upload'] = $this->input->post('file_upload', false);

                // Image Upload
                // if (!empty($_FILES['file_upload']['name'])) {
                    $this->_configUpload();
        
                    if (!$this->upload->do_upload('file_upload')) {
                        $error = array('error' => $this->upload->display_errors());
                        redirect('uploadf/create', $error);

                        
                    } else {
                        // setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
                        // redirect('uploadf/create');
                        
                        $file = $this->upload->data();
                        $input['file_upload'] = $file['file_name'];

                        $data = array('uploadF' => $this->upload->data());
                        $this->main->insert('uploadf', $input);

                        redirect('uploadf/data', $data);
                    }
                // }

        // $this->main->insert('uploadf', $input);
        // redirect('uploadf');
    }

    public function edit($id_upload)
    {
        check_role(['admin']);

        $where = ['id_upload' => encode_php_tags($id_upload)];

        $data['title'] = 'Edit File';
        $data['uploadF'] = $this->main->get_where('uploadf', $where);
        if (!$data['uploadF']) redirect('uploadf/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('uploadf/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->upload(null, true);
        $input['name'] = $this->input->upload('name', false);
        $input['uploadF'] = $this->input->upload('uploadF', false);

        setMsg('success', 'Upload updated.');
        $this->main->update('uploadf', $input, $where);
        redirect('uploadf/data');
    }

    public function delete($id_upload)
    {
        check_role(['admin']);

        $id = encode_php_tags($id_upload);
        $where = ['id_upload' => $id];

        $query = $this->main->get_where('uploadf', $where);
        if (!$query) redirect('uploadf/data');

        setMsg('success', "Upload deleted successfully.");
        $this->main->delete('uploadf', $where);
        redirect('uploadf/data');
    }
}
?>