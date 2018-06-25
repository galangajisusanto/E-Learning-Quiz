<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('Mdb');
	} 
	public function index()
	{	
		//$this->cek_login();
		$data=array(
		'user'=>$this->session->userdata('user'),
		'data'=>$this->Mdb->get_all('t_kategori'),
		);
		$this->template->user('user/home',$data);
	}
	public function cek_login()
	{
		if(!$this->sessioSn->userdata('admin'))
		{
			redirect('login');
		}
	}
	public function profil()
	{
		$data=array(
		'user'=>$this->session->userdata('user'),
		);
			$this->template->user('user/profil',$data);
	}
	public function rank()
	{		$data=array(
		'user'=>$this->session->userdata('user'),
		);
			$this->template->user('user/rank',$data);
	}
	public function modul()
	{		$data=array(
		'user'=>$this->session->userdata('user'),
		);
		$this->template->user('user/modul',$data);
	}

	public function coba_user()
	{
		$this->load->view('user/dashboard_user');
	}
	
}
