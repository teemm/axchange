<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myprofile extends CI_Controller {
	public function profile(){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('profile');
		$this->load->view('footer');	
	}
}