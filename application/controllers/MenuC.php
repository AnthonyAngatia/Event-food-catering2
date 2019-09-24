<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class MenuC extends CI_Controller {

        public function index(){
    
            $this->load->model("menuM");
            $data["menuItems"] = $this->menuM->returnMenuItems();
            $this->load->view("menuV", $data);
            
        }

        

        /*
        function displayMenuItems(){
            $this->load->model("menuM");
            $data["menuItems"] = $this->load->menuM->returnMenuItems();
            $this->load->view("menuV", $data);
        }
        */

    }

?>