<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdb');
	}
	public function index()
	{
		if($this->input->post('login')=='Login')
		{
			$user=$this->input->post('username',TRUE);
			$pass=$this->input->post('password',TRUE);

			$cek=$this->Mdb->get_where('t_user',array('username'=>$user));
			if($cek->num_rows()>0)
			{
				$data=$cek->row();
				if($data->level=="admin")
				{
					if(password_verify($pass,$data->pass))
					{
						$datauser= array(
							'admin'=>$data->id,
							'user' => $data->username,
							'login' => TRUE
						 );
						$this->session->set_userdata($datauser);
						redirect('admin');
					}
				}
				if($data->level=="user")
				{
						if(password_verify($pass,$data->pass))
					{
						$datauser= array(
							'admin'=>$data->id,
							'user' => $data->username,
							'login' => TRUE
						 );
						$this->session->set_userdata($datauser);
						redirect('user');
					}else{
						$this->session->set_flashdata('alert',"Password yang anda masukan salah..");
					}

				}
			}else{
					$this->session->set_flashdata('alert',"Username Ditolak");
			}
		

	}
	$this->load->view('template/login');
  }
  public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
