<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CartM extends CI_Model{
        function returnCartItems(){

            //db connection
            $this->load->database();

            //Select from db cart table
            $userID = $_SESSION["userID"];//SESSION VAR NEEDED HERE
            $selectCartItemsQuery = $this->db->query("SELECT * FROM cart WHERE userID = '$userID'");
            $cartItems = $selectCartItemsQuery->result_array();

            //Declare array to hold all foodItems
            $foodItems = array();
            $i = 0;
            foreach ($cartItems as $row){
                //Selecting from fooditems table using foodId retrieved from cart table
                $foodID = $row["foodID"];
                $selectFoodItemsQuery = $this->db->query("SELECT * FROM fooditems WHERE foodID = '$foodID'");

                //Transform this into array
                $foodItem = $selectFoodItemsQuery->result_array();
                
                //Add this array to overall array
                $foodItems[$i] = $foodItem;
                $i++;
                
            }

            //Returning array to controller
            return $foodItems;

        }

            function saveOrderData($orderItems){

                //INSERT INTO Orders table and DELETE From Cart table
                //Inserting into Cart
                $orderDuration = $orderItems['totOrderDuration'];
                $orderPrice = $orderItems['totOrderPrice'];
                $orderStatus = $orderItems['orderStatus'];
                $userId = $orderItems['userId'];
                echo "gyhnjmk";

                //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!AUOTINCREMENT FAILING HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                $insertIntoOrderQuery = $this->db->query("INSERT INTO orders(dateCreated, orderDuration, orderPrice, orderStatus, userId) VALUES(NOW(), '$orderDuration', '$orderPrice', '$orderStatus', '$userId')");
                
                //Redirect to Orders View Relation
                redirect("http://localhost/Event-food-catering3/index.php/OrderC");


                //for($i = 0; $i < count($rowDataPrices); $i++){
                //    echo($rowDataPrices[$i]['fooditem'] ." - " .$rowDataPrices[$i]['price'] ."<br>");
                //    if($foodPicked == $rowDataPrices[$i]['fooditem']){
                //        $foodPickedPrice = $rowDataPrices[$i]['price'];
                //        $foodPickedPrice = $foodPickedPrice * $foodSize;
                //    }
                //}

                /*
                foreach ($sqlMenuDisplay->result() as $row)
                {
                    echo $row->foodId;
                }
                */
        }

        function deleteCartItem($cartItemToDelete){
            //SESSION and DB ARS HERE
            $userID = $_SESSION["userID"];

            //Get foodId of $cartItemToDelete
            $selectFoodIDQuery = $this->db->query("SELECT foodID FROM fooditems WHERE foodName = '$cartItemToDelete'");

            //Transform this into array
            $rowCartItemToDeleteFoodID =  $selectFoodIDQuery->result_array();

            foreach($rowCartItemToDeleteFoodID  as $row){
                echo($row["foodID"]);
                $foodID = $row["foodID"];
                $deleteFromCartQuery = $this->db->query("DELETE FROM cart WHERE foodID = '$foodID' AND userID = '$userID'");
            }

            


            //Redirect to Cart Page
            redirect("http://localhost/Event-food-catering3/index.php/CartC/index");
        }

}
    
?>