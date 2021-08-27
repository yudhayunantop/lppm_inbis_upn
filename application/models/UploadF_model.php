<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadF_model extends CI_Model
{
    private $table = 'uploadf';

    public function count_data()
    {
        $this->db->from('uploadf u');
        return $this->db->get()->num_rows();
    }

    public function tampilupload($limit, $start)
    {
        $this->db->select('u.*');
        $this->db->order_by('id_upload', 'desc');
        $query = $this->db->get('uploadf u', $limit, $start)->result();
        return $query;
    }
    
    public function tampiluploadAdmin()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_upload", "desc");
        return $this->db->get()->result();
    }

}