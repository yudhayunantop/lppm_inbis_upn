<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    public function get_table_post()
    {
        $this->db->join('category', 'category_id');
        $this->db->join('users', 'user_id');
        $this->db->order_by('post_id', 'desc');
        return $this->db->get('posts')->result();
    }

    public function create_slug($title)
    {
        $extract = explode(" ", $title, 6);
        unset($extract[5]);
        $combine = implode(" ", $extract);
        $lowercase = strtolower($combine);
        $preslug = url_title($lowercase);

        $slug = $preslug;

        $this->db->like('post_slug', $preslug, 'after');
        $checkslug = $this->db->get('posts');
        if ($checkslug->num_rows() > 0) {
            $num = (int)$checkslug->num_rows() + 1;
            $slug = $preslug . "-" . $num;
        }

        return $slug;
    }

    public function count_data($search = null, $category = null)
    {
        if ($category != null) {
            $this->db->where('p.category_id', $category);
        }

        if ($search != null) {
            $this->db->like('p.post_title', $search);
        }

        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->from('posts p');
        return $this->db->get()->num_rows();
    }

    public function get_all_post($limit, $start, $search = null, $category = null)
    {
        if ($category != null) {
            $this->db->where('p.category_id', $category);
        }

        if ($search != null) {
            $this->db->like('p.post_title', $search);
        }

        $this->db->select('p.*, c.category_name, u.fullname, u.avatar');
        $this->db->order_by('post_id', 'desc');
        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->join('users u', 'u.user_id=p.user_id', 'left');
        $query = $this->db->get('posts p', $limit, $start)->result();
        return $query;
    }

    public function getBerita($limit, $start)
    {
        $this->db->select('p.*, c.category_name, u.fullname, u.avatar');
        $this->db->order_by('post_id', 'desc');
        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->join('users u', 'u.user_id=p.user_id', 'left');
        $this->db->where('c.category_name="Berita"');
        $query = $this->db->get('posts p', $limit, $start)->result();
        return $query;
    }

    public function getPengumuman($limit, $start)
    {   
        $this->db->select('p.*, c.category_name, u.fullname, u.avatar');
        $this->db->order_by('post_id', 'desc');
        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->join('users u', 'u.user_id=p.user_id', 'left');
        $this->db->where('c.category_name="Pengumuman"');
        $query = $this->db->get('posts p', $limit, $start)->result();
        return $query;
    }

    public function getGaleri($limit, $start)
    {   
        $this->db->select('p.*, c.category_name, u.fullname, u.avatar');
        $this->db->order_by('post_id', 'desc');
        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->join('users u', 'u.user_id=p.user_id', 'left');
        $this->db->where('c.category_name="Galeri"');
        $query = $this->db->get('posts p', $limit, $start)->result();
        return $query;
    }

    public function get_post_by_slug($slug = null)
    {
        $this->db->select('p.*, c.category_name, u.fullname, u.avatar');
        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->join('users u', 'u.user_id=p.user_id', 'left');
        $query = $this->db->get_where('posts p', ['p.post_slug' => $slug]);
        return $query->row();
    }

    public function recent_post($slug)
    {
        $this->db->join('category c', 'c.category_id=p.category_id');
        $this->db->where('post_slug !=', $slug);
        $this->db->order_by('post_date', 'desc');
        $this->db->limit(5);
        return $this->db->get('posts p')->result();
    }
}
