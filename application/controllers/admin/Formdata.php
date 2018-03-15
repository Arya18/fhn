<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formdata extends MY_Controller {

				public  function __construct(){
					parent::__construct();
					$this->load->model('admin/FormdataModel','fdm');
                    
				}
              public function index(){
               if(has_session()){
                    $data['formList'] = $this->fdm->get_all_formdata();
                    $config = array();
                    $config["base_url"] = base_url() . "admin/formdata/index";
                    $config["total_rows"] = $this->fdm->record_count();
                    $config["per_page"] = 2;
                    $config["uri_segment"] = 4;
                    $this->pagination->initialize($config);
                    $page = ($this->uri->segment(3)) ? $this->uri->segment(4) : 0;
                    $data["formList"] = $this->fdm->fetch_users($config["per_page"], $page);
                    $data["links"] = $this->pagination->create_links();
        
                   $this->load->view('admin/formDataView',$data);
               }
           }

           public function get_excel_data(){
               $data['excelList'] = $this->fdm->get_excel_formdata();
               $this->load->view('admin/excelView',$data);
              }

           public function formdata_edit(){
                $id = (int) $this->uri->segment(4);
                if($id){
                $data['singleformData'] = $this->fdm->get_single_formdata($id);
                $this->load->view('admin/editdataView',$data);
              }
             else{
                 redirect('admin/formdata');
              }
           }
           
         public function formdata_update(){
          if ($this->input->post('update_data')) {
                $id = $this->input->post('id');
                $relationship = $this->input->post('relationship');
                $family_id = $this->input->post('family_id');
                $name = $this->input->post('name');
                $caste = $this->input->post('caste');
                $email = $this->input->post('email');
                $gender = $this->input->post('gender');
                $date_of_birth = $this->input->post('date_of_birth');
                $place_of_birth = $this->input->post('place_of_birth');
                $marital_status = $this->input->post('marital_status');
                $education = $this->input->post('education');
                $occupation = $this->input->post('occupation');
                $award = $this->input->post('award');
                $present_address = $this->input->post('present_address');
                $present_district = $this->input->post('present_district');
                $present_state = $this->input->post('present_state');
                $present_pincode = $this->input->post('present_pincode');
                $permanent_address = $this->input->post('permanent_address');
                $permanent_district = $this->input->post('permanent_district');
                $permanent_state = $this->input->post('permanent_state');
                $permanent_pincode = $this->input->post('permanent_pincode');
                $email = $this->input->post('email');
                $mobile = $this->input->post('mobile');
                $aadhar = $this->input->post('aadhar');
                $country = $this->input->post('country');
                $other_country_address = $this->input->post('other_country_address');

                $update_data = array(
                  'relationship' => $relationship,
                  'family_id' => $family_id,
                  'name' => $name,
                  'caste' =>$caste ,
                  'email' => $email,
                  'gender' =>$gender ,
                  'date_of_birth' => $date_of_birth ,
                  'place_of_birth' => $place_of_birth,
                  'marital_status' => $marital_status,
                  'education' =>$education ,
                  'occupation' =>$occupation ,
                  'award' => $award,
                  'country' =>$country ,
                  'present_address' => $present_address,
                  'present_district' =>$present_district ,
                  'present_state' => $present_state ,
                  'present_pincode' =>$present_pincode ,
                  'permanent_address' =>$permanent_address ,
                  'permanent_district' =>$permanent_district ,
                  'permanent_state' => $permanent_state ,
                  'permanent_pincode' =>$permanent_pincode ,
                  'other_country_address' =>$other_country_address ,
                  'email' =>$email ,
                  'mobile' =>$mobile ,
                  'aadhar' =>$aadhar ,
                  'id' =>$id ,
                );
              //print_r($update_data);die();
                $this->fdm->update_form_data($update_data);
                redirect('admin/formdata');
                }


         }

           
			    public function formdata_delete(){
            $id = (int) $this->uri->segment(4);
            if($id){
              $this->fdm->delete_form_data($id);
              redirect ('admin/formdata');
            }
            else
             redirect ('admin/formdata');
           } 


          public function formdata_view(){
           $id = (int) $this->uri->segment(4);
            if($id){
            $data['singleformData'] = $this->fdm->get_single_formdata($id);
            $this->load->view('admin/profileView',$data);
             }
             else{
              redirect('admin/formdata');
             }
           }

           public function search_keyword(){
            if($this->input->post('search')){
              $keyword = $this->input->post('keyword');
              $data['formList'] = $this->fdm->search($keyword);
              $this->load->view('admin/formDataView',$data);
              }
           }


}
?>