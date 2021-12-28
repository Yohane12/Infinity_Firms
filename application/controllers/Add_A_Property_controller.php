<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_A_Property_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Add_A_Property');
	}
	public function save_added_data(){
		$client_name = $this->input->post("client_name");
		$email = $this->input->post("email");
		$property_type = $this->input->post("Property_type");
		$propertyDescription = $this->input->post("Property_Description");
		$location = $this->input->post("location");
		
	
		$data = array(
			'client_name' => $client_name,
			'email' => $email,
			'property_type' => $property_type,
			'property_description' => $propertyDescription,
			'location' => $location,

			
	);
	$msg['data'] = $this->Customer_registration_model->insert_property_data($data);
	
	redirect('/');
}
}
