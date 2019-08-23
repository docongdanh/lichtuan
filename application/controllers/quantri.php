<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quantri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData');
		$dulieu = $this->showData->getdata();
		$dulieu=array('dulieutucontroller'=>$dulieu);
		// $dulieu = array('dulieutucontroller' => $dulieu); //bien du lieu thanh dang mang voi key la du lieu tu controller
		// echo '<pre>';
		// var_dump($dulieu);
		$this->load->view('quantri', $dulieu, FALSE);		
	}
	public function deleteData($idnhanduoc)
	{
		$this->load->model('showData');
		if($this->showData->deleteDataById($idnhanduoc))
		{
			$this->load->view('success');
			// echo $idnhanduoc;

		}
		else
		{
			echo "Chưa xóa được";
		} 
		
	}
}

/* End of file quantrilichtuan.php */
/* Location: ./application/controllers/quantrilichtuan.php */