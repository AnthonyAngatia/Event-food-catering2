<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CartC extends CI_Controller {

        public function index(){
			
			$this->load->model("cartM");
            //$data["menuItems"] = $this->cartM->returnMenuItems();
            $this->load->view("cartV");
						
        }

    }

?>