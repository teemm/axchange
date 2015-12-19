<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function Chackregister(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('flnames','სახელი და გვარის','trim|required|min_length[2]|max_length[32]');
		$this->form_validation->set_rules('email','ელ-ფოსტის','trim|required');
		$this->form_validation->set_rules('password','გამეორებული ელ-ფოსტა','trim|required');
		$this->form_validation->set_rules('repeatpassword','პაროლის გამეორების ველის','trim|required|matches[password]',
			array('matches','პაროლები არ ემთხვევა ერთმანეთს')
		);
		$this->form_validation->set_rules('mobilenumber','მობილურის ნომრის','trim|required|integer',
			array('integer','აუცილებლად რიცხვები უნდა იყოს')
		);
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('error_signin','error');
			$this->register();
		}
		else{
			$this->load->model('users');
			$this->users->register();
			redirect('');
		}
	}
	public function loginpanel(){
		$this->load->model('users');
		$result=$this->users->login();		
		if($result)redirect('');
		redirect(base_url('pages/login'));
	}
	public function register(){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();	
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('register');
		$this->load->view('footer');			
	}
	public function login(){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();	
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('login');
		$this->load->view('footer');		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}	
}