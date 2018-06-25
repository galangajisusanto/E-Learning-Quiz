<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('template');
		$this->load->model('Mdb');
		$this->load->model('Madmin');
		$this->load->library('upload');
	} 

	function Upload($value='')
	{
		# code...
	}
	public function index() {	
		//$this->cek_login();
		$this->template->admin('admin/home');
	}

	public function cek_login() {
		if (!$this->sessioSn->userdata('admin')) {
			redirect('login');
		}
	}
	public function modul($id='') {
		if ($this->input->post('submit',TRUE)=='submit') {
			$dt = $this->input->post(null,TRUE); //data post

			$dta = $config = array();
			$tb  = array('t_modul','t_kategori'); // prepare data
			$ndt = $this->Madmin->Prepare($tb,$dt,10);
			$this->db->trans_begin();

			$fl = 't_file';
			$c = 0; $back = FALSE;
			foreach ($_FILES['files']['name'] as $nm) {
				$config['upload_path']   = './images/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']      = '2000';
			    $config['file_name'] 	 = $_FILES['files']['name'][$c];
				$this->upload->initialize($config);

			  	$_FILES['f']['name'] 		= $_FILES['files']['name'][$c];
			    $_FILES['f']['type'] 		= $_FILES['files']['type'][$c];
			    $_FILES['f']['tmp_name'] 	= $_FILES['files']['tmp_name'][$c];
			    $_FILES['f']['error'] 		= $_FILES['files']['error'][$c];
			    $_FILES['f']['size'] 		= $_FILES['files']['size'][$c];

				$dta[$c]['Cid'] 	= $dt['id'];
				$dta[$c]['name']	= $nm;

			    if ($this->upload->do_upload('f'))
					$this->Mdb->insert($fl,$dta[$c++]);
			}
			if ($this->Mdb->toidb($dt,$ndt)){ // ekseskusi ke database dan hasil akseskusi
				$this->session->set_flashdata('success',"Berhasil Input ke Database..");
				$this->db->trans_commit();
			} else {
				$this->session->set_flashdata('alert',"Gagal Input ke Database..");
				$this->db->trans_rollback();
			}
		redirect('admin/kategori');
		}

		$data=array();
		if ($id!='') {
			$data['frm']=$this->Mdb->get_where('t_modul',array('id'=>$id))->row();
		}
		$this->template->admin('admin/modul',$data);
	}

	public function MltC($id='') {
		if ($this->input->post('submit',TRUE)=='submit') {
			$dt = $this->input->post(null,TRUE); //data post

			$tb = array('t_opsi','t_quis','t_kategori'); // prepare data
			$ndt = $this->Madmin->Prepare($tb,$dt,22);
			$this->db->trans_begin();

			if ($this->Mdb->toidb($dt,$ndt)){ // ekseskusi ke database dan hasil akseskusi
				$this->session->set_flashdata('success',"Berhasil Input ke Database..");
				$this->db->trans_commit();
			} else {
				$this->session->set_flashdata('alert',"Gagal Input ke Database..");
				$this->db->trans_rollback();
			}
			redirect('admin/kategori');
		}

		$data=array();
		if ($id!=''){
			$data['frm']=$this->Mdb->get_where('t_quis',array('id'=>$id))->row();
			$data['opsi']=$this->Mdb->get_where('t_opsi',array('id'=>$id))->row();
		}
		$this->template->admin('admin/quiz/MltC',$data);
	}

	public function FtB($id='')
	{
		if ($this->input->post('submit',TRUE)=='submit') {
			$dt = $this->input->post(null,TRUE);

			$tb = array('t_quis','t_kategori'); // prepare data
			$ndt = $this->Madmin->Prepare($tb,$dt,30);
			$this->db->trans_begin();

			if ($this->Mdb->toidb($dt,$ndt)){ // ekseskusi ke database dan hasil akseskusi
				$this->session->set_flashdata('success',"Berhasil Input ke Database..");
				$this->db->trans_commit();
			} else {
				$this->session->set_flashdata('alert',"Gagal Input ke Database..");
				$this->db->trans_rollback();
			}
			redirect('admin/kategori');
		}

		$data=array();
		if ($id!=''){
			$data['frm']=$this->Mdb->get_where('t_quis',array('id'=>$id))->row();
		}
		$this->template->admin('admin/quiz/FtB',$data);
	}

	public function SgC($id=''){
		if ($this->input->post('submit',TRUE)=='submit') {
			$dt = $this->input->post(null,TRUE); //data post

			$tb = array('t_opsi','t_quis','t_kategori'); // prepare data
			$ndt = $this->Madmin->Prepare($tb,$dt,21);
			$this->db->trans_begin();

			if ($this->Mdb->toidb($dt,$ndt)){ // ekseskusi ke database dan hasil akseskusi
				$this->session->set_flashdata('success',"Berhasil Input ke Database..");
				$this->db->trans_commit();
			} else {
				$this->session->set_flashdata('alert',"Gagal Input ke Database..");
				$this->db->trans_rollback();
			}
		redirect('admin/kategori');
		}

		$data = array();
		if ($id!=''){
			$data['frm']=$this->Mdb->get_where('t_quis',array('id'=>$id))->row();
			$data['opsi']=$this->Mdb->get_where('t_opsi',array('id'=>$id))->row();
		}

		$this->template->admin('admin/quiz/SgC',$data);
	}

	public function kategori($n='')
	{	
		if ($this->input->post('submit',TRUE)=='submit') {
			$dt = $this->input->post(null,TRUE); 
			if($dt['id']!='' && $dt['type']!='' && $dt['title']!=''){
				// prepare data
				$kd = $dt['type'];
				if ($kd>=30)
					$tb = array('t_quisk','t_kategori'); 
				elseif ($kd>=20)
					$tb = array('t_opsik','t_quisk','t_kategori'); 
				elseif ($kd>=10)
					$tb = array('t_modulk','t_kategori'); 
			    else
					$tb = array('t_kategori'); 
				$ndt = $this->Madmin->Prepare($tb,$dt,$kd);
				$this->db->trans_begin();

				if ($this->Mdb->toidb($dt,$ndt)){ // ekseskusi ke database dan hasil akseskusi
					$this->session->set_flashdata('success',"Berhasil Input ke Database..");
					$this->db->trans_commit();
				} else {
					$this->session->set_flashdata('alert',"Gagal Input ke Database..");
					$this->db->trans_rollback();
				}
			}
			redirect('admin/kategori');
		}

		$data['data']=$this->Mdb->get_all('t_kategori');
		if ($n!='') // dari link edit
		$data['frm']=$this->Mdb->get_where('t_kategori',array('id'=>$n))->row();

		$this->template->admin('admin/kategori',$data);
	}

	public function del_kategori()
	{
		$id=$this->uri->segment(3);
		$this->Mdb->delete('t_kategori',array('id'=>$id));
		redirect('admin/kategori');
	}
		public function edit_profil()
	{
		//$this->cek_login();
		if($this->input->post('submit',TRUE)=='Submit')
		{
			$get_data=$this->Mdb->get_where('t_user',array('id'=>$this->session->userdata('admin')))->row();

			if(!password_verify($this->input->post('password'),$get_data->password))
			{
				echo '<script type="text/javascript">alert("Password yang anda masukan salah");window.location.replace("'.base_url().'login/logout")</script>';
			}else{
			$data=array(
			'username'=>$this->input->post('username',TRUE),
			'fullname'=>$this->input->post('fullname',TRUE),
			'email'=>$this->input->post('email',TRUE),
			);

			$con=array('id'=>$this->session->userdata('admin'));
			$this->Mdb->update('t_user',$data,$con);

			redirect('admin');
			}	
		}
		$get=$this->Mdb->get_where('t_user',array('id'=>
		$this->session->userdata('admin')))->row(); 
		$data['username']=$get->username; 
		$data['fullname']=$get->fullname; 
		$data['email']=$get->email; 
		$this->template->admin('template/edit_profil',$data);
	}
	public function update_password(){
		//$this->cek_login();
		$this->template->admin('admin/update_pass');

		if($this->input->post('submit',TRUE)=='Submit')
		{
			$get_data=$this->admin->get_where('t_admin',array('id_admin'=>$this->session->userdata('admin')))->row();

			if(!password_verify($this->input->post('password2'),$get_data->password))
			{
				echo '<script type="text/javascript">alert("Password lama yang anda masukan salah");window.location.replace("'.base_url().'login/logout")</script>';
			}else{
			$pass=$this->input->post('password1',TRUE);
			$data['password']=password_hash($pass,PASSWORD_DEFAULT,['cost'=>10]);
			$con=array('id_admin'=>$this->session->userdata('admin'));
			$this->admin->update('t_admin',$data,$con);
			redirect('login/logout');
			}	
		}
	}
}
