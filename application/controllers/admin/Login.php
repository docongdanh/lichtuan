<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

// 	public function index()
// 	{
// 		//load file login trong view
// 		$this->load->view('admin/login');
// 		//nhận dữ liệu từ view
		
// 	}

// }

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
public function index()  
    {  
        $this->load->view('admin/login');  
    }  
    public function process()  
    {  
        $user = $this->input->post('username');  
        $pass = $this->input->post('password');  
        if ($user=='congdanh' && $pass=='123456')   
        {  
            //declaring session  
            $this->session->set_userdata(array('username'=>$user));  
	        redirect('lct');
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('admin/login', $data);  
        }  
    }  
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('username');         
		// Xóa hết session
		session_destroy();
        redirect("admin/login");

    }  
  
}  
?>  