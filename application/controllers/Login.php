<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends MY_Controller {



  public  function __construct(){

    parent::__construct();

    $this->load->model('loginModel','lm');
    $this->load->library('form_validation');

  }



  

  public function index()

  {
//$this->session->sess_destroy();

    if ($this->session->userdata('fhn')) {

      redirect('admin/dashboard');

    }

    else {

       $this->load->view('loginView');

    }

    

  }





     public function user_registration(){

      if($this->input->post('user_registration')){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[50]');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]'
        );
        $this->form_validation->set_rules('mobile', 'Contact', 'trim|required|numeric|min_length[10]|max_length[10]|is_unique[user.mobile]'
        );
        $this->form_validation->set_rules('aadhar', 'Aadhar', 'trim|required|numeric|min_length[12]|max_length[12]|is_unique[user.aadhar]'
        );
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|max_length[12]'
        );


        if ($this->form_validation->run() === FALSE){
              $data['reg_active'] = 'active';
              $this->session->set_flashdata('form_error','Data not modified, Check your form and try again');
              $this->load->view('loginView',$data);
          }
          else{
            //print_r($this->input->post());die;
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $dob = $this->input->post('dob');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $aadhar = $this->input->post('aadhar');
            $password = $this->input->post('password1');

            $user = array(
              'name' =>$name,
              'email' =>$email,
              'dob' =>$dob,
              'mobile' =>$mobile,
              'address' =>$address,
              'aadhar' =>$aadhar,
              'password' =>$password,
             );
            $this->lm->add_user($user);
            $this->session->set_flashdata('reg_success','You have successfully registered, Now you can login');
            redirect('login');
          }       

    }
    else{
      redirect('login');
    }

   }



    public function user_login(){

      if ($this->input->post('user_login')) {

        $this->form_validation->set_rules('password', 'Password', 'trim|required'
        );
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required'
        );
        $this->form_validation->set_rules('login_type', 'Login Type', 'trim|required'
        );

        if ($this->form_validation->run() === FALSE){
              $this->load->view('loginView');
              $this->session->set_flashdata('form_error','Data not modified, Check your form and try again');
          }
          else{
              $username = $this->input->post('user_name');

      $password = $this->input->post('password');
      $login_type = $this->input->post('login_type');

         $data = array(

            'email' => $username , 

            'password' => $password,
            'type' => $login_type,

            );

         if($login_type == 'Doctor'){
            if ($this ->lm ->login_doctor_db($data)==true) {

              redirect('admin/dashboard');

            }

            else{
              $this->session->set_flashdata('login_error','Invalid Credential');
               redirect('login');

            }
         }
         else{

           if ($this ->lm ->login_db($data)==true) {

              redirect('admin/dashboard');

            }

            else{
              $this->session->set_flashdata('login_error','Invalid Credential');
               redirect('login');

            }
         }

          }
      }
      else{
        redirect('login');
      }

    }




     public function doc_registration(){

      if($this->input->post('doc_registration')){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[50]');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[doctor.doc_email]'
        );
        $this->form_validation->set_rules('mobile', 'Contact', 'trim|required|numeric|min_length[10]|max_length[10]|is_unique[doctor.doc_mobile]'
        );
        $this->form_validation->set_rules('registration_no', 'Registration No', 'trim|required|numeric|min_length[2]|max_length[100]|is_unique[doctor.doc_registration]'
        );
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|max_length[12]'
        );


        if ($this->form_validation->run() === FALSE){
              
              $this->session->set_flashdata('form_error','Data not modified, Check your form and try again');
          }
          else{
            //print_r($this->input->post());die;
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $dob = $this->input->post('dob');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $registration_no = $this->input->post('registration_no');
            $specialization = $this->input->post('specialization');
            $password = $this->input->post('password1');

            $user = array(
              'doc_name' =>$name,
              'doc_email' =>$email,
              'doc_dob' =>$dob,
              'doc_mobile' =>$mobile,
              'doc_address' =>$address,
              'doc_registration ' =>$registration_no,
              'doc_spec ' =>$specialization,
              'doc_password' =>$password,
             );
            $this->lm->add_doc($user);
            $this->session->set_flashdata('reg_success','You have successfully registered, Now you can login');
            redirect('login');
          }       

    }
    $this->load->view('docRegistrationView');

   }



  public function logout(){

    $this->session->unset_userdata('fhn');

    redirect('login');

  }


}

?>
