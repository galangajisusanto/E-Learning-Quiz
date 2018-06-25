<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function PtoKat($dt=null,$kd=null)
	{
		$ndt = array(
			'id' => $dt['id'],
			'kd' => $kd,
			'title' => $dt['title']
		);
		return $ndt;
	}
	function PtoMdl($dt=null)
	{
		$ndt = array(
			'id' => $dt['id'],
			'kd' => 10,
			'title'=> $dt['title'],
			'materi' => $dt['materi'],
			'linkv'=> $dt['linkv']
		);
		return $ndt;
	}
	function PtoQuis($dt=null,$kd=null)
	{
		if ($kd==21) {
			$ndt = array(
				'id' => $dt['id'],
				'kd' => $kd,
				'title' => $dt['title'],
				'quest' => $dt['quest'],
				'ky' => chr($dt['opsi']+97)
			 );

		} elseif ($kd==22) {
			$nky ='';
			for ($i=0, $a = 'a'; $i < 4; $i++, $a++)
				if (isset($dt['opsi'.$a]))
					$nky.=$a;

			$ndt = array(
				'id' => $dt['id'],
				'kd' => $kd,
				'title' => $dt['title'],
				'quest' => $dt['quest'],
				'ky' => $nky
			 );

		} elseif ($kd==30) {
			$qs = $dt['quest']; $sm = 0;
			for ($i=0; $i < strlen($qs); $i++) 
				if (substr($qs, $i,2)=='`i') {
					$i+=4; $sm++;
				}

			$ndt = array(
				'id' => $dt['id'],
				'kd' => $kd+$sm,
				'title' => $dt['title'],
				'quest' => $qs,
				'ky' => $dt['key']
			 );			
		}
		return $ndt;
	}

	function Ptops($dt=null)
	{
		$jw = array('id'=>$dt['id']);
		for ($i=0,$a='a'; $i < 4 ; $i++,$a++){
			$jw[$a] = $dt['isi'.$a];
		}
		return $jw;
	}

	function Prepare($tb=null,$dt=null,$kd=null)
	{
		$ndt = array(); $x =0;
		foreach ($tb as $nm) {
			if ($nm == 't_kategori') {
				$mdt = $this->PtoKat($dt,$kd);
			} elseif ($nm == 't_modul') {
				$mdt = $this->PtoMdl($dt);
			} elseif ($nm == 't_opsi') {
				$mdt = $this->Ptops($dt);
			} elseif ($nm == 't_quis') {
				$mdt = $this->PtoQuis($dt,$kd);
				if ($kd==30)
					$kd = $mdt['kd'];
			} else {
				$nm = substr($nm,0,strlen($nm)-1);
				$mdt = $this->PtoKat($dt,$kd);
				if($nm == 't_opsi')
					$mdt = array('id'=>$dt['id']);
			}
			$ndt[$x++] = array(
				'tb' => $nm,
				'dt' => $mdt );
		}
		return $ndt;
	}
}