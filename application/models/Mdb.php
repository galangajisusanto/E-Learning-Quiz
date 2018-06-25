<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdb extends CI_Model {

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
		$this->db->delete($table, $where);
	}
	function db_isset($table=null,$where=null)
	{
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->count_all_results()>0;
	}
	function toidb($dt=null, $sdt=null)
	{
		$lid = $dt['lid'];
		$id = $dt['id'];
		$ckid = $this->db_isset('t_kategori',array('id' => $id));

		foreach ($sdt as $st) {
			if (!$ckid && $lid=='') // data belum ada
				$this->db->insert($st['tb'],$st['dt']);
		    elseif (!$ckid && $lid!='') // edit ke id baru
				$this->db->update($st['tb'],$st['dt'],array('id' => $lid));
			elseif ($lid==$id) // edit di satu id
				$this->db->update($st['tb'],$st['dt'],array('id' => $id));
			else 
				return false;
		}
		
		if ($this->db->trans_status())
			return true;
		else 
			return false;
	}
}
