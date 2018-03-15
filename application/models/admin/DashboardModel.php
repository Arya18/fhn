<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class DashboardModel extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  function visitor_count() {
    $query = $this->db->query("SELECT * FROM member_details");
    return $query->num_rows();
}
function user_count() {
    $query = $this->db->query("SELECT * FROM proj_user");
    return $query->num_rows();
}


}
?>