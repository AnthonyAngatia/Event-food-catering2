<?php
  
  class Admin_model extends CI_Model
  {
  		public function insert_data($data)
  		{ 
  			$this ->db -> insert("food_products",$data);

  		}
      
  		public function fetch_data()
  		{
  			$query = $this ->db->get("food_products");
  			return $query;
  		}
  		public function delete_data($id)
      {
        $this -> db-> where("id" ,$id);
        $this -> db -> delete("food_products");
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




  }

?>