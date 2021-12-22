<?php

class SignIn extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("sign/signin");
	}

	public function requestfromAjax()
	{
		$this->form_validation->set_rules("email", "email", "trim|required|xss_clean|valid_email");
		$this->form_validation->set_rules("password", "password", "trim|required|xss_clean|regex_match[/^[][a-zA-Z0-9@#+*{}!,().]+$/]");
		if ($this->form_validation->run()) {
			$email = $this->input->post("email", TRUE);
			$password = $this->input->post("password", TRUE);
			$this->request($email, $password);
		} else {
			echo "Error: Email or password is incorrect";
		}
	}

	public function request($email, $password)
	{
		if (!is_null($email) && !is_null($password)) {
			$rulesforrequest = array(
				"where" => array(
					"user_email" => htmlspecialchars($email),
					"user_password" => hash("sha256", htmlspecialchars($password))
				),
				"is_numeric" => false
			);
			$url = "http://localhost/onlinecourier_api/GetDb/getUserfromDB";
			$this->curly->post($url,json_encode($rulesforrequest));
			$response = $this->curly->getResponse();
			if ($response["response_code"] >= 200 && $response["response_code"] < 300) {
				$response_arr = json_decode($response["response_data"],true);
				if ($response_arr["resultuser"]["result"][0]["user_row_status"] == 1 &&
					$response_arr["resultuser"]["result"][0]["user_is_active"] == 1) {
					//print_r($response_arr["resultuser"]["result"][0]);
					$this->call_to_create_session($response_arr["resultuser"]["result"][0]);
					echo "refresh";
				} else {
					echo "Error: You are banned";
				}
			} else {
				echo "Error: Email or password is incorrect";
			}
		}
	}

	private function call_to_create_session($data){
		$this->data["session_array"] = array(
			'user_id' => $data["user_id"],
			'name' => $data["user_name"],
			'surname' => $data["user_surname"],
			'email' => $data["user_email"],
			'phone_num' => $data["user_phone_num"],
			"login_status" => 1,
			"user_row_status" => $data["user_row_status"],
			"user_is_active" => $data["user_is_active"]
		);

		$this->session->set_userdata($this->data["session_array"]);
	}
}
