<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lost_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('template','form_validation'));
		$this->load->model('Mdb');
	}

	public function index()
	{
		
		if($this->input->post('submit',TRUE)=='Submit')
		{
			$get=$this->Mdb->get_where('t_user',array('email'=>$this->input->post('email',TRUE)));
			if($get->num_rows()>0)
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
        		$key=md5(md5(time()));
				$this->email->from('codestudio.tech@gmail.com',"Code Studio");//isi email atas
				$this->email->to($this->input->post('email',TRUE));
				$this->email->subject('Reset Password');
				$this->email->message(
					'Apakah Anda lupa dengan password anda ? silakan klik <a href="'.base_url().'lost_user/reset/'.$key.'">disini</a>. Jika anda tidak merasa request fitur ini silakan abaikan pesan ini.'
				);

				if($this->email->send())
				{ 	
					$data['reset']=$key;
					$cond['email']=$this->input->post('email',TRUE);
					$this->Mdb->update('t_user',$data,$cond);
					$this->session->set_flashdata('success',"Email berhasil dikirim cek email anda");
				}else{
					$this->session->set_flashdata('alert',"Email gagal dikirim silakan coba lagi...");
				}

			}
			else
			{
				//pesan
				$this->session->set_flashdata('alert',"email yang anda masukan tidak terdaftar");
			}

		}
		$this->load->view('template/lost_user');
	}

	public function reset()
	{
		if($this->uri->segment(3))
		{
			$this->load->view('template/form_reset');
			if($this->input->post('submit',TRUE)=='Submit')
			{
					$pass1=$this->input->post('pass1',TRUE);
					$pass2=$this->input->post('pass2',TRUE);
					if($pass1==$pass2)
					{
						$data['pass']=password_hash($pass1,PASSWORD_DEFAULT,['cost'=>10]);
						$data['reset']='';
						$cond['reset']=$this->uri->segment(3);
						$this->Mdb->update('t_user',$data,$cond);
						$this->session->set_flashdata('success',"Password Berhasil diperbaharui");
						redirect('login');	
					}
					else
					{
						$this->session->set_flashdata('alert',"Password tidak sama");
					}
					
				
			}
		}else{
			redirect('lost_user');
		}
	}
}
