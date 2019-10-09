<?<?php 
class MY_Controller	extends CI_Controller
{
	function __construct()
	{
		//ke thua tu CI_Controller
		parent:: __construct();
		$controller=$this->uri->segment(1);
		echo $controller;
		echo 'jgdkgjdkjgdkjgdkjgk';		


	}	
}

 ?>