<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class OrderM extends CI_Model{
        function returnOrderDetails(){
            //Selecting from Order table
            //db connection
            $this->load->database();

            //Getting DB parameters
            $userId = $_SESSION["userID"]; //SESSION VAR NEEDED HERE
            $orderStatus = "Pending";


            //Select from db- orders table where userId = SESSION VAR AND status = Pending
            $query = $this->db->query("SELECT * FROM orders WHERE userId = '$userId' AND orderStatus = '$orderStatus'");
            
            //Transform this into array
            $query->result_array();

            //Returning array to controller
            return $query->result_array();
            
            
        }

        function returnUserDetails(){
            //Selecting from Users table
            //db connection
            $this->load->database();

            //Getting DB parameters
            $userId = $_SESSION["userID"]; //SESSION VAR NEEDED HERE

            //Select from customers table where userId = SESSION VAR
            $query = $this->db->query("SELECT * FROM users WHERE id = '$userId'");            
            
            //Transform this into array
            $query->result_array();
            
            //Returning array to controller
            return $query->result_array();
            
        }

        function saveOrderData($userId){
            //Change orderStatus to final and redirect customer to home page..... Remember to inform through JS in orderV
            
            //SESSION and DB VARS here
            $userId = $_SESSION["userID"];
            $oldOrderStatus = "Pending";
            $newOrderStatus = "Confirmed";
            
            //Updating orders table to set final status of order as completed
            $updateOrdersFinal = $this->db->query("UPDATE orders SET orderStatus = '$newOrderStatus' WHERE userId = '$userId' AND orderStatus = '$oldOrderStatus'") ;

            //Delete all items from Cart for this user
            $deleteAllFtomCart = $this->db->query("DELETE FROM cart WHERE userId = '$userId' ") ;
            
            echo("
                <script>
                    <div ><a>window.location.replace('MenuC')</a></div>
                </script>
            ");

            redirect("/Homepage/index");
            //header("Location: HomePage.php");

        }

        
        
    }
    
?>