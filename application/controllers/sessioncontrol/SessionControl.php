<?php
class SessionControl extends MY_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){

	}

	public function destroy_session(){
		$this->session->sess_destroy();
		redirect("homepage/Home");
	}
}
