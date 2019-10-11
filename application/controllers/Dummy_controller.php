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
        //?Load the model class
        $this->load->model("Catering_model");
$data = array(
    "column_name" => $this->input->post("name of form"),
    "column_name" => $this->input->post("name of form"),
    "column_name" => $this->input->post("name of form"),
    "column_name" => $this->input->post("name of form")
);
//?Put the array of data in the model function
$this->Catering_model->insertData($data);

        // $data = $formData = array();

        // // If contact request is submitted
        // if ($this->input->post('dummySubmit')) {
        //     $formData = $this->input->post();
        //     print_r($formData);
        // }
    }
}