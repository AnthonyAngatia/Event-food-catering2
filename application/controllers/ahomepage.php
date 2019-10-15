<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ahomepage extends CI_Controller
{ 

	 public function __construct()
	{
		parent::__construct();
		$this -> load-> model('Ahomepage_model');
		$this -> load-> library('form_validation');
		$this -> load-> helper('url','html');
		$this->load->helper(array('form','url'));
	}
	

	public function index()
	{	
		$this->load->model('admin_model');
		$fetch_data = $this-> admin_model ->fetch_data();
		$this-> load->view('adminhomepage_views', $fetch_data);
			
	}
	public function delete_data($id)
	{	
		
		$this-> load-> model('admin_model');
		$this ->admin_model->delete_data($id);
		redirect('Ahomepage','refresh');
	}
	public function get_data()
	{
		$this->load->model("admin_model");
		$data = $this->admin_model->fetch_data();
		$this->load->view("adminhomepage_views", $data);


	}
	public function edit_data($id)
	{
		$this-> load-> model("admin_model");
		$user_data['user_data'] = $this->admin_model->fetch_single_data($id);
		
		$this->load->view("adminhomepage_views",$user_data);

	}
	public function update_data()
	{	  

			$this->load->model("admin_model");
			$data = array(
			"foodName" => $this -> input-> post ("foodName"),
			"foodPrice" => $this -> input-> post ("foodPrice"),
			"foodImage" => $this -> input-> post ("foodImage"),
			"foodType" => $this -> input-> post ("foodType"));
			$id = $this->input->post("eid");

			$this->admin_model->updateuserbyid($data,$id);
			
		if($this->admin_model->updateuserbyid($data,$id)){ 
		  	$this->load->model("admin_model");
			$data = $this->admin_model->fetch_data();
			$this->load->view("adminhomepage_views",$data);
													  }

		



	}
	
}

?>