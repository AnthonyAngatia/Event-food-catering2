<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class TestM extends CI_Model{

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

            //db connection
            $this->load->database();
            $query = "INSERT INTO cart2(foodName) VALUES('$menuFoodPicked')";
            $this->db->query($query);
            redirect("")
        }
        
    
    }
    
?>