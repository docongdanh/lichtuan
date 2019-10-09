<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdata()
	{
		$this->db->select('*');//lay het du lieu
		$ketqua = $this->db->get('lct');//lay tu bang lct luu vao bien ketqua
		$ketqua=$ketqua->result_array();//bien doi ket qua thanh mot mang
		// echo '<pre>';
		// var_dump($ketqua);
		// echo '</pre>';
		return $ketqua;
	}
	public function deleteDataById($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('lct');		
	}
	public function editById($i)
	{		
		$this->db->select('*');
		$this->db->where('id', $i);
		$dulieu = $this->db->get('lct');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function editdatabyid($id,$ngay,$gio,$noidung,$duhop,$chutri,$diadiem,$cqcp,$ghichu,$phucvuxe)
	{
		$dulieuupdate=array(
			'id'=>$id,
			'ngay'=>$ngay,
			'gio'=>$gio,
			'noidung'=>$noidung,
			'duhop'=>$duhop,
			'chutri'=>$chutri,
			'diadiem'=>$diadiem,
			'cqcp'=>$cqcp,
			'ghichu'=>$ghichu,
			'phucvuxe'=>$phucvuxe
			);
		$this->db->where('id', $id);
		return $this->db->update('lct', $dulieuupdate);
	}
	public function sw_get_current_weekday() {
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$weekday = date("l");
	$weekday = strtolower($weekday);
	switch($weekday) {
		case 'monday':
			$weekday = 'Thứ hai';
			break;
		case 'tuesday':
			$weekday = 'Thứ ba';
			break;
		case 'wednesday':
			$weekday = 'Thứ tư';
			break;
		case 'thursday':
			$weekday = 'Thứ năm';
			break;
		case 'friday':
			$weekday = 'Thứ sáu';
			break;
		case 'saturday':
			$weekday = 'Thứ bảy';
			break;
		default:
			$weekday = 'Chủ nhật';
			break;
	}
	return $weekday;
}



}

/* End of file showData.php */
/* Location: ./application/models/showData.php */