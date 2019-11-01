<?php
  
  class Admin_model extends CI_Model
  {
  		public function insert_data($data)
  		{ 
  			$this ->db -> insert("fooditems",$data);

  		}
      
  		public function fetch_data()
  		{   $this->load->database();
  			$query = $this ->db->get("fooditems");
  			return $query;
  		}
  		public function delete_data($foodID)
      { 
        
        $this->db->delete('fooditems', array('FoodID' => $foodID));
      
      }
      public function fetch_single_data($foodID)
      {
        
        $this->db->where("foodID",$foodID);
        $query = $this->db->get("fooditems",$foodID);
        return $query ;
      
        
      }
     
      public function File_upload()
      {
        $this-> db-> insert('fooditems',$data);
        if($qry)
        {
          echo "File Upload Success";
        }
        else
        {
          echo "File Upload Error";
        }
      }

      public function update_id($foodID)
      {
        $this->load->database();
        $this->db->where('foodID',$foodID);
        $this->db->update("fooditems",$data);
       
      }




  }

?>