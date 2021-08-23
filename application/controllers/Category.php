<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_role(['admin']);
    }

    public function index()
    {
        $data['title'] = "Category";
        $data['category'] = $this->main->get('category', 'category_id');

        $this->validation();
        if ($this->form_validation->run() == false) {
            admin_template('category/data', $data);
        } else {
            $input = $this->input->post(null, true);

            if ($input['category_id'] == "") {
                $this->main->insert('category', $input);
                setMsg('success', 'Category added.');
            } else {
                $where = ['category_id' => $input['category_id']];
                unset($input['category_id']);

                $this->main->update('category', $input, $where);
                setMsg('success', 'Category updated.');
            }

            redirect('category');
        }
    }

    private function validation()
    {
        $this->form_validation->set_rules('category_name', 'Category Name', 'required|trim');
        $this->form_validation->set_rules('category_desc', 'Category Description', 'trim');
    }

    public function delete($id)
    {
        $where = ['category_id' => encode_php_tags($id)];
        $this->main->delete('category', $where);

        setMsg('success', 'Category deleted.');
        redirect('category');
    }
}
