<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lct extends CI_Controller {

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
		$this->load->view('lct', $dulieu, FALSE);	
	}
	public function deleteData($idnhanduoc)
	{
		$this->load->model('showData');
		if($this->showData->deleteDataById($idnhanduoc))
		{
			// $this->load->view('success');
			// echo $idnhanduoc;			
			redirect(base_url(''));
			exit;//dừng các mã chạy ở phía dưới

		}
		else
		{
			echo "Chưa xóa được";
		} 
		
	}
	public function edit($idlayve)
	{
		$this->load->model('showData');
		$ketqua=$this->showData->editById($idlayve);
		$ketqua=array('mangketqua'=>$ketqua);
		//Truyen ket qua nay vao editdata_view de sua du lieu
		$this->load->view('editdata_view', $ketqua, FALSE);
	}
	public function update()
	{
		$id=$this->input->post('id');
		$ngay=$this->input->post('ngay');
		$gio=$this->input->post('gio');
		$noidung=$this->input->post('noidung');
		$duhop=$this->input->post('duhop');
		$chutri=$this->input->post('chutri');
		$diadiem=$this->input->post('diadiem');
		$cqcp=$this->input->post('cqcp');
		$ghichu=$this->input->post('ghichu');
		$phucvuxe=$this->input->post('phucvuxe');
		$this->load->model('showData');
		//Su dung ham trong model giao tiep voi gia tri nhan duoc tu view
		if($this->showData->editdatabyid($id,$ngay,$gio,$noidung,$duhop,$chutri,$diadiem,$cqcp,$ghichu,$phucvuxe))
		{
			echo 'Thành công';
		}
		else
		{
			echo 'Thất bại';
		}
	}
}

/* End of file quantrilichtuan.php */
/* Location: ./application/controllers/quantrilichtuan.php */