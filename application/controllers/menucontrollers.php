<?php<?php
defined('BASEPATH') or exit('No direct script allowed');

class Menucontrollers extends CI_Controller 
{
	 public function index()
     {
     
     $this->load->model('Menu_model');
		$fetch_data = $this-> Menu_model ->fetch_data();
		$this-> load->view('menu', $fetch_data);	
     }



}
?>