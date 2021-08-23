<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_model extends CI_Model
{
    private $table = 'video';

    //menampilkan data video berdasarkan id video
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["video_id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where video_id='$id'
    }

    public function tampilVideo($limit, $start)
    {
        $this->db->from($this->table);
        $this->db->order_by("video_id", "desc");
        $this->db->limit($limit, $start);
        $query  = $this->db->get();
        return $query->result();
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("video_id", "desc");
        return $this->db->get()->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by video_id desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "link" => $this->input->post('link')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "link" => $this->input->post('link')
        );
        return $this->db->update($this->table, $data, array('video_id' => $this->input->post('video_id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("video_id" => $id));
    }
}