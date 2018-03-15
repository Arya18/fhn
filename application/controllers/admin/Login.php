<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public  function __construct(){
		parent::__construct();
		$this->load->model('admin/loginModel','lm');
	}

	
	public function index()
	{
    if (has_session()) {
      redirect('admin/dashboard');
    }
    else {
       $this->load->view('admin/loginView');
    }
		
	}


      public function signup(){
   		if($this->input->post('signup')){
   			$name = $this->input->post('name');
   			$email = $this->input->post('email');
   			$username = $this->input->post('username');
   			$password = $this->input->post('password');
            $user = array(
            	'user_name' =>$name,
            	'user_email' =>$email,
            	'user_username' =>$username,
            	'user_password' =>$password,

             );

            $this->lm->add_user($user);

   	}
   }

    public function user_login(){
      if ($this->input->post('login')) {
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $data = array(
            'user_username' => $username , 
            'user_password' => $password,
            );
      }
     //print_r($data);die();
   
      if ($this ->lm ->login_db($data)==true) {
        redirect('admin/dashboard');
      }
      else{
         redirect('admin');
      }
    }
  public function logout(){
    $this->session->unset_userdata('_au');
    redirect('admin');
  }

}
?>
