<?php

class HospitalModel extends CI_Model {

  function insert_entry($data){
      # add the table to insert data to and append the data
  	   $this->db->insert('markers', $data);
       return $data;
  }


  function get_hospitals(){
      $query = $this->db->get('markers');
      return $query->result();
  }

  function update_entry(){
      $this->title = $_POST['title'];
      $this->date  = time();
      $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
?>