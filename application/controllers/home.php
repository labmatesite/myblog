<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){

        parent::__construct();

        $this->load->database();

        $this->load->helper('form');

        $this->load->helper('url');

        $this->load->helper('text');

      }

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('index');
		$this->load->view('footer.php');		
	}

	public function about()
	{
		$this->load->view('header.php');
		$this->load->view('about');
		$this->load->view('footer.php');	
	}

	public function blog()
	{
		$this->load->view('header.php');
		$this->load->view('blog');
		$this->load->view('footer.php');	
	}

	public function post()
	{
		$this->load->view('header.php');
		$this->load->view('post');
		$this->load->view('footer.php');	
	}

	public function portfolio()
	{
		$this->load->view('header.php');
		$this->load->view('portfolio');
		$this->load->view('footer.php');	
	}
	
	public function contact()
	{
		$this->load->view('header.php');
		$this->load->view('contact');
		$this->load->view('footer.php');	
	}

}
