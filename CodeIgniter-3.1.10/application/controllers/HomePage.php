<?php
defined ('BASEPATH') OR exit('No direct script allowed');
class HomePageController extends CI_Controller{

    public function index(){
        $this->load->view('HomePage3');
        /*----Loading multiple files..

        //$this->load->view('');
        //$this->load->view('');	
        //$this->load->view('');
        */
    }
}
?>