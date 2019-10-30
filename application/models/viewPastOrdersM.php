<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class viewPastOrdersM extends CI_Model{
        function returnOrderDetails(){
            //Selecting from Order table
            //db connection
            $this->load->database();

            //Getting DB parameters
            $userId = $_SESSION["userID"]; //SESSION VAR NEEDED HERE
            $orderStatus = "Confirmed";


            //Select from db- orders table where userId = SESSION VAR AND status = Pending
            $query = $this->db->query("SELECT * FROM orders WHERE userId = '$userId'");
            
            //Transform this into array
            $query->result_array();

            //Returning array to controller
            return $query->result_array();
            
        }

        //Might use these functions later
        /*
        function returnUserDetails(){
            //Selecting from Users table
            //db connection
            $this->load->database();

            //Getting DB parameters
            $userId = 1; //SESSION VAR NEEDED HERE

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
            $userId = $userId;
            $oldOrderStatus = "Pending";
            $newOrderStatus = "Confirmed";
            
            //Updating orders table to set final status of order as completed
            $updateOrdersFinal = $this->db->query("UPDATE orders SET orderStatus = '$newOrderStatus' WHERE userId = '$userId' AND orderStatus = '$oldOrderStatus'") ;

            
            echo("
                <script>
                    <div ><a>window.location.replace('MenuC')</a></div>
                </script>
            ");
            
            header("Location: HomePage.php");

        }
        */

        
        
    }
    
?>