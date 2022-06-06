<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller {
		public function __construct(){
			parent::__construct();
			// check if the user is logged in using sessions
			if ($this->session->userdata('logged_in') !== TRUE) {
				redirect('Login');
			}
			$this->load->model('HospitalModel');
		}

		function index(){
			if ($this->session->userdata('role')==='admin') {
				# load admin dashboard view
				$this->load->view('templates/header');
				$this->load->view('admin/index');
				$this->load->view('templates/footer');
			} else {
				echo "Access Denied!";
			}	
		}


		// function to get all the users in the db 

		function hospitals(){
			# execute the query method to users table
			$data['hospitals']= $this->HospitalModel->get_hospitals();
			   # pass the data to the view all the clients
			   $this->load->view('templates/header');
			   $this->load->view('admin/hospitals', $data);
			   $this->load->view('templates/footer');
	   }

	   function insert(){
		   // this function uses the ajax call to insert data to db
		   # load the model for crud?
		   if ($this->input->is_ajax_request()){
			   // lets validate the form from here
			   $this->form_validation->set_rules('health_facility', 'Fullname', 'trim|required');
			   $this->form_validation->set_rules('lat', 'Latitude', 'required|required');
			   $this->form_validation->set_rules('lng', 'Longitude', 'trim|required');
			   $this->form_validation->set_rules('division', 'Division', 'trim|required');
			   
		   
			   if ($this->form_validation->run() == FALSE) {
				   $data = array('response' => 'error', 'message' => validation_errors());
			   } else {
				   $ajax_data = $this->input->post();
				   // use an if statement to insert the data
				   if($this->HospitalModel->insert_entry($ajax_data)){
					   $data = array('response' => 'success', 'message' =>'Client Saved Successfully');
					   
				   }else {
					   $data = array('response' => 'error', 'message' =>'Failed to Save..Try again');
				   }
				   
			   }
			   
		   } else {
			   echo "No direct script access allowed";
		   }
		   echo json_encode($data); 
	   }


	
    }
?>