<?php
class Guildie_view extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			
			function Add_guildie(){
				$this->load->view('header');
				$this->load->view('guildies');
				$this->load->view('footer');	
				
			}				
		}
		
	}
?>