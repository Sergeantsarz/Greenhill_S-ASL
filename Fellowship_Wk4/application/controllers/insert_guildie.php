<?php
class Insert_guildie extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			//Load Model
			$this->load->model('CRUD');				
		}
		
		function index() {
			
				//Setting Values
				$data = array(
					'fName' => $this->input->post('fName'),
					'charName' => $this->input->post('charName'),
					'rank' => $this->input->post('rank'),
					'profession_pri' => $this->input->post('profession_pri'),
					'profession_sec' => $this->input->post('profession_sec')
				);
				
				//Load View
				$this->load->view('header');
				$this->load->view('insert_guildie', $data);
				$this->load->view('footer');	
				
				if(isset($_POST['submit'])){
					//Transfer Data to Model
					$this->CRUD->form_insert($data);
					
					//Set that data was inserted
					echo '<div id="warning" class="alert alert-success" role="alert">' . 'Data Inserted Successfully!' . '</div>';
				}			
			}

		
	}
?>