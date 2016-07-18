<?php
class Insert_guildie extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			//Load Model
			$this->load->model('CRUD');
			
			function Add_Guildie() {
			
				//Setting Values
				$data = array(
					'fName' => $this->input->post('fName'),
					'charName' => $this->input->post('charName'),
					'rank' => $this->input->post('rank'),
					'profession_pri' => $this->input->post('profession_pri'),
					'profession_sec' => $this->input->post('profession_sec')
				);
				
				//Transfer Data to Model
				$this->CRUD->form_insert($data);
				$data['message'] = 'Data Inserted Successfully';
				
				//Load View
				$this->load->view('header');
				$this->load->view('guildies', $data);
				$this->load->view('footer');				
			}
				
		}
		
	}
?>