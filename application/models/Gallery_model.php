<?php
class Gallery_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}
	//Cac function Images
	public function getList()
	{

		$this->db->select("id, name_album, image");
		$this->db->from("images");
		$this->db->join("albums", "albums.id_album = images.id_album");
		return $this->db->get()->result_array();
	}
	public function countAll()
	{
		return $this->db->count_all("images");
	}
	public function deleteImage($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("images");
	}
	public function getImageById($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("images")->row_array();
	}
	public function updateImage($data_update, $id)
	{
		$this->where("id", $id);
		$this->db->update("images", $data_update);
	}

	//-----------Album------------------
	public function getAlbum()
	{
		$this->db->select("id_album, name_album");
		return $this->db->get("albums")->result_array();
	}
	//Get name album 
	public function get_Name_Album()
	{
		$this->db->select("name_album");
		return $this->db->get("albums")->result_array();
	}
	public function insertAlbum($data)
	{
		$this->db->insert("albums", $data);
	}
	public function count_all_album()
	{
		return $this->db->count_all("albums");
	}

	//Get Id_album 
	public function get_Id_Album($data)
	{
		$this->db->select("id_album");
		$query = $this->db->get_where("albums", array("name_album" => $data));
		return $query->row_array();
	}
	public function getNameAlbum($id_album)
	{

	}

	public function deleteAlbum($id_album)
	{
		$this->db->where("id_album", $id_album);
		$this->db->delete("albums");
	}
	public function getAlbumById($id_album)
	{
		$this->db->where("id_album", $id_album);
		return $this->db->get("albums")->row_array();
	}
	public function updateAlbum($data_update, $id_album)
	{
		$this->db->where("id_album", $id_album);
		$this->db->update("albums", $data_update);
	}
}

?>