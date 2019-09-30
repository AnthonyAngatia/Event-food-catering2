<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class TestC extends CI_Controller {

        public function index(){
            //Loading model, storing data it returns, loading view with data 
            $this->load->model("testM");
            $data["menuItems"] = $this->testM->returnMenuItems();
            $this->load->view("testV", $data);
            
        }

        public function saveMenuData(){
            echo("Harry");
            //Loading model, storing data it returns
            $this->load->model("testM");
            //$data2["menuItems"] = $this->testM->returnMenuItems();
            

            //Checking whether "Add toAdd to Cart Cart submit button has been clicked"
            if($this->input->post("Add_to_Cart")){
                echo("Harry");
                //Getting post data
                $postData = $this->input->post();
                print_r($postData);

                //Inserting checked food items into db
                //foreach ($menuItems as $row){
                    //Check whether the checkboxes were selected
                    if($this->input->post("food")){
                        echo("Harry");
                        $this->testM->saveFoodsPicked("Harry");
                    }
                //}
            }
        }
            
    }
        

        /*
        function displayMenuItems(){
            $this->load->model("menuM");
            $data["menuItems"] = $this->load->menuM->returnMenuItems();
            $this->load->view("menuV", $data);
        }
        */

    

?>