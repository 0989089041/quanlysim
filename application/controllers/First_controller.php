<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Hello, Nhân";
	}
	public function otherFunction()
	{
		echo "Đây là hàm khác";
	}

}

/* End of file First_controller.php */
/* Location: ./application/controllers/First_controller.php */