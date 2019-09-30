<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{ 

	

	public function index()
	{

		
		$this ->load->view('menu_views');



	} 
	public function form_validation()
	{

		$this-> load->library('form_validation');
		$this-> form_validation->set_rules("foodname","Food Name",'required');
		$this-> form_validation->set_rules("foodprice","Food Price",'required');
		$this-> form_validation->set_rules("foodImage","Food Image",'required');
		$this-> form_validation->set_rules("foodtype","Food Type",'required');

		if($this-> form_validation-> run())
		{
			$this-> load-> model('admin_model');
			$data = array (
			"foodname" => $this -> input-> post ("foodname"),
			"foodprice" => $this -> input-> post ("foodprice"),
			"foodImage" => $this -> input-> post ("foodImage"),
			"foodtype" => $this -> input-> post ("foodtype"));
			  
			  $this -> admin_model -> insert_data($data);
			  echo "It has worked!";
			
			  

		}
		else
		{
		
			$this -> index();
		}

	}


public function delete_data()
{
	$id = $this -> uri -> segment(3);
	$this -> load -> model('admin_model');
	$this -> admin_model -> delete_data($id);
	echo "It is deleted";
	//redirect ('Admin/deleted');


}
/*public function deleted()
{

	$this -> index();
}*/
/*public function file_upload()
{
	$config['upload_path'] = ".assets";
	$config['allowed_types'] = "*";
	$this -> load -> library('upload',config);
	$this ->upload-> do_upload('foodImage');
	$foodImage = $this -> upload -> data();
	$data = array ('foodImage' => foodImage['foodImage']);
	$this -> admin_model ->File_upload($data);



}*/

}



?>