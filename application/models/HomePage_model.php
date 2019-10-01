<?php

class HomePage_model extends CI_Model
{
    public function fetch_data()
    {
        //$query = $this->db->get("fooditems");
        $query = $this->db->query("SELECT foodName, foodPrice FROM fooditems");


        return $query;
    }
}
