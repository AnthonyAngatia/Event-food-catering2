<?php
  
  class Cateringe_model extends CI_Model
  {
  	public function fetch_data()
  		{   $this->load->database();
  			$query = $this ->db->get("catering");
  			return $query;
  		}
  }

  ?>