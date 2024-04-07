<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelQuote');
	}
	function isLoggedIn() 
	{
		if (!$this->session->userdata('user_id')) {
			redirect(base_url(), 'refresh');
		}		
	}
	public function index()
	{
		$this->isLoggedIn();
		$result['quote'] = $this->ModelQuote->manage_quote();
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit(); */
		$this->load->view('header');
		$this->load->view('quote_management',$result);
		$this->load->view('footer');
	}
	public function add_quote()
	{
		$this->isLoggedIn();
		$this->load->view('header');
		$this->load->view('add_quote');
		$this->load->view('footer');
	}
	public function add_quote_process()
	{
		/* echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		exit(); */
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('street'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'post_code' => $this->input->post('post_code'),
			'color' => $this->input->post('color'),
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelQuote->add_quote_process($data);
		echo json_encode($response_data);
    }
	public function edit_user()
	{
		$this->isLoggedIn();
		$user_id = $this->uri->segment(3);
		$result['user'] = $this->ModelUsers->edit_user($user_id);
		$this->load->view('header');
		$this->load->view('edit_user',$result);
		$this->load->view('footer');
	}
	public function edit_user_process()
	{
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'password' => base64_encode($this->input->post('password')),
			'role' => $this->input->post('role')
		);
		$response_data = $this->ModelUsers->edit_user_process($data);
		echo json_encode($response_data);
    }
	public function delete_user()
	{
		$this->isLoggedIn();
		//$this->isLoggedIn();
		$user_id = $this->input->post('user_id');
		$result = $this->ModelUsers->delete_user($user_id);
		echo json_encode($result);
		//redirect(base_url().'designers', 'refresh');	
	}
}
