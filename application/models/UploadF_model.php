<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadF_model extends CI_Model
{
    private $table = 'uploadf';

    //menampilkan data upload berdasarkan id upload
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_upload" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where id_upload='$id'
    }

    public function tampilupload()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_upload", "desc");
        return $this->db->get()->result();
    }

    //menyimpan data mahasiswa
    // public function save()
    // {
    //     $data = array(
    //         "name" => $this->input->post('name'),
    //         "file_upload" => $this->input->post('file_upload')
    //     );
    //     return $this->db->insert($this->table, $data);
    // }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "name" => $this->input->post('name'),
            "file_upload" => $this->input->post('file_upload')
        );
        return $this->db->update($this->table, $data, array('id_upload' => $this->input->post('id_upload')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_upload" => $id));
    }
}