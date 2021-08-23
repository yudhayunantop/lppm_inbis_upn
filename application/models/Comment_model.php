<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comment_model extends CI_Model
{
    public function get_comment($post_id)
    {
        $this->db->select('c.*, u.fullname, u.avatar, u.role');
        $this->db->where('post_id', $post_id);
        $this->db->where('comment_parent', 0);
        $this->db->order_by('comment_date', 'desc');
        $this->db->join('users u', 'u.user_id=c.user_id', 'left');
        $query = $this->db->get('comments c');
        return $query->result();
    }

    public function get_reply($post_id)
    {
        $comments = $this->get_comment($post_id);

        $replies = [];
        foreach ($comments as $c) {
            $this->db->select('c.*, u.fullname, u.avatar, u.role');
            $this->db->where('comment_parent', $c->comment_id);
            $this->db->order_by('comment_date', 'desc');
            $this->db->join('users u', 'u.user_id=c.user_id', 'left');
            $query = $this->db->get('comments c');
            $replies[$c->comment_id] = $query->result();
        }

        return $replies;
    }

    public function get_all_comments($limit = null)
    {
        $this->db->select('c.*, u.fullname, u.avatar, u.role, p.post_slug');
        $this->db->order_by('comment_date', 'desc');
        $this->db->join('posts p', 'post_id', 'left');
        $this->db->join('users u', 'u.user_id=c.user_id', 'left');

        if ($limit) {
            $this->db->limit($limit);
        }

        $query = $this->db->get('comments c');
        return $query->result();
    }

    public function number_of_comments($post_id)
    {
        return $this->db->get_where('comments', ['post_id' => $post_id])->num_rows();
    }
}
