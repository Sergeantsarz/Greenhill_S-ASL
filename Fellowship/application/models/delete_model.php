<?php
class delete_model extends CI_Model{
	// Function to select all from table name students.
	function show_guildies(){
		$query = $this->db->get('users');
		$query_result = $query->result();
		return $query_result;
	}
	// Function to select particular record from table name students.
	function show_guildie_id($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	// Function to Delete selected record from table name students.
	function delete_guildie_id($id){
		$this->db->where('user_id', $id);
		$this->db->delete('users');
	}
}
?> 