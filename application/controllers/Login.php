<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function  __construct() {
			parent::__construct();
            // load the login model to use in login authentication
            $this->load->model('LoginModel');
		}

       
        # handle the default routing
        public function index() {
        	$this->load->view('login');
        }

        // function to authenticate the user
        function auth() {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password',TRUE);
            # send the username and password for authentication with the db 
            $result   = $this->LoginModel->check_user($username, $password);
            // check for results 
            if ($result->num_rows() > 0) {
                $data = $result->row_array();
                $name = $data['firstname'];
                $email = $data['email'];
                $role = $data['role'];

                // create session data array 
                $sesdata = array(
                    'username' => $name,
                    'email'    => $email,
                    'role'     => $role,
                    'logged_in'=> TRUE
                );

                // create the user session
                $this->session->set_userdata($sesdata);
                // use the roles to redirect to the respective pages
                if ($role === 'admin') {
                    redirect('admin');
                }

            } else {
                echo "<script>alert('Access Denied!'); history.go(-1);</script>";
            }
            $this->load->view('login');

        }

        
        public function logout(){

                $user_data = $this->session->all_userdata();
                $this->session->sess_destroy();
                redirect('logout');
        }
    }

?>