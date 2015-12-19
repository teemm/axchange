<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Model{
	public function menu(){
		return $this->db->get('pages')->result_array();
	}
	public function categories(){
		$this->db->select('categories.name as catName,categories.id as catId');
		$rows=$this->db->get('categories')->result_array();

		$this->db->select('sub_category.id as subId,sub_category.name as subcatName,sub_category.parent as parent');
		$rows2=$this->db->get('sub_category')->result_array();		

		foreach ($rows as $key => $value) {
			$id=$value['catId'];
			foreach ($rows2 as $key2 => $value2) {
				if($value2['parent']==$id){
					$rows[$key]['children'][]=$value2;
				}
			}
		}
		return $rows;
	}
	public function search(){
		$this->db->select('swaps.id as swapsId,title,contact,status,state,wantstuff,vip,add_date,img_url');
		$this->db->like('title',$this->input->post('search'));
		$this->db->join('swapimages','swapimages.swap_id=swaps.id','left');
		return $this->db->get('swaps')->result_array();	
	}
	public function fullView(){
		//$this->uri->segment(2)
		$swapid='1';
		$this->db->select('swaps.id as swapsId,swaps.autor,contact,title,status,state,wantstuff');
		$this->db->where('swaps.id',$swapid);
		$rows=$this->db->get('swaps')->result_array();	

	// $this->db->select('swaps.id as swapsId,swaps.autor,contact,title,status,state,wantstuff');
		$this->db->select('swapimages.swap_id,swapimages.first_image,swapimages.img_url');
		$this->db->where('swapimages.swap_id',$swapid);
		$rows2=$this->db->get('swapimages')->result_array();	

		foreach ($rows as $key => $value) {
			$id=$value['swapsId'];
			foreach ($rows2 as $value2) {
				if($value2['swap_id'] == $id){
					if($value2['first_image']=='1'){
						$rows[$key]['firstimage']=$value2;
						continue;
					}
					$rows[$key]['swapImages'][]=$value2;
				}				
			}
		}
		return $rows[0];
	}
}