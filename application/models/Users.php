<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model{
	public function register(){
		$data = array(
	        'fname' => htmlentities($this->input->post('flnames',TRUE)),
	        'email' => htmlentities($this->input->post('email',TRUE)),
	        'user_img'=>'user-alt-128.png',
	        'password'=> sha1(htmlentities($this->input->post('password',TRUE))),
	        'mobnumber'=> htmlentities($this->input->post('mobilenumber',TRUE)),
		);
		$this->db->insert('users', $data);

		$this->db->where('email',$this->input->post('email',TRUE));
		$rows=$this->db->get('users')->row_array();
		$this->session->set_userdata('userSwap', $rows['id']);
	}
	public function login(){
		$this->db->where('email',$this->input->post('email',TRUE));
		$this->db->where('password',sha1($this->input->post('password',TRUE)));
		$countuser=$this->db->count_all_results('users');
		if($countuser>0){
			$rows=$this->db->get('users')->row_array();
			$this->session->set_userdata('userSwap', $rows['id']);
			return TRUE;
		}
		return FALSE;
	}
}