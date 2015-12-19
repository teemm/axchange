<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->model('Welcome');
		$data['menu']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->search();
	}
	public function search(){
		$this->load->model('Welcome');
		print_r($data['search']=$this->Welcome->search());
	}
}
