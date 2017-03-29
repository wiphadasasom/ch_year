<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ch_year extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function edit_year($year_en){

		return $year_en+543;
	


	}

	

}

/* End of file model_ch_year.php */
/* Location: ./application/models/model_ch_year.php */
?>