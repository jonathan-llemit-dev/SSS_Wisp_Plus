<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WispPlusFormController extends CI_Controller {

	public function index()
	{
		$this->load->view('wisp_plus_form');
	}

}
