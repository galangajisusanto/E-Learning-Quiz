<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
	function insert($table='',$data='')
	{
		$res=$this->db->insert($table,$data);
		return $res;
	}
	function get_all($table)
	{
		$this->db->from($table);
		return $this->db->get();
	}
	function get_where($table=null,$where=null)
	{
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}
	function update($table=null,$data=null,$where=null)
	{
		$this->db->update($table,$data,$where);
	}
	function delete($table=null,$where=null)
	{
		$this->db->delete($table, array('id' => $where));
	}
	function db_isset($table=null,$where=null)
	{
		$this->db->from($table);
		$this->db->where(array('id' => $where));
		return $this->db->get()->count()>1;
	}
}
