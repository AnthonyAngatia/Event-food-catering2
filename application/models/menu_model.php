<?php
  
  class Menu_model extends CI_Model
  {
  	public function fetch_data()
  		{   $this->load->database();
  			$query = $this ->db->get("fooditems");
  			return $query;
  		}
  }

  ?>