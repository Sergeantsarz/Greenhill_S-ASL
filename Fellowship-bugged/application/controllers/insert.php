<?php
class Insert extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('InsertModel');
		
			function index() {
				//Validation Lib
				$this->load->library('form_validation');
				
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				
				//Validating Name Field
				$this->form_validation->set_rules('fName', 'First Name', 'required|min_length[1]|max_length[25]');
				
				
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('guildies');
					} else {
					//Setting Values
					$data = array(
					'First Name' => $this->input->post('fName'),
					);
					//Transfer Data to Model
					$this->insert_model->form_insert($data);
					$data['message'] = 'Data Inserted Successfully';
					//Load View
					$this->load->view('guildies', $data);
				}
			}
				
		}
		
	}
?>