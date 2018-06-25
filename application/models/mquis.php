<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mquis extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function enOpsi($dt=null)
	{
		$jw='';
		for ($i=0,$a='a'; $i < 4 ; $i++,$a++){
			$jw.='`o'.$a.'`'.$dt['isi'.$a];
		}
		return $jw;
	}

	function deOpsi($dt=null){
		$arrn = array(
			'oa' =>'',
			'ob' =>'',
			'oc' =>'',
			'od' =>''
		);
		for ($i=0,$a='a'; $i < strlen($dt) ; $i++) { 
			if (substr($dt, $i,4)=='`o'.$a.'`') {
				$i+=3;	$ses=$a++;
				$arrn['o'.$ses]=''; continue;
			}
			$arrn['o'.$ses].=$dt[$i];
		}
		return $arrn;
	}

}