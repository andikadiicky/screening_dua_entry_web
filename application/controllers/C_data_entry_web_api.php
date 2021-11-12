<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_entry_web_api extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}
	public function getAllCard()
	{
		$data = $this->models->get_methode("http://redis-mst-jenis-identitas-dev.apps.ocp4dev.muf.co.id/getAllCard");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

	public function getAllMarital()
	{
		$data = $this->models->get_methode("http://redis-mst-marital-status-dev.apps.ocp4dev.muf.co.id/getAllMarital");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

	public function getDataZipCodePostgre()
	{
		$param = array(
			"value" => strtoupper($this->input->post("value"))
		);
		$data = $this->models->post_methode($param, $this->config->item('java_postgre_zip_code') . "getDataByZipcode");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

	public function getAllFinanceType()
	{
		$data = $this->models->get_methode("http://redis-mst-finance-type-dev.apps.ocp4dev.muf.co.id/getAllFinanceType");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

	public function getAllObject()
	{
		$data = $this->models->get_methode("http://redis-mst-object-dev.apps.ocp4dev.muf.co.id/getAllObject");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

	public function getAllBrandModel()
	{
		$data = $this->models->get_methode("http://master-model-brand-group-java-dev.apps.ocp4dev.muf.co.id/getAllBrandModel");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

	public function getAllTenor()
	{
		$data = $this->models->get_methode("http://redis-mst-tenor-dev.apps.ocp4dev.muf.co.id/getAllTenor");
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
	}

}