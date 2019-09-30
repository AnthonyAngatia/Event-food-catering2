<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CateringMenuC extends CI_Controller {

        public function index(){
			
			$this->load->model("cateringMenuM");
            //$data["menuItems"] = $this->cartM->returnMenuItems();
            $this->load->view("cateringMenuV");
						
        }

    }

?>