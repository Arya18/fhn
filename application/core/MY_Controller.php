<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/general/controllers.html
 */
class MY_Controller extends CI_Controller {
     /**
	 * Reference to the CI singleton
	 *
	 * @var	object
	 */
	public $date;
     /**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load =& load_class('Loader', 'core');
		$this->load->initialize();
		date_default_timezone_set('Asia/Kolkata');
		$this->date=date('Y-m-d H:i:s');

	}
}
