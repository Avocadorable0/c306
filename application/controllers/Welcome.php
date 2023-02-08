<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/login');
	}

	public function login(){
		$this->load->helper('url');
		$this->load->view('template/login');
	}
	public function deconexion()
	{
		$this->load->helper('url');
		$this->load->view('template/login');
		
	}
	public function check()
	{
		$data=array();

		$mail=$this->input->post('email');
		$mdp=$this->input->post('mdp');
		$this->load->model('newsModel');
		$this->load->database();

		$valiny=$this->newsModel->conekta($mail,$mdp);
		$data['liste'] = $this->newsModel->showProduct();
		$data['userData']=$valiny;

		if(count($valiny)==0){
			redirect('login');
		}else{
			$this->load->helper('url');
			$this->load->view('template',$data);
		}
	}
	public function signIn()
	{
		$this->load->helper('url');
		$this->load->view ('template/Inscription');
	}
	public function inscr()
	{
		$nom=$this->input->post('nom');
		$mail=$this->input->post('email');
		$mdp=$this->input->post('mdp1');
		$this->load->model('newsModel');

		$valiny=$this->newsModel->inscri($nom,$mail,$mdp);
		$this->load->helper('url');
		$this->load->view('template/login');
		
	}
  
	// public function session(){
	// 	$this->load->library('session');
	// }

	// public function index1(){
	// 	echo 'Index eto';
	// }

}
