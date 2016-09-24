<?php
Class Home_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getImage()
	{
		$this->db->select("image");
		return $this->db->get("images")->result_array();
	}
	public function countAll()
	{
		return $this->db->count_all("images");
	}
	//_____________Album_____________________
	public function getAlbum()
	{
		$this->db->select("DISTINCT(images.id_album), id, image, name_album");
		$this->db->from("images");
		$this->db->join("albums", "albums.id_album = images.id_album");
		$this->db->group_by("id_album");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getAlbumById($id_album)
	{
		$this->db->select("image");
		$this->db->where("id_album", $id_album);
		return $this->db->get("images")->result_array();

	}

}
?>