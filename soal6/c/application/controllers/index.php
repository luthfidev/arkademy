<?php
class Index extends CI_Controller{
	public function __construct(){
		parent::__construct();

	}

	function index(){

		$data['data_kasir'] = $this->M_Kasir->data_kasir();
		$this->load->view('index',$data);
    }
    
	
}