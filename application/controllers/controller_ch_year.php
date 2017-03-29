<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_ch_year extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->view('view_ch_year');
		$this->load->model('model_ch_year');
		
	}

	public function index(){
		
	}
	public function method_test(){

		//var_dump($_POST);
		//$year_en=$_POST["year_en"];

		$year_en= $this->input->post("year_en");

		$year_th = $this->model_ch_year->edit_year($year_en);
		echo $year_th;
	}


}

/* End of file controller_ch_year.php */
/* Location: ./application/controllers/controller_ch_year.php */
?>
