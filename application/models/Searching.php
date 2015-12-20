	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searching extends CI_Model{
	public function seachSubcat($catid){
		$this->db->select('swaps.id as swapsId,swaps.title,swaps.wantstuff,users.fname,sub_category.name as CatName');	
		$this->db->where('cat_id',$catid);
		$this->db->join('users','users.id = swaps.autor');
		$this->db->join('sub_category','sub_category.id = swaps.cat_id');
		$this->db->order_by('add_date','DESC');
		$row=$this->db->get('swaps')->result_array();

		$row2=$this->db->get('swapimages')->result_array();

		foreach ($row as $key => $value) {
			$id=$value['swapsId'];
			foreach ($row2 as $valu2) {
				$row[$key]['image']=$valu2['img_url'];
			}
		}
		return $row;
	}
	public function categories($catid){
		$this->db->where('parent',$catid);
		$row3=$this->db->get('sub_category')->result_array();

		$carname=$this->db->where('id',$catid)->get('categories')->result_array();

		$this->db->select('swaps.id as swapsId,swaps.title,swaps.wantstuff,users.fname,sub_category.id as subId,sub_category.name as CatName');	
		$this->db->join('users','users.id = swaps.autor');
		$this->db->join('sub_category','sub_category.id = swaps.cat_id');
		$this->db->order_by('add_date','DESC');
		$row=$this->db->get('swaps')->result_array();
		if(count($row)>0){
			$row2=$this->db->get('swapimages')->result_array();

			foreach ($row as $key => $value) {
				$id=$value['swapsId'];
				foreach ($row2 as $valu2) {
					$row[$key]['image']=$valu2['img_url'];
				}
			}
			$arr=array();
			$newarr=array();
			foreach ($row3 as $key => $value) {
				$newarr[]=$value['id'];
			}
			foreach ($row as $key => $value) {
				if(in_array($value['subId'],$newarr))$arr[]=$value;
			}
			$arr[0]['nwtitle']=$carname[0]['name'];
			return $arr;
		}
		else  return '';
	}
}