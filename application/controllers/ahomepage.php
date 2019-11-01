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
	public function delete_data($foodID)
	{	
		
		$this-> load-> model('admin_model');
		$this ->admin_model->delete_data($foodID);
		redirect('Ahomepage','refresh');
	}
	public function get_data()
	{
		$this->load->model("admin_model");
		$data = $this->admin_model->fetch_data();
		$this->load->view("adminhomepage_views", $data);


	}
	public function edit_data($foodID)
	{
		$this-> load-> model("admin_model");
		$user_data['user_data'] = $this->admin_model->fetch_single_data($foodID);
		
		$this->load->view("adminhomepage_views",$user_data);

	}
	public function form_validation()
	{
			
		$this-> load->library('form_validation');
		$this-> form_validation->set_rules("foodPrice","Food Price",'required');
		$this-> form_validation->set_rules("foodImage","Food Image",'required');
		$this-> form_validation->set_rules("foodType","Food Type",'required');
		$this-> form_validation->set_rules("foodDuration","Food Type",'required');
		$this-> form_validation->set_rules("foodName","Food Type",'required');

			$this->load->model("Admin_model");
			$data = array(
			"foodPrice" => $this -> input-> post ("foodPrice"),
			"foodImage" => $this -> input-> post ("foodImage"),
			"foodType" => $this -> input-> post ("foodType"),
			"foodDuration" => $this ->input-> post ("foodDuration"),
			"foodName" => $this -> input-> post ("foodName"));
			$this->admin_model->update_id($data,$this->input->post('eid'));

	}
	public function update_data($foodID,$data)
	{	  
			$data = array(
			'foodPrice' => $this -> input-> post ('foodPrice'),
			'foodImage' => $this -> input-> post ('foodImage'),
			'foodType' => $this -> input-> post ('foodType'),
			'foodDuration' => $this ->input-> post ('foodDuration'),
			'foodName' => $this -> input-> post ('foodName'));
			$this->load->model("Admin_model");
			$foodID = $this->Admin_model->fetch_single_data(
			)
			$this->admin_model->update_id($foodID,$data);
			$this->load->view("adminhomepage_views",$load);
				

													  }
	}

	


?>