<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class UserModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

    public function insert_user($adduser){
      	$this->db->insert('proj_user',$adduser);
      }

    public function get_all_user(){
  	    $this->db->select('*');
		$this->db->from('proj_user');
		$qry = $this->db->get();
		if($qry->num_rows()>0){
			return $qry->result();
		}
  }

     public function delete_user_data($attr){
		$this->db->where('id',$attr);
		if($this->db->delete('proj_user')){
			$this->db->where('id',$attr);
	
			return true;
		}
		else{
			return false;
		}
	}
	 public function get_single_user_data($attr){
	   	$this->db->select('*');
	   	$this->db->from('proj_user');
	   	$this->db->where('id',$attr);
	   	$result = $this->db->get();
	   	if($result->num_rows()>0){
   		return $result->row_array();
   	}

   }

    public function update_user_db($updateuser){
    	//echo $id; die;
    	$this->db->where('id' , $updateuser['id']);
    	if($this->db->update('proj_user' , $updateuser)){
    		return true;
    	}
    }

				    public function csv_report()
				{
				    $this->db->select("user_name,user_email,user_username,user_password,status")->from('proj_user');
				    $aa = $this->db->get();
				   // $aa = $this->db->get('proj_user'); get all data from DB
				    return $aa;
				}

             /*------------pagignation-----------------*/
         public function record_count() {
        return $this->db->count_all('proj_user');
            }

         public function fetch_users($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('proj_user');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

 function search($keyword)
    {
        $this->db->like('user_name',$keyword);
        $query = $this->db->get('proj_user');
        return $query->result();
    }




}
?>