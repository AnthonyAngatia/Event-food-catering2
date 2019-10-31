<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class CustomerC extends CI_Controller { 
     public function index()
     {

     
     $this->load->model('Reports_model');
		$fetch_data = $this-> Reports_model ->fetch_data();
		$this-> load->view('customers', $fetch_data);	
     }

}