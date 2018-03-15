<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public  function __construct(){
		parent::__construct();
		if(!$this->session->userdata('fhn')){
			//exit('a');
			redirect('login');
		}
		
		//$this->load->model('admin/DashboardModel','dma');
	}

	
	public function index()
	{
	
		
			$this->load->view('admin/dashboardView');
			
		
	}

}
?>