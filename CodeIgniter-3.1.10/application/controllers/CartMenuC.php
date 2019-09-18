<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CartMenuC extends CI_Controller {

        public function index(){
			
			$this->load->model("cartMenuM");
            //$data["menuItems"] = $this->cartM->returnMenuItems();
            $this->load->view("cartMenuV");
						
        }

    }

?>