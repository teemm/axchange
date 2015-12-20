<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_offer extends CI_Model{
	public function  addoffer(){
		$new_file_name="";
		if(isset($_FILES['imagesname'])){
			$photo = $_FILES['imagesname'];
			$file_name = $_FILES['imagesname']['name'];
			$file_type = $_FILES['imagesname']['type'];
			$file_temp_name = $_FILES['imagesname']['tmp_name'];
			$file_size = $_FILES['imagesname']['size'];
			if( ($file_type=="image/jpeg" || $file_type=="image/png" || $file_type=="image/gif" || $file_type=="image/jpg")&& $file_size/1024<=10240){
				$typeimg=array(
				 	array('jpeg','image/jpeg'),
				 	array('png','image/png'),
				 	array('gif','image/gif'),
				 	array('jpg','image/jpg')
				);
				for($i=0;$i<count($typeimg);$i++){
					if($typeimg[$i][1]==$file_type){
						$svtypeimg=$typeimg[$i][0];
						$new_file_name=gmdate("YmdHis",time()+(4*60*60)).".".$svtypeimg;
					}
				}
				$filename="assets/images/$new_file_name";
				move_uploaded_file($file_temp_name,$filename);
			}
		}

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
			'img_url'=>$new_file_name
		);
		$this->db->insert('offerimage',$data); 
		$this->session->set_flashdata('successAdd', 'დაემატა');		
	}
}