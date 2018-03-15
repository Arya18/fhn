<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class LoginModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

		function add_user($user){
			$this->db->insert('user', $user);

		}

  function add_doc($user){
      $this->db->insert('doctor', $user);

    }

     function login_db($data){
          $this->db->select('id,name')->from('user');
          $this->db-> where('password' , $data['password']); 
          $this->db->group_start();
              $this->db->where('email', $data['email']);
              $this->db->or_where('mobile',$data['email']);
          $this->db->group_end();

          $qry = $this->db->get();
          if ($qry->num_rows()==0) {
              // exit('fdfd');
               
               return false;
          }
          else{
               $row = $qry->row_array();
               $this->session->set_userdata('fhn', $row);
               //print_r($this->session->userdata('_au'));exit;
               return true;
              
              
     	}

     }

     function login_doctor_db($data){
          $this->db->select('id,doc_name')->from('doctor');
          $this->db-> where('doc_password' , $data['password']); 
          $this->db->group_start();
              $this->db->where('doc_email', $data['email']);
              $this->db->or_where('doc_mobile',$data['email']);
          $this->db->group_end();

          $qry = $this->db->get();
          if ($qry->num_rows()==0) {
              // exit('fdfd');
               
               return false;
          }
          else{
               $row = $qry->row_array();
               $this->session->set_userdata('fhn', $row);
               //print_r($this->session->userdata('_au'));exit;
               return true;
              
              
      }

     }



}
?>