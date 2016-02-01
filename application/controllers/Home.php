<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Home extends REST_Controller  {

	public function index()
	{
		$data = array('msg' => 'teste');
		$this->load->view('home', $data, FALSE);
	}

	public function index_get(){

		$data = array('1' => 'Guilherme', '2' => 'Daniele');		
		/*$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));*/

		$this->response($data);
		$this->load->view('home', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */