<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CartC extends CI_Controller {

        public function index(){
			
			$this->load->model("cartM");
            $data["cartItems"] = $this->cartM->returnCartItems();
            $this->load->view("cartV", $data);
						
        }

        public function saveCartData(){
            if($this->input->post("Delete")){
                $this->load->model("cartM");
                $cartItemToDelete = $_POST["cartItemToDelete"];
                $this->cartM->deleteCartItem($cartItemToDelete);
            }


            //Loading model, storing data it returns
            $this->load->model("cartM");
            if($this->input->post("Checkout")){
                /*
                //Getting post data
                $postData = $this->input->post();
                //print_r($postData);

                //Inserting cart items into db Orders relation
                foreach ($menuItems as $row){
                    echo("Karani");
                    //Check whether the checkboxes were selected
                    if($this->input->post($row["foodName"]) !== null){
                        $this->menuM->saveFoodsPicked($row["foodName"]);
                    }
                }
                $this->cartM->saveOrderData($row["foodName"]);
                */

                //db connection
                $this->load->database();
                $userID = 1;

                //
                //Select from db cart table
                $userID = 1; // SESSION VAR NEEDED!!
                $selectCartItemsQuery = $this->db->query("SELECT * FROM cart WHERE userID = '$userID'");
                $cartItems = $selectCartItemsQuery->result_array();

                //Declare foodItems array to contain all the food items and incremental to increment it in for loop below
                $foodItems = array(); 
                $y = 0;
                foreach ($cartItems as $row){
                    //Selecting from fooditems table using foodId retrieved from cart table
                    $foodID = $row["foodID"];
                    $selectFoodItemsQuery = $this->db->query("SELECT * FROM fooditems WHERE foodID = '$foodID'");

                    //Transform this into array
                    $foodItem = $selectFoodItemsQuery->result_array();
                    $foodItems[$y] = $foodItem[0];

                }

                //Declare orderItems array, and other total order details---ALL GLOBAL VARS
                $orderItems = array();
                $orderItems['userId'] = $userID; //UserId SESSION VAR NEEDED HERE!!
                $totOrderPrice = 0;
                $totOrderDuration = 0;
                $orderStatus = "Pending";
                $orderItems['orderStatus'] = $orderStatus; 


                //Getting the Quantities 
                //This function loops through each food item at a time

                for($i = 0; $i < count($foodItems); $i++){
                    //Get totOrderPrice
                    //Getting the Quantities
                    $foodQuantity = $_POST[$foodItems[$i]["foodName"]];
                    //Get totOrderPrice += foodQuantity * foodPrice
                    
                    $totOrderPrice = $totOrderPrice + ($foodQuantity * $foodItems[$i]["foodPrice"]);
                    $orderItems['totOrderPrice'] = $totOrderPrice;

                    //Get totOrderDuration
                    $totOrderDuration = $totOrderDuration + ($foodItems[$i]["foodDuration"]);
                    $orderItems['totOrderDuration'] = $totOrderDuration;
                }
                $this->cartM->saveOrderData($orderItems);
                
            }            
            
        }

        public function deleteCartItem(){
            $cartItemToDelete = $_POST["cartItemToDelete"];
            $this->cartM->deleteCartItem($cartItemToDelete);
        }

    }

?>