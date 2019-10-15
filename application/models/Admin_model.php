<?php
  
  class Admin_model extends CI_Model
  {
  		public function insert_data($data)
  		{ 
  			$this ->db -> insert("food_products",$data);

  		}
      
  		public function fetch_data()
  		{   $this->load->database();
  			$query = $this ->db->get("food_products");
  			return $query;
  		}
  		public function delete_data($id)
      { 
        
        $this->db->delete('food_products', array('id' => $id));
      
      }
      public function fetch_single_data($id)
      {
        
        $this->db->where("id",$id);
        $query = $this->db->get("food_products",$id);
        return $query ;
        
        
      }
     
      public function File_upload()
      {
        $this-> db-> insert('food_products',$data);
        if($qry)
        {
          echo "File Upload Success";
        }
        else
        {
          echo "File Upload Error";
        }
      }
      public function updateuserbyid($data,$id)
      {
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->set("food_products",$data);
        return true; 
      }




  }

?>