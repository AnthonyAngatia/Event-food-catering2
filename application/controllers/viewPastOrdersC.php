<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class viewPastOrdersC extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
    
            // Load form validation ibrary & user model 
            $this->load->library('form_validation');
            $this->load->model('user');
            $this->load->library('session');
            // $this->load->payment();
    
    
            // User login status 
            $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
        }

        public function index(){

            $data = array();
        if ($this->isUserLoggedIn) {
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
        }
			
			$this->load->model("viewPastOrdersM");
            $data["orderDetails"] = $this->viewPastOrdersM->returnOrderDetails();
            $this->load->view('Navbar2', $data);
            $this->load->view("viewPastOrdersV", $data);
						
        }

        // Might need this in the future
        // public function saveOrderData(){
        //     //Loading model, storing data it returns
        //     $this->load->model("orderM");
        //     if($this->input->post("Confirm_Order")){

        //         //db connection
        //         $this->load->database();

        //         //SESSION and DB VARS
        //         $userId = 1;// SESSION VAR NEEDED!!
                
        //         $this->orderM->saveOrderData($userId);
               
        //     }            
            
        // }

    }

?>