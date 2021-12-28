<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_controller extends CI_Controller {

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
		$this->load->view('registration');
	}

	public function save_owner_data(){
		$client_name = $this->input->post("client_name");
		$location = $this->input->post("location");
		$email = $this->input->post("email");
		$phone_number = $this->input->post("phone_number");

		$data = array(
			'client_name' => $client_name,
			'location' => $location,
			'email' => $email,
			'phone_number' => $phone_number,
		);
		$msg['data'] = $this->Registration_model->insert_registration_data($data);
		
		redirect('/');
	}

	public function save_customer_data(){
		$Customer_name = $this->input->post("customer_name");
		$prefered_location = $this->input->post("prefered_location");
		$Enter_email = $this->input->post("email");
		$Property_needed = $this->input->post("property_needed");
		$Phone_number = $this->input->post("phone_number");
	
		$data = array(
			'customer_name' => $Customer_name,
			'prefered_location' => $prefered_location,
			'email' => $Enter_email,
			'phone_number' => $Phone_number,
	);
	$msg['data'] = $this->Customer_registration_model->insert_registration_data($data);
	
	redirect('/');
	}
	public function save_added_data(){
		$Clientname = $this->input->post("client_name");
		$Enteremail = $this->input->post("email");
		$Propertytype = $this->input->post("Property_type");
		$PropertyDescription = $this->input->post("Property_Description");
		$Location = $this->input->post("location");
		
	
		$data = array(
			'Clientname' => $client_name,
			'Enteremail' => $email,
			'Propertytype' => $Property_type,
			'PropertyDescription' => $PropertyDescription,
			'Location' => $location,

			
	);
	$msg['data'] = $this->Customer_registration_model->insert_registration_data($data);
	
	redirect('/');
}