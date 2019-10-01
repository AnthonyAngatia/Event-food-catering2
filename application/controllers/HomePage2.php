<?php
//!tHIS FILE IS USED TO LOAD PAGE AFTER LOGIN
defined('BASEPATH') or exit('No direct script allowed');
class HomePage extends CI_Controller
{

    public function index()
    {

        $this->load->view('HomePage2');
        /*----Loading multiple files..

        //$this->load->view('');
        //$this->load->view('');	
        //$this->load->view('');
        */
    }
}
