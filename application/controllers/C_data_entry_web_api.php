<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_entry_web_api extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

}