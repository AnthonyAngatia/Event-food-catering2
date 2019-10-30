<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class OrderC extends CI_Controller {

        public function index(){
			
			$this->load->model("orderM");
            $data["orderDetails"] = $this->orderM->returnOrderDetails();
            $data["userDetails"] = $this->orderM->returnUserDetails();
            $this->load->view("orderV", $data);
						
        }

        public function saveOrderData(){
            //Loading model, storing data it returns
            $this->load->model("orderM");
            if($this->input->post("Confirm_Order")){

                //db connection
                // $this->load->database();

                //SESSION and DB VARS
                $userId = $_SESSION["userID"];// SESSION VAR NEEDED!!
                
                $this->orderM->saveOrderData($userId);
               
            }            
            
        }

    }

?>