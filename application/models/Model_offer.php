<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_offer extends CI_Model{
	public function  addoffer(){
		$adressid=$this->db->where('id',$this->input->post('adressid',TRUE))->get('swaps')->row_array()['autor'];
		$data=array(
			'autor'=>$this->session->userSwap,
			'title'=>$this->input->post('titleitem',TRUE),
			'status'=>$this->input->post('status',TRUE),
			'adressId'=>$adressid
		);
		$this->db->insert('offer',$data);

		$data=array(
			'autor'=>$this->session->userSwap,
			'offer_id'=>$this->input->post('adressid',TRUE),
			'img_url'=>$this->input->post('imagesName',TRUE)
		);
		$this->db->insert('offerimage',$data); 

		$this->load->helper('file');
		$this->do_upload();
	}
}