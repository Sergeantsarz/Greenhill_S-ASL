<?php
	/* Sarah R. Greenhill - ASL - July 14, 2016 */ 
	
	class CRUD extends CI_Model{
		function __construct() {
			parent::__construct();
		}
		function form_insert($data){
			// Inserting Guildie
			$this->db->insert('users', $data);
		}
	}
?>