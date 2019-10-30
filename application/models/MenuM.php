<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class MenuM extends CI_Model{

        function returnMenuItems(){

            //db connection
            $this->load->database();

            //Select from db
            $query = $this->db->query('SELECT * FROM fooditems');
            
            //Transform this into array
            $query->result_array();
            
            //Returning array to controller
            return $query->result_array();
    
            /*
            foreach ($sqlMenuDisplay->result() as $row)
            {
                echo $row->foodId;
            }
            */
        }

        function saveFoodsPicked($menuFoodPicked){
            $userID = 1;
            $selectFoodItemsQuery = $this->db->query("SELECT * FROM fooditems WHERE foodName = '$menuFoodPicked'");
            $foodItems = $selectFoodItemsQuery->result_array();
            foreach ($foodItems as $row){
                //Inserting into Cart
                $foodID = $row["foodID"];
                $insertIntoCartQuery = $this->db->query("INSERT INTO cart(foodID, userID) VALUES('$foodID', '$userID')");
                
                //redirect("http://localhost/Event-food-catering3/index.php/CartC");
                //redirect(http://localhost/Event-food-catering3/index.php/CartC.php)
                //  http://localhost/Event-food-catering3/index.php/CartC.php
            }

        }
        
    
    }
    
?>