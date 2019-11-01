<?php
  
  class Order_model extends CI_Model
  {
  	public function fetch_data()
  		{   $this->load->database();
  			$query = $this ->db->get("orders");
  			return $query;
  		}
  }

  ?>