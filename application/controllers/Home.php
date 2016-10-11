<?php
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->database();
	}

	public  function showImage($id_album)
	{
		$this->load->model("Home_Model");
		$data["subview"] = "home/show_image";
		$data["titlePage"] = "Images";
		$data["info"] = $this->Home_Model->getAlbumById($id_album);
		$this->load->view("home/main_image", $data);
	}
	public function showAlbum()
	{
		$this->load->model("Home_Model");
		$data["titlePage"] = "Album Images";
		$data["subview"] = "home/show_album";
		$data["info"] = $this->Home_Model->getAlbum();
		$this->load->view("home/main", $data);
	}
}
?>