<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_entry_web extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$session_data['menu'] = [
			'entry_web/entry_web'
		];
		$this->load->view('page/v_data_entry_web/v_home', $session_data);
	}

}