<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public  function __construct(){
    parent::__construct();
    $this->load->model('HomeModel','hm');
if ($this->session->userdata('fhn')) {

      redirect('admin/dashboard');

    }
  }

     public function index(){
       $this->load->view('homeView');
       }
  
    /*public function registration(){
      
         $this->load->view('registrationView');
}
*/


}
?>