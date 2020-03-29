<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('home_model');
        $this->data['move_types'] = $this->home_model->getMoveTypes();
    }

	public function index()
	{
		$this->data['view_page'] = 'home/index';
        $this->load->view('home/template', $this->data);
	}

	public function gallery()
	{
		$this->data['view_page'] = 'home/gallery';
        $this->load->view('home/template', $this->data);
	}
	
	public function contact()
	{
		$this->data['view_page'] = 'home/contact';
        $this->load->view('home/template', $this->data);
	}


	public function about()
	{
		$this->data['view_page'] = 'home/about';
        $this->load->view('home/template', $this->data);
	}

	public function air_freight()
	{
		$this->data['view_page'] = 'home/air_freight';
        $this->load->view('home/template', $this->data);
	}

	public function sea_freight()
	{
		$this->data['view_page'] = 'home/sea_freight';
        $this->load->view('home/template', $this->data);
	}

	public function transportation()
	{
		$this->data['view_page'] = 'home/transportation';
        $this->load->view('home/template', $this->data);
	}

	public function relocation()
	{
		$this->data['view_page'] = 'home/relocation';
        $this->load->view('home/template', $this->data);
	}

	public function packing()
	{
		$this->data['view_page'] = 'home/packing';
        $this->load->view('home/template', $this->data);
	}

	public function gobal_consolidation()
	{
		$this->data['view_page'] = 'home/gobal_consolidation';
        $this->load->view('home/template', $this->data);
	}

	public function warehouse()
	{
		$this->data['view_page'] = 'home/warehouse';
        $this->load->view('home/template', $this->data);
	}

	public function transit_operation()
	{
		$this->data['view_page'] = 'home/transit_operation';
        $this->load->view('home/template', $this->data);
	}

	public function project_cargo()
	{
		$this->data['view_page'] = 'home/project_cargo';
        $this->load->view('home/template', $this->data);
	}

	public function customs_clearance()
	{
		$this->data['view_page'] = 'home/customs_clearance';
        $this->load->view('home/template', $this->data);
	}

	public function luxury_car_relocation()
	{
		$this->data['view_page'] = 'home/luxury_car_relocation';
        $this->load->view('home/template', $this->data);
	}

	public function automotive()
	{
		$this->data['view_page'] = 'home/automotive';
        $this->load->view('home/template', $this->data);
	}

	public function air_location()
	{
		$this->data['view_page'] = 'home/air_location';
        $this->load->view('home/template', $this->data);
	}

	public function sea_location()
	{
		$this->data['view_page'] = 'home/sea_location';
        $this->load->view('home/template', $this->data);
	}

	public function land_location()
	{
		$this->data['view_page'] = 'home/land_location';
        $this->load->view('home/template', $this->data);
	}

	public function customs_brokerage()
	{
		$this->data['view_page'] = 'home/customs_brokerage';
        $this->load->view('home/template', $this->data);
	}

	public function sendmail()
	{
	    $name = $this->input->post('name'); 
	    $email = $this->input->post('email'); 
	    $phone = $this->input->post('phone'); 
	    $message = $this->input->post('message');

	    $data = array('name' => $name, 'email' => $email, 'phone' => $phone, 'message' =>$message);

	    $mail_body = $this->load->view('mail/contactus', $data, TRUE);

	    $this->load->library('email');

	    $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'pravi0025@gmail.com',
            'smtp_pass' => 'pravi123456',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'wordwrap' => TRUE,
            'validation' => TRUE
        );

		$this->email->initialize($config);

		$this->email->from($email, $name);
		$this->email->to('praveen@soarmorrow.com');

		$this->email->subject('Carg Track Contact Form');
		$this->email->message($mail_body);

		$this->email->send(false);

		$this->session->set_flashdata('success', 'Thank You for Contacting us. We will get back to you Soon');
		redirect('contact');
	}

	public function receive_quote()
	{
	    $move_type = $this->input->post('move_type');
	    $moving = $this->input->post('moving');
	    $moving_date = $this->input->post('moving_date');
	    $from = $this->input->post('from');
	    $to = $this->input->post('to');
	    $receive_price = $this->input->post('receive_price');
	    $name = $this->input->post('name'); 
	    $email = $this->input->post('email'); 
	    $phone = $this->input->post('phone'); 
	    $message = $this->input->post('message');

	    $data = array('move_type' => $move_type, 'moving' => $moving, 'moving_date' => $moving_date, 'from' => $from, 'to' => $to, 'receive_price' => $receive_price, 'name' => $name, 'email' => $email, 'phone' => $phone, 'message' =>$message);

	    $mail_body = $this->load->view('mail/quote_request', $data, TRUE);

	    $this->load->library('email');

	    $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'pravi0025@gmail.com',
            'smtp_pass' => 'pravi123456',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'wordwrap' => TRUE,
            'validation' => TRUE
        );

		$this->email->initialize($config);

		$this->email->from($email, $name);
		$this->email->to('praveen@soarmorrow.com');

		$this->email->subject('Carg Track Quote Request');
		$this->email->message($mail_body);

		$this->email->send(false);

		$this->session->set_flashdata('success', 'Your Quote Request Received. We will get back to you Soon');
		redirect('');
	}

	public function getMoveTypeItems(){
		echo json_encode($this->home_model->getMoveTypeItems($this->input->get('id')));exit();
	} 
}
