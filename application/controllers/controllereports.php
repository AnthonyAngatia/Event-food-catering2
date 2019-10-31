<?php<?php
defined('BASEPATH') or exit('No direct script allowed');

class Controllereports extends CI_Controller 
{
	public function index()
    {

    	$this->load->view("reports.php");
    }




}
?>