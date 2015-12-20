<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {
	public function  addoffer(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titleitem','ნივთის დასახელება','trim|required|max_length[32]');
		$this->form_validation->set_rules('status','ნივთის მდგომარეობა','trim|required');
		$this->form_validation->set_rules('imagesName','სურათი','trim|required');
		if($this->form_validation->run() === FALSE){
			redirect('');
		}
		else{
			$config['upload_path']          = './assets/images/';
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
			$this->load->model('Model_offer');
			$this->Model_offer->addoffer();			
		}
	}
}