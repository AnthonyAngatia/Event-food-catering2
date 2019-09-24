<?php
defined('BASEPATH') or exit('No direct script allowed');
class HomePage extends CI_Controller
{

    public function index()
    {
        $this->load->view('HomePage');
        /*----Loading multiple files..

        //$this->load->view('');
        //$this->load->view('');	
        //$this->load->view('');
        */
    }
}
