<?php
class Delete_guildie extends CI_Controller{
	function __construct(){
	parent::__construct();
		$this->load->model('delete_model');
	}
	// Function to Fetch selected record from database.
	function show_guildie_id() {
		$id = $this->uri->segment(3);
		$data['users'] = $this->delete_model->show_guildies();
		$data['single_user'] = $this->delete_model->show_guildie_id($id);
		$this->load->view('header');
		$this->load->view('guildies');
		$this->load->view('remove_guildies', $data);
		$this->load->view('footer');
	}
	// Function to Delete selected record from database.
	function delete_guildie_id() {
		$id = $this->uri->segment(3);
		$this->delete_model->delete_guildie_id($id);
		$this->show_guildie_id();
	}
}
?>