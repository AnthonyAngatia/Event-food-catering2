<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CartM extends CI_Model{
        function returnCartItems(){

            //db connection
            $this->load->database();

            //Select from db cart table
            $userID = 1;
            $selectCartItemsQuery = $this->db->query("SELECT * FROM cart WHERE userID = '$userID'");
            $cartItems = $selectCartItemsQuery->result_array();
            foreach ($cartItems as $row){
                //Selecting from fooditems table using foodId retrieved from cart table
                $foodID = $row["foodID"];
                $selectFoodItemsQuery = $this->db->query("SELECT * FROM fooditems WHERE foodID = '$foodID'");

                //Transform this into array
                $foodItems = $selectFoodItemsQuery->result_array();
            
                //Returning array to controller
                return $foodItems;
            }


            function saveCartData(){

                //db connection
                $this->load->database();
                $userID = 1;
    
                
                }

            /*
            foreach ($sqlMenuDisplay->result() as $row)
            {
                echo $row->foodId;
            }
            */
        }
        
    }
    
?>