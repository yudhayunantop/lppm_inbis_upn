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
        $this->db->order_by("priority", "ASC");
        $this->db->limit($limit, $start);
        $query  = $this->db->get();
        return $query->result();
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("priority", "desc");
        return $this->db->get()->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by prioritas desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "link" => $this->input->post('link'),
			"priority" => $this->input->post('priority')
        );
//		$priorityExist = $this->checkPriorityExist($this->input->post('priority'));
//		if ($priorityExist){
//			$this->incrementVideoPriority($this->input->post('priority'));
//		}
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update($data,$where)
    {
//        $data = array(
//            "link" => $this->input->post('link'),
//			"priority" => $this->input->post('priority')
//        );
//		$priorityExist = $this->checkPriorityExist($this->input->post('priority'));
//		if ($priorityExist){
//			$this->incrementVideoPriority($data['priority']);
//		}
		return $this->db->update($this->table, $data, $where);
//        return $this->db->update($this->table, $data, array('video_id' => $this->input->post('video_id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("video_id" => $id));
    }

//	public function checkPriorityExist($pid){
//		//check if video with priority pid exist in record
//		$query = $this->db->select('priority')->from($this->table)->where('priority',$pid)->get();
//		return $query->num_rows() > 0;
//	}

//	public function incrementVideoPriority($pid){
//		$pid = (int)$pid;
//		$query = "UPDATE `video` SET `priority`= priority+1 WHERE priority >= $pid ";
//		return $this->db->query($query);
//	}
//	public function incrementVideoPriority($pid){
//		$pid = (int)$pid;
//		$this->db->select_max('priority');
//		$this->db->from('video');
//		$minpriority = $this->db->get()->result();
//		$querycheck = $this->db->query("SELECT * FROM video where priority = $pid");
//		$numrows = $querycheck->num_rows();
//		if ($numrows==0){
//
//		}
//			$query = "UPDATE `video` SET `priority`= priority+1 WHERE priority > $i";
//			$this->db->query($query);
//
//		for ($i=$pid; $i<=$minpriority; $i++) {
//
//
//		}
//	}

}
