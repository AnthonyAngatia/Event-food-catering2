<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{ 
	public function __construct()
	{
		parent::__construct();
		$this -> load-> model('Ahomepage_model');
		$this -> load-> library('form_validation');
		$this -> load-> helper('url','html');
		$this->load->helper(array('form', 'url'));
	}
	

	public function index()
	{

		
		$this ->load->view('adminupload_views', array('error' => ' ' ));
	} 
	public function do_upload()
        {
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 100;
                $config['max_width']      = 1024;
                $config['max_height']     = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('uploadfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('adminupload_views', $data);
                }
        }
	public function form_validation() 
	{

		$this-> load->library('form_validation');
		$this-> form_validation->set_rules("foodName","Food Name",'required');
		$this-> form_validation->set_rules("foodPrice","Food Price",'required');
		$this-> form_validation->set_rules("foodImage","Food Image",'required');
		$this-> form_validation->set_rules("foodType","Food Type",'required');

		if($this-> form_validation-> run())
		{
			$this-> load-> model('admin_model');
		
   			
			$data = array(
			"foodName" => $this -> input-> post ("foodName"),
			"foodPrice" => $this -> input-> post ("foodPrice"),

			"foodImage" => $this -> input-> post ("foodImage"),
			"foodType" => $this -> input-> post ("foodType"));
			  $this -> admin_model -> insert_data($data);
			  redirect('Ahomepage','refresh');
			
			  

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

}
public function inserted()
{
	$this->index();
}

}



?>