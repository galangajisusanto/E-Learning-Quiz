<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdb');
	}
	public function index()
	{
		if($this->input->post('submit',TRUE)=='Submit')	
		{
			$username=$this->input->post('username_baru',TRUE);
			$email=$this->input->post('email_baru',TRUE);
			$password=$this->input->post('password_baru',TRUE);

			$cekUsername=$this->Mdb->get_where('t_user',array('username'=>$username));
			$cekEmail=$this->Mdb->get_where('t_user',array('email'=>$email));
			if($cekUsername->num_rows()>0)
			{
				$this->session->set_flashdata('alert','Username sudah terdaftar !!!');
			}
			 else if($cekEmail->num_rows()>0)
			{
			 	$this->session->set_flashdata('alert','Email sudah terdaftar !!!');				
			}
			else{
				//insert database 
					$user=array(
					'username'=>$this->input->post('username_baru',TRUE),
					'email'=>$this->input->post('email_baru',TRUE),
					'pass'=>password_hash($this->input->post('password_baru',TRUE),PASSWORD_DEFAULT,['cost'=>10]),
					'level'=>"user",
					'tanggal'=>date("Y-m-d H:i:s")
					);
					$res=$this->Mdb->insert('t_user',$user);
					if($res>=1){
						$this->emailRegister($email,$username,$password);
						redirect('login');
					}else{
						$this->session->set_flashdata('alert','insert data gagal !!!');
					}
			}
		}
		$data['username_baru']=$this->input->post('username_baru',TRUE);
		$data['email_baru']=$this->input->post('email_baru',TRUE);
		$data['password_baru']=$this->input->post('password_baru',TRUE);
		$this->load->view('user/register',$data);
	}


	public function emailRegister($email, $username, $password)
	{

	$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'codestudio.tech@gmail.com',
            'smtp_pass' => 'bms06071997',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        	);
		        $this->load->library('email', $config);
		        $this->email->set_newline("\r\n");
				$this->email->from('codestudio.tech@gmail.com',"Code Studio");//isi email atas
				$this->email->to($email);
				$this->email->subject('Username and Password');
				$this->email->message(
					'Berikut Ini adalah Username dan password yang anda miliki:<br/><br/>Username  : '.$username.'<br/>'.
					'Password : '.$password.'<br/><br/><br/>Hormat Kami,<br/> Code Studio<br/>'
				);
				if($this->email->send())
				{ 	
					$this->session->set_flashdata('success',"Input data berhasil dan Email berhasil dikirim cek email anda");
				}else{
					$this->session->set_flashdata('alert',"Input data bertetapi hasil  Email gagal dikirim");
				}

	}

}
