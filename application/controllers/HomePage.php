<?php
defined('BASEPATH') or exit('No direct script allowed');
class HomePage extends CI_Controller
{

    public function index()
    {
        //$this->load->view('HomePage');
        $this->load->model('HomePage_model');
        $data["fetch_data"] = $this->HomePage_model->fetch_data();
        $this->load->view('HomePage', $data);
        /*----Loading multiple files..

        //$this->load->view('');
        //$this->load->view('');	
        //$this->load->view('');
        */
    }
}
