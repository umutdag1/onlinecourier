<?php

class SignUp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("sign/signup");
	}

	public function requestfromAjax()
	{
		$this->form_validation->set_rules("name", "name", "trim|required|xss_clean");
		$this->form_validation->set_rules("surname", "surname", "trim|required|xss_clean");
		$this->form_validation->set_rules("email", "email", "trim|required|xss_clean|valid_email");
		$this->form_validation->set_rules("address", "address", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "password", "trim|required|xss_clean|regex_match[/^[][a-zA-Z0-9@#+*{}!,().]+$/]");
		$this->form_validation->set_rules("phonenum", "phonenum", "trim|required|xss_clean");
		if ($this->form_validation->run()) {
			$name = $this->input->post("name", TRUE);
			$surname = $this->input->post("surname", TRUE);
			$email = $this->input->post("email", TRUE);
			$address = $this->input->post("address", TRUE);
			$password = $this->input->post("password", TRUE);
			$phonenum = $this->input->post("phonenum", TRUE);
			$this->request($name, $surname, $email, $address,$phonenum, $password);
		} else {
			echo "Error: Email or password is incorrect";
		}
	}

	public function request($name, $surname, $email, $address,$phonenum, $password)
	{
		if (!is_null($email) && !is_null($password) && !is_null($name)
			&& !is_null($surname) && !is_null($phonenum) && !is_null($address)) {
			date_default_timezone_set('Europe/Istanbul');
			$created_time = date("Y-m-d H:i:s");
			$rulesforrequest = array(
				"insert" => array(
					"user_email" => htmlspecialchars($email),
					"user_name" => htmlspecialchars($name),
					"user_surname" => htmlspecialchars($surname),
					"user_address" => htmlspecialchars($address),
					"user_created_time" => $created_time,
					"user_phone_num" => htmlspecialchars($phonenum),
					"user_password" => hash("sha256", htmlspecialchars($password)),
					"user_row_status" => 1,
					"user_is_active" => 1
				),
				"is_numeric" => true
			);
			$url = "http://localhost/onlinecourier_api/SaveDb/saveUsertoDB";
			$this->curly->post($url, json_encode($rulesforrequest));
			$response = $this->curly->getResponse();
			if ($response["response_code"] >= 200 && $response["response_code"] < 300) {
				echo "refresh";
			} else {
				echo "Error : You cannot sign up";
			}
		}
	}
}
