<?php
defined('BASEPATH') or exit('No direct script allowed');
class Dummy_controller extends CI_Controller
{
    public function index()
    {
        $this->load->view('Dummy_view.php');
    }
    public function getPostData()
    {
        $data = $formData = array();

        // If contact request is submitted
        if ($this->input->post('dummySubmit')) {
            $formData = $this->input->post();
            print_r($formData);
        }
    }
}
