<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Model{
	public function menu(){
		return $this->db->get('pages')->result_array();
	}
	public function categories(){
		$this->db->select('categories.name as catName,categories.id as catId');
		$rows=$this->db->get('categories')->result_array();

		$this->db->select('sub_category.name as subcatName,sub_category.parent as parent');
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
		//$this->db->input('search'),'both'
		$this->db->select('swaps.id as swapsId,title,contact,status,state,wantstuff,vip,add_date,img_url');
		$this->db->like('title','ული','both');
		$this->db->join('swapimages','swapimages.swap_id=swaps.id');
		return $this->db->get('swaps')->result_array();	
	}
}