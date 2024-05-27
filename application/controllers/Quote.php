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
		$result['product'] = $this->ModelQuote->getProductdata();
		$this->isLoggedIn();
		$this->load->view('header');
		$this->load->view('add_quote',$result);
		$this->load->view('footer');
	}
	public function add_quote_process()
	{
		$products = array();
        for ($i = 1; isset($_POST['product_'.$i]); $i++) {
			$qty = $_POST['product_qty_'.$i];
			if ($qty > 0) {
				$product = array(
					'product' => $_POST['product_'.$i],
					'qty' => $_POST['product_qty_'.$i],
					'amount' => $_POST['product_amount_'.$i]
				);
				$products[] = $product;
			}
        }
        $product_json_data = json_encode($products);
		 
		$Cus_products = array();
        /* for ($i = 1; isset($_POST['descriptionCus-'.$i]); $i++) {
            $product = array(
                'product' => $_POST['descriptionCus-'.$i],
                'qty' => $_POST['quantityCus-'.$i],
				'unit_price' => $_POST['unit_priceCus-'.$i],
                'amount' => $_POST['amountCus-'.$i],
            );
            $Cus_products[] = $product;
        } */
		foreach ($_POST as $key => $value) {
			if (strpos($key, 'descriptionCus-') === 0) {
				$index = substr($key, strlen('descriptionCus-'));
				$product = array(
					'product' => $_POST['descriptionCus-'.$index],
					'qty' => $_POST['quantityCus-'.$index],
					'unit_price' => $_POST['unit_priceCus-'.$index],
					'amount' => $_POST['amountCus-'.$index],
				);
				$Cus_products[] = $product;
			}
		}
		$custom_product_json_data = json_encode($Cus_products);
		/* echo "<pre>";
		print_r($custom_product_json_data);
		print_r($_POST);
		print_r($_FILES);
		echo "</pre>";
		exit();  */
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('street'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'country' => $this->input->post('country'),
			'post_code' => $this->input->post('post_code'),
			'product_data' => $product_json_data,
			'custom_product_data' => $custom_product_json_data,
			'total_controller_price' => $this->input->post('total-controller-input'),
			'total_feet_price' => $this->input->post('total-feet-input'),
			'discount_percentage' => $this->input->post('discountInput'),
			'main_total' => $this->input->post('total-input'),
			'notes' => $this->input->post('notes'),
			'customer_visible' => $this->input->post('visible'),
			'status' => 1,
			'created_at' => date('Y-m-d H:i:s')
		);
		/* echo "<pre>";
		print_r($data);
		print_r($_POST);
		print_r($_FILES);
		echo "</pre>";
		exit(); */
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

	public function edit_image()
	{
		$this->isLoggedIn();
		$this->load->view('header');
		$this->load->view('edit_image');
		$this->load->view('footer');
	}
	public function view_quote()
	{
		$this->isLoggedIn();
		$quote_id = $this->uri->segment(3);
		$result['quote'] = $this->ModelQuote->view_quote($quote_id);
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit();  */
		$this->load->view('header');
		$this->load->view('view_quote',$result);
		$this->load->view('footer');
	}
	public function send_for_approval()
	{
		$quote_id = $this->input->post('quote_id');
		$result = $this->ModelQuote->send_for_approval($quote_id);
		echo json_encode($result);
	}
	public function send_for_approve()
	{
		$quote_id = $this->input->post('quote_id');
		$result = $this->ModelQuote->send_for_approve($quote_id);
		echo json_encode($result);
	}
	public function edit_quote()
	{
		$this->isLoggedIn();
		$quote_id = $this->uri->segment(3);
		$result['quote'] = $this->ModelQuote->edit_quote($quote_id);
		$result['product'] = $this->ModelQuote->getProductdata();
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit(); */
		$this->load->view('header');
		$this->load->view('edit_quote',$result);
		$this->load->view('footer');
	}
	public function edit_quote_process()
	{
		$products = array();
        for ($i = 1; isset($_POST['product_'.$i]); $i++) {
			$qty = $_POST['product_qty_'.$i];
			if ($qty > 0) {
				$product = array(
					'product' => $_POST['product_'.$i],
					'qty' => $_POST['product_qty_'.$i],
					'amount' => $_POST['product_amount_'.$i]
				);
				$products[] = $product;
			}
        }
        $product_json_data = json_encode($products);
		 
		$Cus_products = array();
		foreach ($_POST as $key => $value) {
			if (strpos($key, 'descriptionCus-') === 0) {
				$index = substr($key, strlen('descriptionCus-'));
				$product = array(
					'product' => $_POST['descriptionCus-'.$index],
					'qty' => $_POST['quantityCus-'.$index],
					'unit_price' => $_POST['unit_priceCus-'.$index],
					'amount' => $_POST['amountCus-'.$index],
				);
				$Cus_products[] = $product;
			}
		}
		$custom_product_json_data = json_encode($Cus_products);
		$data = array(
			'quote_id' => $this->input->post('quote_id'),
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('street'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'country' => $this->input->post('country'),
			'post_code' => $this->input->post('post_code'),
			'product_data' => $product_json_data,
			'custom_product_data' => $custom_product_json_data,
			'total_controller_price' => $this->input->post('total-controller-input'),
			'total_feet_price' => $this->input->post('total-feet-input'),
			'discount_percentage' => $this->input->post('discountInput'),
			'main_total' => $this->input->post('total-input'),
			'notes' => $this->input->post('notes'),
			'customer_visible' => $this->input->post('visible'),
			'created_at' => date('Y-m-d H:i:s')
		);
		/* echo "<pre>";
		print_r($data);
		print_r($_POST);
		print_r($_FILES);
		echo "</pre>";
		exit(); */
		$response_data = $this->ModelQuote->edit_quote_process($data);
		echo json_encode($response_data);
    }
}
