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
		$this->addImage();
		var_dump($_FILES);
	}
	public function addImage(){
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
				$filename="assets/images/swaps/$new_file_name";
				move_uploaded_file($file_temp_name,$filename);
			}
		}
		// $data=array(
		// 	'swap_id'=>,
		// 	'autor'=>,
		// 	'img_url'=>
		// );
		// $this->db->insert('swapimages',$data);
	}
}?>