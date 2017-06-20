<?php
class Originals_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->model('users_model');
	}

	public function get_originals($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('originals');
			return $query->result_array();
		}

		$query = $this->db->get_where('originals', array('slug' => $slug)); //Puxando originais por slug (título url) - mudar para puxar por id do usuário depois
		return $query->row_array();
	}

	public function get_originals_by_user_id(){
		$id = $_SESSION['logged in']['id'];


		$query = $this->db->get_where('originals', array('author_id' => $id));

		return $query->result_array();
	}

	public function get_originals_by_id($id=0){
		if($id === 0){
			$query = $this->db->get('originals');
			return $query->result_array();
		}

		$query = $this->db->get_where('originals', array('id'=>$id));
		return $query->row_array();
	}

	public function set_originals($id=0){
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'header'=>$this->input->post('header'),
			'slug'=>$slug,
			'body'=>$this->input->post('body'));

		if($id == 0){
			return $this->db->insert('originals', $data);
		} else {
			$this->db->where('id', $id);
			return $this->db->update('originals', $data);
		}
	}

	public function delete_originals($id){
		$this->db->where('id', $id);
		return $this->db->delete('originals');
	}
}

?>