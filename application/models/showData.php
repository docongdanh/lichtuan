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
}

/* End of file showData.php */
/* Location: ./application/models/showData.php */