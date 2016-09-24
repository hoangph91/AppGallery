<?php
defined("BASEPATH") OR exit("No direct script access allowed!");

class Admin extends CI_Controller
{
	public function __construct()
	{	
		parent::__construct();
		$this->load->helper("url");	
		$this->load->database();
		$this->load->helper("form");
		$this->load->library("session");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->model("gallery_model");
		$data["info"] = $this->gallery_model->getList();
		$data["total_image"] = $this->gallery_model->countAll();
		$data["subview"] = "admin/index";
		$data["titlePage"] = "Admin";
		$this->load->view("admin/main", $data);
	}
	public  function add_image()
	{
		$this->load->model("Gallery_Model");
		$data["info"] = $this->Gallery_Model->get_Name_Album();
		$data['errors'] = '';

		$data["titlePage"] = "Add An Image";
		$data["subview"] = "admin/add_image";
        $this->load->view("admin/main", $data);
        if($this->input->post("submit")){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '90000';
            $config['max_width']  = '1024';
            $config['max_height']  = '3068';
            $this->load->library("upload", $config);
            $data = $this->Gallery_Model->get_Id_Album($this->input->post("name_album"));
            //tien hanh upload anh .

            if($this->upload->do_upload("file")){
                    $upload_data = $this->upload->data();
                    $data = array("id_album" => $data["id_album"],
                    	         "image" => $upload_data["file_name"]
                    );

                   
            }else{
            	//loi up load 
                $data['errors'] = $this->upload->display_errors();
                $this->load->view("admin/add_image", $data);
            }
            
            $this->db->insert("images", $data);
            $this->session->set_flashdata("flash_mess", "Added");
            redirect(base_url(). "index.php/admin");
        }
	}
	public function deleteImage($id)
	{
		$this->load->model("Gallery_Model");
		$this->Gallery_Model->deleteImage($id);
		$this->session->set_flashdata("flash_mess", "Delete Success");
        redirect(base_url() . "index.php/admin");
	}
	public function editImage($id)
	{
		$this->load->model("Gallery_Model");
		$data["titlePage"] = "Edit An Image";
		$data["subview"] = "admin/edit_image";

		$data["album"] = $this->Gallery_Model->getAlbum();
		$data["info"] = $this->Gallery_Model->getImageById($id);
		$data_update = array("ima"
		);
		$this->load->view("admin/main", $data);
	}
	//xu ly actions Album____________________________________
	public function add_album()
	{
		$data["titlePage"] = "Add Album";
		$data["subview"] = "admin/add_album";

		$this->form_validation->set_rules("name_album", "Name album", "required");
		if($this->form_validation->run() == TRUE)
		{
			$this->load->model("Gallery_Model");
			$data_insert = array("name_album" => $this->input->post("name_album"));
			print_r($data_insert);
			$this->Gallery_Model->insertAlbum($data_insert);
			$this->session->set_flashdata("flast_mess", "Added");
			redirect(base_url() . "index.php/admin/list_album");
		}
		$this->load->view("admin/main", $data);
		//redirect(base_url(). "index.php/admin/list_album");
	}
	public function list_album()
	{
		$this->load->model("Gallery_Model");
		$data["info"] = $this->Gallery_Model->getAlbum();
		$data["titlePage"] = "List Albums";
		$data["subview"] = "admin/list_album";
		$data["total_album"] = $this->Gallery_Model->count_all_album();
		$this->load->view("admin/main" , $data);
	}
	public function deleteAlbum($id_album)
	{
		$this->load->model("Gallery_Model");
		$this->Gallery_Model->deleteAlbum($id_album);
		$this->session->set_flashdata("flash_mess", "Delete Success");
        redirect(base_url() . "index.php/admin/list_album");
	}
	public function editAlbum($id_album)
	{
		$this->load->model("Gallery_Model");
		$data["titlePage"] = "Edit Album";
		$data["subview"] = "admin/edit_album";
		$data["info"] = $this->Gallery_Model->getAlbumById($id_album);
		$this->form_validation->set_rules("name_album"," Album", "required");
		if($this->form_validation->run() == TRUE)
		{
			$data_update = array("name_album" => $this->input->post("name_album"));
			$this->Gallery_Model->updateAlbum($data_update, $id_album);
			$this->session->set_flashdata("flash_mess", "Update Success");
            redirect(base_url() . "index.php/admin/list_album");
		}
		$this->load->view("admin/main", $data);
	}
}
?>