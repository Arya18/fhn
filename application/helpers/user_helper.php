<?php

defined('BASEPATH') OR exit('No direct script access allowed');



function has_session(){

	$ci = & get_instance();

	if($ci->session->userdata('_au')){

		return true;

	}

	else{

		return false;

	}

}



function details($key){

	$ci = & get_instance();

	$detaisl = $ci->session->userdata('_au');

	switch ($key) {

		case 'id':

			return $detaisl['id'];

			break;



		case 'name':

			return $detaisl['name'];

			break;

		

		default:

			return '';

			break;

	}

}



function check_unique($field,$value,$id=false){

$ci = & get_instance();

$ci->db->select($field)->from('member_details');

$ci->db->where($field,$value);

if($id)

	$ci->db->where('id !=',$id);

$qry = $ci->db->get();

if ($qry->num_rows()>0) {

	return true;

}

else{

	return false;

}

}