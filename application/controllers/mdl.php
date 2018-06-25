<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mquis');
		$this->load->library('template');
	} 
	public function index()
	{
		echo "hello";
	}

	public function sl($x)
	{
		if (isset($x)&&is_string($x)) {
			$data = array(
				'usrdt' => array(
					'id' => 'user',
					'modul' => $x
			),
				'mdldt' => $this->Mquis->quis($x)
			 );
			$this->template->user('user/quiz',$data);
			// echo "<pre>";
			// print_r($data);
		}
	}

	public function answcheck($x)
	{
		$N = $this->Mquis->quis($x);
		$asnw ='';
		switch ($N['tp']) {
			case '1':
				$asnw .= $this->input->post('opta');
				break;
			case '2':
			for ($i=0; $i < 4 ; $i++) 
				$asnw .= $this->input->post('optc'.$i);
				break;
			case '3':
			for ($i=0; $i < $N['sky'] ; $i++) 
				$asnw .= $this->input->post('sian'.$i);
				break;
		}
		$res = array();
		if ($asnw==$N['ky']){
			$res['asnwer'] = true;
			// exp bertambah
		} else {
			$res['asnwer'] = false;
		}
	 	echo json_encode($res);
	}
}
