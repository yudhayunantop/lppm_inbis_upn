<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/posts/";
        $this->load->library('pagination');
    }

    public function view($slug = "")
    {
        if (!$slug) {
            redirect('post/list');
        }

        $data['title']  = "Post Detail";
        $data['post']   = $this->post->get_post_by_slug($slug);
        $data['selected_category'] = $data['post']->category_id;
        $data['recent_posts'] = $this->post->recent_post($slug);

        public_template('post/view', $data);
    }

    public function index()
    {
        $search = $this->input->get('search', true);
        $category = $this->input->get('category', true);

        // Tampilkan post file list
        $config['base_url'] = base_url('post/index');
        $config['total_rows'] = $this->post->count_data($search, $category);
        $config['per_page'] = 4;
        $config['reuse_query_string'] = TRUE;
        $config['video_tampil'] = 3;

        $this->pagination->initialize($config);

        $start = $this->uri->segment(3);
        $data['berita'] = $this->post->getBerita($config['per_page'], $start);
        $data['pengumuman'] = $this->post->getPengumuman($config['per_page'], $start);
        $data['galeri'] = $this->post->getGaleri($config['per_page'], $start);
        $data['video'] = $this->video->tampilVideo($config['video_tampil'], $start);
        $data['tenant'] = $this->tenant->getAllTenant();

        $data['category'] = $this->main->get('category');
        $data['search'] = $search;
        $data['selected_category'] = $category;
        $data['title'] = "Home";

        public_template('post/list', $data);
    }

    // nampilkan read more masing2 kategori
    public function all()
    {
        $search = $this->input->get('search', true);
        $category = $this->input->get('category', true);

        // Tampilkan post file list
        $config['base_url'] = base_url('post/all');
        $config['total_rows'] = $this->post->count_data($search, $category);
        $config['per_page'] = 8;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);

        $start = $this->uri->segment(3);
        $data['posts'] = $this->post->get_all_post($config['per_page'], $start, $search, $category);
        $data['category'] = $this->main->get('category');
        $data['search'] = $search;
        $data['selected_category'] = $category;
        $data['title'] = "Home";

        if ($search=="" && $category=="") {
            redirect('post/index');
        }

        //tampilkan diview
        public_template('post/all', $data);
    }

    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Posts";
        $data['post'] = $this->post->get_table_post();
        admin_template('post/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('post_title', 'Post Title', 'required|trim');
        $this->form_validation->set_rules('post_body', 'Post Body', 'required|trim');
        $this->form_validation->set_rules('category_id', 'Category', 'required');
        $this->form_validation->set_rules('post_date', 'Post Date', 'required');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create New Post";
        $data['category'] = $this->main->get('category');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('post/create', $data);
        } else {
            $this->save();
        }
    }

    private function _configUpload()
    {
        $config['upload_path'] = $this->path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
    }

    private function _compressImg($name)
    {
        $config['image_library']    = 'gd2';
        $config['source_image']     = $this->path . $name;
        $config['create_thumb']     = FALSE;
        $config['maintain_ratio']   = TRUE;
        $config['quality']          = '70%';
        $config['new_image']        = $this->path . $name;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    private function save()
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['post_body'] = $this->input->post('post_body', false);

        $input['user_id'] = userdata()->user_id;
        $input['post_slug'] = $this->post->create_slug($input['post_title']);

        // Image Upload
        if (!empty($_FILES['post_thumbnail']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('post_thumbnail')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['post_thumbnail'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
                redirect('post/create');
            }
        }

        $this->main->insert('posts', $input);
        redirect('post/data');
    }

    public function edit($post_id)
    {
        check_role(['admin']);

        $where = ['post_id' => encode_php_tags($post_id)];

        $data['title'] = 'Edit Post';
        $data['category'] = $this->main->get('category');
        $data['post'] = $this->main->get_where('posts', $where);
        if (!$data['post']) redirect('post/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('post/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['post_body'] = $this->input->post('post_body', false);

        if (!empty($_FILES['post_thumbnail']['name'])) {
            $oldimg = $this->main->get_where('posts', $where)->post_thumbnail;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('post_thumbnail')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['post_thumbnail'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
                redirect('post/data');
            }
        }

        setMsg('success', 'Post updated.');
        $this->main->update('posts', $input, $where);
        redirect('post/data');
    }

    public function deleteContentImage($content)
    {
        check_role(['admin']);

        preg_match_all('/<img[^>]+>/i', $content, $imgTags);
        for ($i = 0; $i < count($imgTags[0]); $i++) {
            preg_match('/src="([^"]+)/i', $imgTags[0][$i], $imgage);
            $images[] = str_ireplace('src="', '',  $imgage[0]);
        }

        foreach ($images as $image) {
            $extract = explode('/', $image);
            $img = end($extract);

            $thumbnail = $this->path . $img;
            if (is_file($thumbnail)) {
                unlink($thumbnail);
            }
        }
    }

    public function delete($post_id)
    {
        check_role(['admin']);

        $id = encode_php_tags($post_id);
        $where = ['post_id' => $id];

        $query = $this->main->get_where('posts', $where);
        if (!$query) redirect('posts');

        $this->deleteContentImage($query->post_body);

        $img = $query->post_thumbnail;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "Post deleted successfully.");
        $this->main->delete('comments', $where);
        $this->main->delete('posts', $where);
        redirect('post/data');
    }

    public function showIBT($category = null){
		$category = str_replace('%20',' ',$category);
		$post = $this->post->getPostByCategory($category);
    	if (!is_null($category)) {
			$data['post'] =  $post;
			$data['category'] = $category;
			$data['selected_category'] = $data['post']->category_id;
			$data['recent_posts'] = $this->post->recent_post($post->post_slug);
		} else {
			redirect('post/list');
		}
		public_template('post/ibt',$data);
	}

	public function test(){
		var_dump($this->post->getPostByCategory('IBT Technopark'));
	}
}
