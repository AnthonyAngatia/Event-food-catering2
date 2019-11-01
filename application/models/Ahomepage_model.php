<?php
  
  class Ahomepage_model extends CI_Model
  {
  	
  		public function fetch_data()
  		{
  			$query = $this ->db->get("fooditems");
  			return $query;
  		}

    }

   ?> 