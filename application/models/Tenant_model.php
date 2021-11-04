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
	public function updateTenant($data,$idtenant){
		return $this->db->update($this->table, $data, array('id_tenant' => $idtenant));
	}

	// public function countTenant(){
	// 	$query= $this->db->query("SELECT COUNT(id_tenant) AS jumlahtenant FROM tenant");
	// 	return $query->row()->jumlahtenant;
	// }

	public function count_data()
    {
        $this->db->from('tenant t');
        return $this->db->get()->num_rows();
    }

	public function tampilTenant($limit, $start)
    {
        $this->db->select('t.*');
        $this->db->order_by('id_tenant', 'desc');
        $query = $this->db->get('tenant t', $limit, $start)->result();
        return $query;
    }
}
