<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ahomepage extends CI_Controller
{ 


	public function index()
	{	
		$this->load->model('ahomepage_model');
		$data['fetch_data'] = $this-> ahomepage_model ->fetch_data();
		$this-> load->view('adminhomepage_views', $data);
		


	} 
}
?>