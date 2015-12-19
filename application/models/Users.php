<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model{
	public function register(){
		$data = array(
	        'fname' => htmlentities($this->input->post('fname',TRUE)),
	        'email' => htmlentities($this->input->post('email',TRUE)),
	        'user_img'=>'user-alt-128.png',
	        'password'=> htmlentities($this->input->post('password',TRUE)),
	        'mobnumber'=> htmlentities($this->input->post('mobnumber',TRUE)),
		);
		$this->db->insert('users', $data);
		$this->session->set_flashdata('sucess', 'თქვენ წარმატებით დარეგისტრირდით');
	}
}