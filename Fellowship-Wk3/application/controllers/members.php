<?php
if (! defined('BASEPATH')) exit('No direct script access');

class Members extends CI_Controller{
	//PHP5 Constructor
	public function __construct(){
		parent::__construct();
		$this->load->model('All_Members');
	}
	function index(){
		$data['users'] = $this->All_Members->Show_all_members();
		
		$this->load->view('header');
		$this->load->view('members', $data);
		$this->load->view('footer');
	  }
}

?>