<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderC extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Load form validation ibrary & user model 
        $this->load->model('user');
        $this->load->library('session');

        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    }

    public function index()
    {
        $data = array();
        if ($this->isUserLoggedIn) {
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
        }
        $this->load->view('NavBar2', $data);
        $this->load->model("orderM");
        $data["orderDetails"] = $this->orderM->returnOrderDetails();
        $data["userDetails"] = $this->orderM->returnUserDetails();
        $this->load->view("orderV", $data);
    }

    public function saveOrderData()
    {
        //Loading model, storing data it returns
        $this->load->model("orderM");
        if ($this->input->post("Confirm_Order")) {

            //db connection
            $this->load->database();

            //SESSION and DB VARS
            $userId = $_SESSION["userID"]; // SESSION VAR NEEDED!!

            $this->orderM->saveOrderData($userId);
        }
    }
}
