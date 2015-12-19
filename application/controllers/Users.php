<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function Chackregister(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname','სახელის','trim|required|min_length[2]|max_length[32]');
		$this->form_validation->set_rules('lname','გვარის','trim|required|min_lengt[2]|max_length[32]');
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
			redirect(base_url());
		}
	}
}