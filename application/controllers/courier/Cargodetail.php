<?php

class Cargodetail extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->onLoad();
	}

	public function index($cargo_id)
	{

		$this->data[MASTER_PAGES]["courier/cargodetail"] = array();
		$this->getData($cargo_id);
		$this->load->view("layout", $this->data);

	}

	public function saveToApi()
	{
		$rulesforrequest = array(
			"insert" => $this->input->post(),
			"is_numeric" => true
		);
		$url = "http://localhost/onlinecourier_api/SaveDb/saveSubscribertoDB";
		$this->curly->post($url, json_encode($rulesforrequest));
		$response = $this->curly->getResponse();
		if ($response["response_code"] >= 200 && $response["response_code"] < 300) {
			$response_arr = $response["response_data"];
			echo $response_arr;
		}
	}

	private function getData($cargo_id)
	{
		$select = "cargo.*,c1.sehir_title as city_title_from,c2.sehir_title as city_title_to ,user.user_name,user.user_surname,user.user_phone_num,user.user_address,vehicle.*,d1.ilce_title as ilce_title_from,d1.ilce_id as ilce_title_from_id,d2.ilce_title as ilce_title_to,d2.ilce_id as ilce_title_to_id";
		$url = "http://localhost/onlinecourier_api/GetDb/GetCargofromDb";
		$rulesforrequest = array(
			"select" => $select,
			"where" => array(
				"cargo_id" => $cargo_id,
				"cargo_row_status" => 1
			),
			"join" => array(
				"user" => "user.user_id = cargo.cargo_user_id",
				"vehicle" => "vehicle.vehicle_id = cargo.cargo_vehicle_id",
				"district as d1" => "d1.ilce_id = cargo.cargo_adress_from_district_key",
				"district as d2" => "d2.ilce_id = cargo.cargo_adress_to_district_key",
				"city as c1" => "d1.ilce_sehirkey  = c1.sehir_key",
				"city as c2" => "d2.ilce_sehirkey  = c2.sehir_key"
			),
			"join_type" => "inner",
			"is_numeric" => null
		);
		$this->curly->post($url, json_encode($rulesforrequest));
		$response = $this->curly->getResponse();
		if ($response["response_code"] >= 200 && $response["response_code"] < 300) {
			$response_arr = json_decode($response["response_data"], true);
			$this->data["result_arr"] = $response_arr["resultcargo"]["result"][0];
			//$this->index();
		}
	}

	private function onLoad()
	{
		$this->data[HEADER_STYLES] = array(
			base_url() . "assets/plugins/fontawesome-free/css/all.min.css",
			base_url() . "assets/plugins/sweetalert2/sweetalert2.min.css",
			base_url() . "assets/plugins/toastr/toastr.min.css",
			base_url() . "assets/dist/css/adminlte.min.css",
			base_url() . "assets/plugins/select2/css/select2.min.css",
			base_url() . "assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css",
			"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
		);

		$this->data[CUSTOM_STYLES] = array(
			base_url() . "assets/dist/css/footer.css"
		);

		$this->data[MASTER_PAGES] = array(
			"masterpages/navbar" => array(),
		);

		$this->data[FOOTER_SCRIPTS] = array(
			base_url() . "assets/plugins/jquery/jquery.min.js",
			base_url() . "assets/plugins/bootstrap/js/bootstrap.bundle.min.js",
			base_url() . "assets/plugins/sweetalert2/sweetalert2.min.js",
			base_url() . "assets/plugins/toastr/toastr.min.js",
			base_url() . "assets/dist/js/adminlte.min.js",
			base_url() . "assets/dist/js/jquery-3.5.1.min.js",
			base_url() . "assets/dist/js/jquery.inputmask.bundle.js",
			base_url() . "assets/plugins/select2/js/select2.full.min.js"
		);

		$this->data[FOOTER] = array(
			"masterpages/footer" => array()
		);

		$this->data[CUSTOM_SCRIPTS] = array(
			"courier/assets/js/cargodetailscripts" => array()
		);
	}

}
