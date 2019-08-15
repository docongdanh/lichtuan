<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($ngay,$gio,$noidung,$duhop,$chutri,$diadiem,$cqcp,$ghichu,$phucvuxe)
	{
		$dulieu=array('ngay'=>$ngay,'gio'=>$gio,'noidung'=>$noidung,'duhop'=>$duhop,'chutri'=>$chutri,'diadiem'=>$diadiem,'cqcp'=>$cqcp,'ghichu'=>$ghichu,'phucvuxe'=>$phucvuxe);
		$this->db->insert('lct', $dulieu);
		return $this->db->insert_id(); //tra ve mot gia tri la id cua phan tu do
	}
}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */