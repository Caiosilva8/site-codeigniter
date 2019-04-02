<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Restrict extends CI_Controller{
		public function index(){
			$this->load->model("users_model");
			print_r($this->users_model->get_user_data("Caiosilva8"));
			//echo password_hash("Caio24155062",PASSWORD_DEFAULT);
			//$this->template->show("login.php");
		}
		
	}

