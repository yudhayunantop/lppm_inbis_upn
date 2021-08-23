<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function get($table, $desc_column = null)
    {
        if ($desc_column != null) {
            $this->db->order_by($desc_column, 'desc');
        }
        return $this->db->get($table)->result();
    }

    public function get_where($table, $where, $object = false)
    {
        $query = $this->db->get_where($table, $where);

        if ($query->num_rows() <= 1 && $object == false) {
            return $query->row();
        } else {
            return $query->result();
        }
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function insert_batch($table, $data)
    {
        return $this->db->insert_batch($table, $data);
    }

    public function update($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function delete($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
