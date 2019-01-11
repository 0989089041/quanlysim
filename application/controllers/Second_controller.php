<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Second_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sdt['dssdt'] = array('0989089041','0989099091','0989098098' );
		$this->load->view('Second_view',$sdt);
		/*view chỉ nhận truyền vào một mảng*/
	}

}

/* End of file Second_controller.php */
/* Location: ./application/controllers/Second_controller.php */