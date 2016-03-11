<?php

/**
* 
*/
class dashboard extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$d['judul']="Halaman Dashboard Admin";
		$this->load->view('tampildashboard',$d);
	}
}
?>