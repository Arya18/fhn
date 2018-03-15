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
			$this->db->insert('proj_user', $user);

		}
     function login_db($data){
     	$this->db->select('id,user_name')->from('proj_user')-> where (array('user_username' =>$data['user_username'] , 'user_password' =>$data['user_password'],'status'=>'enable'));
     	$qry = $this->db->get();
     	if ($qry->num_rows()==0) {
     		return false;
     	}
     	else{
     		$row = $qry->row_array();
               $this->session->set_userdata('_au', array('id' => $row['id'],'username' => $row['user_name'], ));
               return true;
     	}

     }



}
?>