<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{	
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->model('Swaps');
		$data['vipswaps']=$this->Swaps->vipswaps();		
		$data['newswaps']=$this->Swaps->newswaps();
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('vip');
		$this->load->view('newsposts');  
		$this->load->view('footer');
	}
	public function search(){
		$this->load->model('Welcome');
		print_r($data['search']=$this->Welcome->search());
	}
	public function fullView($swapId){
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
	public function addnews(){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('addnews'); 
		$this->load->view('footer');			
	}
	public function addnewss(){
        $this->load->model('Addnews');
		$this->Addnews->Addnews();
	}
}
