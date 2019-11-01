<?php
defined('BASEPATH') or exit('No direct script allowed');

class Ordercontrollers extends CI_Controller 
{
	public function index()
     {
     
     $this->load->model('Order_model');
		$fetch_data = $this-> Order_model ->fetch_data();
		$this-> load->view('order', $fetch_data);	
     }





}
?>