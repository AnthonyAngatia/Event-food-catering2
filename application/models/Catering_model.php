<?php

class Catering_model extends CI_Model
{
    public function fetch_carbohydrates()
    {
        //$query = $this->db->get("fooditems");
        $query = $this->db->query("SELECT foodName,  FROM fooditems WHERE foodType = 'Carbohydrates'");


        return $query;
    }
    public function fetch_protein()
    {
        //$query = $this->db->get("fooditems");
        $query = $this->db->query("SELECT foodName,  FROM fooditems WHERE foodType = 'Protein'");


        return $query;
    }
    public function fetch_salad()
    {
        //$query = $this->db->get("fooditems");
        $query = $this->db->query("SELECT foodName,  FROM fooditems WHERE foodType = 'Salad'");


        return $query;
    }
    public function fetch_drinks()
    {
        //$query = $this->db->get("fooditems");
        $query = $this->db->query("SELECT foodName,  FROM fooditems WHERE foodType = 'Drinks'");


        return $query;
    }
    /*
    !
CREATE TABLE Catering (
Catering_id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
No_of_people int(255) NOT NULL,
Carbohydrate VARCHAR(30) NOT NULL,
Protein VARCHAR(30) NOT NULL,
Salad VARCHAR(30) NOT NULL,
Drink VARCHAR(30) NOT NULL,
Description TEXT NOT NULL,
Location VARCHAR(30) NOT NULL,
Start_time VARCHAR(30) NOT NULL,
End_time VARCHAR(30) NOT NULL
)
    */
    public function insert_data($data)
    {

        $this->db->insert("catering", $data);
    }
}
