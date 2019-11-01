<?php
defined('BASEPATH') or exit('No direct script allowed');

class Cateringcontrollers extends CI_Controller 
{
	public function index()
     {
     
     $this->load->model('Cateringe_model');
		$fetch_data = $this-> Cateringe_model ->fetch_data();
		$this-> load->view('cateringe', $fetch_data);	
     }





}
?>