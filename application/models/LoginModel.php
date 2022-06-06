<?php

class LoginModel extends CI_Model {

  function check_user($username, $password){
  	$this->db->select('*'); // select all
  	$this->db->from('users'); // table name
  	$this->db->where('email', $username);
  	$this->db->where('password', sha1($password)); 
  	$query = $this->db->get(); // get the data from db table
  	return $query;
  }

  }
?>