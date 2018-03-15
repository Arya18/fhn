<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class FormdataModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

         public function get_all_formdata(){
         	$this->db->select('*');
         	$this->db->from('member_details');
         	$qry = $this->db->get();
         	if ($qry->num_rows()>0) {
         		return $qry->result();
         	}
         }

         public function get_excel_formdata(){
            $this->db->select('*');
            $this->db->from('member_details');
            $qry = $this->db->get();
            if ($qry->num_rows()>0) {
                return $qry->result();
            }
         }

         public function delete_form_data($attr){
         $this->db->where('id',$attr);
         if($this->db->delete('member_details')){
            $this->db->where('id',$attr);
      
            return true;
         }
         else{
            return false;
         }
      }

      public function get_single_formdata($attr){
        $this->db->select('*');
         $this->db->from('member_details');
         $this->db->where('id',$attr);
         $result = $this->db->get();
         if($result->num_rows()>0){
         return $result->row_array();
         }
        }


        public function update_form_data($data){
         $this->db->where('id',$data['id']);
         if ($this->db->update('member_details',$data)) {
            return true;
         }
        }

        function search($keyword)
    {
        $this->db->like('mobile',$keyword)
        ->or_like('name', $keyword)
        ->or_like('family_id', $keyword);
        $query = $this->db->get('member_details');
        return $query->result();
    }

      public function record_count() {
        return $this->db->count_all('member_details');
            }

         public function fetch_users($limit, $start) {
                $this->db->limit($limit, $start);
                $query = $this->db->get('member_details');
                if ($query->num_rows() > 0) {
                 foreach ($query->result() as $row) {
                  $data[] = $row;
                  }
            return $data;
               }
            return false;
         }

}
?>