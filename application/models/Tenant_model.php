<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tenant_model extends CI_Model
{
	private $table = 'tenant';
	public function getAllTenant(){
		return $this->db->from($this->table)
			->order_by('id_tenant', "desc")
			->get()->result();
	}
}
