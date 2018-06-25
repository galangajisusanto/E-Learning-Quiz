<?php 

class Template
{ 
	function __construct()
	{
		$this->ci=&get_instance();
	}
	
	function user($template,$data='')
	{
		$data=array(
		'content'=>$this->ci->load->view($template,$data,TRUE),
		'nav'=> substr($template, 5)
		);
		$this->ci->load->view('template_user/dashboard',$data);
	}
	function admin($template,$data='')
	{
		$data=array(
		'content'=>$this->ci->load->view($template,$data,TRUE),
		'nav'=>$this->ci->load->view('template/nav_admin',$data,TRUE),
		);
		$this->ci->load->view('template/dashboard',$data);
	}
}

