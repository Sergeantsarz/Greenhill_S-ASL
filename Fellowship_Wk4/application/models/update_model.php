<?php
class Update_model extends CI_Model{
	// Get all the records from the table
	function show_guildies(){
		$query = $this->db->get('users');
		$query_result = $query->result();
		return $query_result;
	}
	// Select specific member from the table
	function show_guildie_id($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $data);
		$this->db->order_by("fName", "asc");
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	// Update the selected guild member
	function update_guildie_id($id, $data){
		$this->db->where('user_id', $id);
		$this->db->update('users', $data);
	}
}
?> 