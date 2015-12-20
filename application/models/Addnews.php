<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addnews extends CI_Model{
	public function Addnews(){
		$this->db->where('id', $this->session->userSwap);
		$contact = $this->db->get('users')->row_array()['mobnumber'];


		$data=array(
			'title'=>$this->input->post('nameofitem',TRUE),
			'state'=>$this->input->post('city',TRUE),
			'status'=>$this->input->post('status',TRUE),
			'wantstuff'=>$this->input->post('wantstuff',TRUE),
			'autor'=>$this->session->userSwap,
			'contact' => $contact,
			'description' => $this->input->post('desc',TRUE),
			'cat_id' => $this->input->post('cat',TRUE),
		);
		$this->db->insert('swaps',$data); 
	}
	public function addImage($imageName){
		


		$this->db->set('image_name', $imageName);
		$this->db->insert('swapimages');
		redirect('main/info');
	}
}?>