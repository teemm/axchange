<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{	
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->model('Swaps');
		$data['vipswaps']=$this->Swaps->vipswaps();		
		$data['newswaps']=$this->Swaps->newswaps();
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('vip');
		$this->load->view('newsposts');  
		$this->load->view('footer');
	}
	public function search(){
		$this->load->model('Welcome');
		print_r($data['search']=$this->Welcome->search());
	}
	public function fullView($swapId){
		$this->load->model('Swaps');
		$this->load->model('Welcome');
		$data['fullswap']=$this->Swaps->fullView($swapId);
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('fullView'); 
		$this->load->view('footer');		
	}
	public function addnews(){
		$this->load->model('Welcome');
		$data['menus']=$this->Welcome->menu();
		$data['categories']=$this->Welcome->categories();
		
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('categories');
		$this->load->view('addnews'); 
		$this->load->view('footer');			
	}
	public function addnewss(){
			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 20000;
	        // $config['max_width']            = 1024;
	        // $config['max_height']           = 768;

			$this->load->library('upload', $config);
			$imageName = '';

			 if ( ! $this->upload->do_upload('imageName'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_form', $error);
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $imageName = $data['upload_data']['file_name'];
                        // $this->load->view('upload_success', $data);
                        print_r($data);
                }
                $this->load->model('Addnews');
				$data['Addnews'] = $this->Addnews->UploadPhoto($imageName);
				$this->Addnews->Addnews();
	}
}
