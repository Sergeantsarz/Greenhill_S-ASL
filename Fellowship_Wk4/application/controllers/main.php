<?php
	if (! defined('BASEPATH')) exit('No direct script access');
	
	class Main extends CI_Controller{
		
		//PHP5 Constructor
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			
			$this->input->post();
			
			if(!$_POST){
				$this->load->view('home_header');
				$this->load->view('home');
				$this->load->view('home_footer');
			}else{
					
				
				//Validation Lib
				$this->load->library('form_validation');
						
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
						
				//Validating Name Field
				$this->form_validation->set_rules('username', 'Username', 'min_length[2]|max_length[25]');
						
				if ($this->form_validation->run() == FALSE){
					$this->load->view('home_header');
					$this->load->view('home');
					$this->load->view('home_footer');
						
					echo '<div id="warning" class="alert alert-danger" role="alert">' . 'WARNING: Incorrect username & password. Please try again!' . '</div>';
				}else{
										
					$this->load->view('header');
					$this->load->view('welcome_admin');
					$this->load->view('footer');
				}	
			}
		}					
	}
?>