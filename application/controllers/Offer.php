<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {
	public function  addoffer($swapId){
		$this->load->model('Model_offer');
		$this->Model_offer->addoffer();

		$this->load->model('Swaps');
		$this->load->model('Welcome');
		$data['fullswap']=$this->Swaps->fullView($swapId);
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('fullView'); 
		$this->load->view('footer');		
	}
}