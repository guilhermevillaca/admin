<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array('msg' => 'teste');
		$this->load->view('home', $data, FALSE);
	}

	public function getNome(){

		$data = array('1' => 'Guilherme', '2' => 'Daniele');		
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */