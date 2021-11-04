<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tenant extends CI_Controller
{
	private $path = "";
	public $tenant;

	public function __construct()
	{
		parent::__construct();
		$this->path = FCPATH . "assets/dist/logo/";
		$this->load->library('pagination');
		$this->tenant = new Tenant_model();
	}

	public function index()
	{

	}

	private function validation()
	{
		$this->form_validation->set_rules('linktenant', 'Link', 'required');
//		 $this->form_validation->set_rules('file', 'File', 'required');
	}

	public function data(){
		check_role(['admin']);
		$data['title'] = "Tenant";
		$data['tenant'] = $this->tenant->getAllTenant();
		admin_template('tenant/data', $data);
	}

	private function _configUpload()
	{
		$config['upload_path'] = $this->path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp|pdf|docx|doc|odt|xps';
		$config['max_size'] = 3000;
		$this->load->library('upload');
		$this->upload->initialize($config);
	}

	public function create(){
		check_role(['admin']);
		$data['title'] = "Post Tenant";
		$this->validation();
		if ($this->form_validation->run()== false) {
			admin_template('tenant/create', $data);
		} else {
			$this->save();
		}
	}

	public function save(){
		check_role(['admin']);

		$input['linktenant'] = $this->input->post('linktenant', false);
		$input['nama_tenant'] = $this->input->post('namatenant',false);
		// var_dump($input);
		$this->_configUpload();
		if (!$this->upload->do_upload('file_logo')) {
			print_r($this->upload->do_upload('file_logo'));
			$error = array('error' => $this->upload->display_errors());
			redirect('tenant/create', $error);
		} else {
			$file = $this->upload->data();
			$input['logo'] = $file['file_name'];
			$data = array('tenant' => $this->upload->data());
			$this->main->insert('tenant', $input);
			redirect('tenant/data', $data);
		}
	}

	public function edit($tenant_id)
	{
		check_role(['admin']);

		$where = ['id_tenant' => encode_php_tags($tenant_id)];

		$data['title'] = 'Edit Post';
		$data['tenant'] = $this->main->get_where('tenant', $where);
		if (!$data['tenant']) redirect('tenant');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('tenant/edit', $data);
		} else {
			$this->update($tenant_id);
		}
	}

	public function update($idtenant)
	{
		check_role(['admin']);
		$input['linktenant'] = $this->input->post('linktenant', false);
		$input['nama_tenant'] = $this->input->post('namatenant', false);
		$this->_configUpload();
		if ($this->upload->do_upload('file_logo')) {
			$file = $this->upload->data();
			$input['logo'] = $file['file_name'];
		} else {

		}
		$this->tenant->updateTenant($input, $idtenant);
		setMsg('success', 'Tenant updated.');
		redirect('tenant/data');
	}

	public function delete($id_tenant){
		check_role(['admin']);
		$id = encode_php_tags($id_tenant);
		$where = ['id_tenant' => $id];
		$query = $this->main->get_where('tenant', $where);
		if (!$query) redirect('tenant/data');
		setMsg('success', "Tenant deleted successfully.");
		$this->main->delete('tenant', $where);
		redirect('tenant/data');
	}
}
