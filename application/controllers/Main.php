<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('main');
		$this->load->view('footer');
	}
	public function search(){
		$this->load->model('Welcome');
		print_r($data['search']=$this->Welcome->search());
	}
	public function fullView(){
		$this->load->model('Welcome');
		print_r($this->Welcome->fullView());
	}
	public function Chackregister(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname','სახელი და გვარის','trim|required|min_length[2]|max_length[32]');
		$this->form_validation->set_rules('email','ელ-ფოსტის','trim|required');
		$this->form_validation->set_rules('password','გამეორებული ელ-ფოსტა','trim|required');
		$this->form_validation->set_rules('repeatpassword','პაროლის გამეორების ველის','trim|required|matches[password]',
			array('matches','პაროლები არ ემთხვევა ერთმანეთს')
		);
		$this->form_validation->set_rules('mobnumber','მობილურის ნომრის','trim|required|integer',
			array('integer','აუცილებლად რიცხვები უნდა იყოს')
		);
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('error_signin','error');
			$this->register();
		}
		else{
			$this->load->model('users');
			$this->users->register();
		}

	}	
}
