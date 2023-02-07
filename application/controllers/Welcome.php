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
		$this->load->view('welcome_message');
	}		

	public function login(){
		$this->load->helper('url');
		$this->load->view('template/login');
	}

	public function template(){
		$data = array();
		$this->load->model('newsModel');
		$this->load->database();
		$data['listeProduit'] = $this->newsModel->showProduct();
		$this->load->helper('url');
		$this->load->view ('template',$data);
	}

	public function essai(){
		$this->load->helper('url');
		echo $this->config->item('sess_save_path');
	}

	public function setheader(){
		$data['titre']='Echange';
        $this->load->view('header',$data);
	}

	public function setfooter(){
				$data=array();
				$data['footer']='ETU2203-Fanilo / ETU2238-Loick / ETU2147-Faly';
				$this->load->view('footer',$data);
	}
  
	// public function session(){
	// 	$this->load->library('session');
	// }

	// public function index1(){
	// 	echo 'Index eto';
	// }

}
