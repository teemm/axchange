<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {
	public function seachSubcat($catid){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->model('Searching');
		$data['seachSubcat']=$this->Searching->seachSubcat($catid);
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('seachSubcat');
		$this->load->view('footer');		
	}
	public function saechcategories($catid){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->model('Searching');
		$data['seachSubcat']=$this->Searching->categories($catid);
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('seachSubcat');
		$this->load->view('footer');		
	}	
}