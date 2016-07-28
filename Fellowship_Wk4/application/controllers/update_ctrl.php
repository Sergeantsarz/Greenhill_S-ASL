<?php
	class update_ctrl extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('update_model');
		}
		
		function show_guildie_id() {
			$id = $this->uri->segment(3);
			$data['users'] = $this->update_model->show_guildies();
			$data['single_user'] = $this->update_model->show_guildie_id($id);
			
			$this->load->view('header');
			$this->load->view('update_view', $data);
			$this->load->view('footer');
		}
		
		function update_guildie_id() {
			$id= $this->input->post('user_id');
			
			$data = array(
				
				'fName' => $this->input->post('fName'),
				'charName' => $this->input->post('charName'),
				'rank' => $this->input->post('rank'),
				'profession_pri' => $this->input->post('profession_pri'),
				'profession_sec' => $this->input->post('profession_sec')
			);
			
			$this->update_model->update_guildie_id($id, $data);
			$this->show_guildie_id();
			
			if(isset($_POST['submit'])){
				//Set that data was inserted
				redirect('members');
				echo '<div id="warning" class="alert alert-success" role="alert">' . 'Data Inserted Successfully!' . '</div>';
			}
		}
	}
?>