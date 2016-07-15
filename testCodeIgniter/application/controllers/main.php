<?php
	if (! defined('BASEPATH')) exit('No direct script access');
	
	class Main extends CI_Controller{
		
		//PHP5 Constructor
		public function __construct(){
			parent::__construct();
			$this->load->model('CRUD');
			$this->load->library('session');
		}
		
		public function index(){
			
			$this->input->post();
			$username = $this->input->post("username");
			$passcode = $this->input->post("passcode");	
			
			$this->session->set_userdata($username);
			$this->session->set_userdata($passcode);
			
			if(!$_POST){
				$this->load->view('header');
				$this->load->view('home');
				$this->load->view('footer');
			}else{
					
				if(1+1==2){
					//Validation Lib
					$this->load->library('form_validation');
						
					$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
						
					//Validating Name Field
					$this->form_validation->set_rules('fName', 'First Name', 'required|min_length[2]|max_length[25]');
						
					if ($this->form_validation->run() == FALSE){
						$this->load->view('header');
						$this->load->view('home');
						$this->load->view('footer');
						
						echo '<div id="warning" class="alert alert-danger" role="alert">' . 'WARNING: Incorrect username & password. Please try again!' . '</div>';
					}else{
						//Setting Values
						$data = array(
						'fName' => $this->input->post('fName'),
						);
						//Transfer Data to Model
						$this->CRUD->form_insert($data);
						$data['message'] = 'Data Inserted Successfully';
						//Load View
						$this->load->view('header');
						$this->load->view('guildies', $data);
						$this->load->view('footer');
					}
				}else{
					if($username == "Admin" && $passcode == "abcd"){
						$this->load->view('header');
						$this->load->view('guildies');
						$this->load->view('footer');
					}else{
						$this->load->view('header');
						$this->load->view('home');
						$this->load->view('footer');
							
						echo '<div class="alert alert-danger" role="alert">' . 'WARNING: Incorrect username & password. Please try again!' . '</div>';
							
						$this->session->unset_userdata($username);
						$this->session->unset_userdata($passcode);
						
					}
				}	
			}
		}		
					
	}
	
		
?>