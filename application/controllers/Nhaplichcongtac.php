<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhaplichcongtac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('nhaplichcongtac');
	}
	public function themlichcongtac()
	{
		
		//lay du lieu ve
		$ngay = $this->input->post('ngay');
		$gio = $this->input->post('gio');
		$noidung = $this->input->post('noidung');
		$duhop = $this->input->post('duhop');
		$chutri = $this->input->post('chutri');
		$diadiem = $this->input->post('diadiem');
		$cqcp = $this->input->post('cqcp');
		$ghichu = $this->input->post('ghichu');
		$phucvuxe = $this->input->post('phucvuxe');
		//truyen du lieu vao model
		$this->load->model('addData_model');
		if ($this->addData_model->insert($ngay,$gio,$noidung,$duhop,$chutri,$diadiem,$cqcp,$ghichu,$phucvuxe)) {
			//Thanh cong
			echo 'Thêm mới thành công!';
		}
		// else {
		// 	//Thatbai
		// 	echo 'Thêm mới thất bại. Vui lòng thử lại!';
		// }
		$this->load->model('showData');
		$dulieu = $this->showData->getdata();
		$dulieu=array('dulieutucontroller'=>$dulieu);
		// $dulieu = array('dulieutucontroller' => $dulieu); //bien du lieu thanh dang mang voi key la du lieu tu controller
		// echo '<pre>';
		// var_dump($dulieu);
		//$this->load->view('nhaplichcongtac', $dulieu, FALSE);		
		$this->load->view('nhaplichcongtac', $dulieu, FALSE);	
		$this->load->view('lichcongtac', $dulieu, FALSE);		
		
	}

}

/* End of file Nhaplichcongtac_c */
/* Location: ./application/controllers/Nhaplichcongtac_c */