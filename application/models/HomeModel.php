<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class HomeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}


    function add_form_data($data){
			$this->db->insert('member_details', $data);

		}




}
?>
