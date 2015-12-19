<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Swaps extends CI_Model{
	public function  vipswaps(){
		$this->db->select('swaps.title,wantstuff,swaps.id as swapId');
		$this->db->where('swaps.vip','1');
		$row=$this->db->get('swaps',3)->result_array();

		$this->db->select('swapimages.img_url,swapimages.swap_id');
		$row2=$this->db->get('swapimages')->result_array();	
		return $fimage=$this->firtimage($row,$row2);
	}
	public function newswaps(){
		$this->db->select('swaps.title,wantstuff,swaps.id as swapId');
		$this->db->where('swaps.vip','0');
		$this->db->order_by('swaps.add_date','DESC');
		$row=$this->db->get('swaps')->result_array();
		$this->db->select('swapimages.img_url,swapimages.swap_id');
		$row2=$this->db->get('swapimages')->result_array();			
		return $fimage=$this->firtimage($row,$row2);
	}
	public function firtimage($row,$row2){
		foreach ($row as $key => $value) {
			$id=$value['swapId'];
			foreach ($row2 as  $value2) {
				if($value2['swap_id']==$id){
					$row[$key]['image']=$value2['img_url'];
					break;
				}
			}
		}
		return 	$row;
	}
	public function fullView($swapid){
		$this->db->select('swaps.id as swapsId,swaps.autor,contact,title,status,state,wantstuff,users.fname');
		$this->db->where('swaps.id',$swapid);
		$this->db->join('users','users.id=swaps.autor');
		$rows=$this->db->get('swaps')->result_array();	

		$this->db->select('swapimages.swap_id,swapimages.first_image,swapimages.img_url');
		$this->db->where('swapimages.swap_id',$swapid);
		$rows2=$this->db->get('swapimages')->result_array();	

		foreach ($rows as $key => $value) {
			$id=$value['swapsId'];
			foreach ($rows2 as $value2) {
				if($value2['swap_id'] == $id){
					if($value2['first_image']=='1'){
						$rows[$key]['firstimage']=$value2['img_url'];
						continue;
					}
					$rows[$key]['swapImages'][]=$value2['img_url'];
				}				
			}
		}
		return $rows[0];
	}	
}