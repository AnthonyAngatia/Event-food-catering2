<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class viewPastOrdersC extends CI_Controller {

        public function index(){
			
			$this->load->model("viewPastOrdersM");
            $data["orderDetails"] = $this->viewPastOrdersM->returnOrderDetails();
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