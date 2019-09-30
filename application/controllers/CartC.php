<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CartC extends CI_Controller {

        public function index(){
			
			$this->load->model("cartM");
            $data["cartItems"] = $this->cartM->returnCartItems();
            $this->load->view("cartV", $data);
						
        }

        public function saveOrderData(){
            //Loading model, storing data it returns
            $this->load->model("menuM");
            $cartItems = $this->menuM->returnCartItems();

            
        }

    }

?>