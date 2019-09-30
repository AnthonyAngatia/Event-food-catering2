<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class OrderC extends CI_Controller {

        public function index(){
			
			$this->load->model("orderM");
            //$data["cartItems"] = $this->cartM->returnCartItems();
            $this->load->view("orderV");
						
        }

    }

?>