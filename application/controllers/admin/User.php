<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

				public  function __construct(){
					parent::__construct();
					$this->load->model('admin/userModel','um');
                    //$this->load->library("pagination");
				}

			  public function index(){
			  	if(has_session()) {
			  		$data['userList'] = $this->um->get_all_user();
                    
                   /*-------pagignation----------*/
                    $config = array();
                    $config["base_url"] = base_url() . "admin/user/index";
                    $config["total_rows"] = $this->um->record_count();
                    $config["per_page"] = 4;
                    $config["uri_segment"] = 4;

                    $this->pagination->initialize($config);

                    $page = ($this->uri->segment(3)) ? $this->uri->segment(4) : 0;
                    $data["userList"] = $this->um->fetch_users($config["per_page"], $page);
                    $data["links"] = $this->pagination->create_links();
			  		$this->load->view('admin/userView',$data);
			  	}
			  }


			 /* public function user_profile(){
			  	$this->load->view('admin/profileView');
			  }*/

			  public function add_user(){
			  	if($this->input->post('adduser')){
                 $name =$this->input->post('name');
                 $email=$this->input->post('email');
                 $username=$this->input->post('username');
                 $password=$this->input->post('password');
                 $adduser = array(
                 	'user_name' =>$name ,
                 	'user_email'=>$email ,
                 	'user_username'=>$username,
                 	'user_password' =>$password,
                  	 );
                $this->um->insert_user($adduser);
                redirect('admin/user');
			  	}
			  }
             public function delete(){
             	$id = (int) $this->uri->segment(4);
             	if($id){
             		$this->um->delete_user_data($id);
             		redirect ('admin/user');
             	}
             	else{
             		redirect ('admin/user');
             	}
             	
             }

             public function user_edit(){
             	$id = (int) $this->uri->segment(4);
             	if ($id) {
             		$row['singleuserData'] = $this->um->get_single_user_data($id); 
             		$this->load->view('admin/edituserView',$row);
             	}
                else{
                    redirect('admin/user');
                }
             }

             	public function update_user(){
                    if ($this->input->post('updateuser')) {
                        $id = $this->input->post('id');
                        $name = $this->input->post('name');
                        $username = $this->input->post('username');
                        $email = $this->input->post('email');
                        $password = $this->input->post('password');
                        $status = $this->input->post('status');
                        $updateuser = array(
                            'user_name' => $name,
                            'user_username' => $username ,
                            'user_email' => $email ,
                            'user_password' => $password ,
                            'status' => $status ,
                            'id' => $id ,
                           );
                        $this->um->update_user_db($updateuser);
                        redirect ('admin/user');
                    }
                  }

			function get_csv_report(){
                $filename = "data_csv.csv";
                $fp = fopen('php://output', 'w');
                $header = '';
                $query = $this->um->csv_report();
                //Dynamic CSV header
               /* foreach ($query->list_fields() as $name)
                {
                    $header[] .= $name;
                } */
                //unset($header[0]); remove csv index with 0
               
                $header = array('Name','Email','Username','Password','Status' );
                header('Content-type: application/csv');
                header('Content-Disposition: attachment; filename='.$filename);
                fputcsv($fp, $header);

                $num_column = count($header); 
                $result = $query->result_array() ;
                //print_r($result);die;
                foreach($result as $row) {
                    fputcsv($fp, $row);
                }
                exit;
            }

              
      /*  public function example1() {
            $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "user/example1";
        $config["total_rows"] = $this->um->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->um->fetch_users($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        print_r($data);die;
        $this->load->view("userView", $data);
    }*/
   


     function search_keyword()
    {
        if($this->input->post('search')){
        $keyword = $this->input->post('keyword');
        $data['userList'] = $this->um->search($keyword);
        $this->load->view('admin/userView',$data);
    }
}


}
?>