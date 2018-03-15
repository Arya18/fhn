<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends MY_Controller {

				public  function __construct(){
					parent::__construct();
				}
			
         public function index(){
         	$this->load->view('admin/emailView');
         }

         public function send_email() { 
            if($this->input->post('submit')){
              $name = $this->input->post('name');
              $email = $this->input->post('email');

           
             $to_email = "anildubey1401@gmail.com"; 

   
         $this->email->from($email, $name); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Name :'.$name.
          'email :'.$email
          );
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('admin/emailView');
       }
       }
  }

 ?>