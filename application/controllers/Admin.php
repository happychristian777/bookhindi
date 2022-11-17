<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		 parent::__construct();
		 $this->load->model('AdminModel');
		 $this->load->helper(array('form','url','file','download'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('backend/login');
	}
	public function isAdminLogin()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		//$data=array('eamil'=>$email,'password'=>$password);
		$return=$this->AdminModel->loginAdmin($email,$password);

		if(count($return)>0)
		{
			foreach($return as $row)
			{
				$sessionArray=array(
					'adminname'=>$row->adminname,
				
				);
			}
			$this->session->set_userdata($sessionArray);
		//	$this->session->set_flashdata('success','Login Successful');
			redirect('Admin/dashboard');
		}
		else
		{
			$this->session->set_flashdata('failed','Invalid Admin Email or Password');
			redirect('Admin');
		}

	}
	/*public function test1()
	{
		$this->load->view();
	}*/

	public function dashboard()
	{
		$data['users']=$this->AdminModel->users_count();
		$data['payments']=$this->AdminModel->payments_count();
		$data['data']=$this->AdminModel->test_count();
		$data['mt1']=$this->AdminModel->count_mt1();
		$data['mt2']=$this->AdminModel->count_mt2();
		$data['mt3']=$this->AdminModel->count_mt3();
		$data['mt4']=$this->AdminModel->count_mt4();
		$data['mt5']=$this->AdminModel->count_mt5();
		$data['mt6']=$this->AdminModel->count_mt6(); 
			$data['mt7']=$this->AdminModel->count_mt7(); 
				$data['mt8']=$this->AdminModel->count_mt8(); 
					$data['mt9']=$this->AdminModel->count_mt9(); 
		//$data['mt_session']=$this->AdminModel->count_mt_session();
		$this->load->view('backend/header');
		$this->load->view('backend/dashboard',$data);
		$this->load->view('backend/footer');
	}

	public function loadUsers()
	{
		$data['res']=$this->AdminModel->get_users();
		$this->load->view('backend/header');
		$this->load->view('backend/users',$data);
		$this->load->view('backend/footer');
	}
	public function loadData()
	{
		$data['res']=$this->AdminModel->get_data();
		$this->load->view('backend/header');
		$this->load->view('backend/data',$data);
		$this->load->view('backend/footer');
	}
	public function mock_test1()
	{
		$data['res']=$this->AdminModel->mock_test1();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test1',$data);
		$this->load->view('backend/footer');
	}
	public function mock_test2()
	{
		$data['res']=$this->AdminModel->mock_test2();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test2',$data);
		$this->load->view('backend/footer');
	}
	public function mock_test3()
	{
		$data['res']=$this->AdminModel->mock_test3();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test3',$data);
		$this->load->view('backend/footer');
	}
		public function mock_test4()
	{
		$data['res']=$this->AdminModel->mock_test4();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test4',$data);
		$this->load->view('backend/footer');
	}
		public function mock_test5()
	{
		$data['res']=$this->AdminModel->mock_test5();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test5',$data);
		$this->load->view('backend/footer');
	}
	public function mock_test6()
	{
		$data['res']=$this->AdminModel->mock_test6();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test6',$data);
		$this->load->view('backend/footer');
	}
		public function mock_test7()
	{
		$data['res']=$this->AdminModel->mock_test7();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test7',$data);
		$this->load->view('backend/footer');
	}
		public function mock_test8()
	{
		$data['res']=$this->AdminModel->mock_test8();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test8',$data);
		$this->load->view('backend/footer');
	}
		public function mock_test9()
	{
		$data['res']=$this->AdminModel->mock_test9();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_test9',$data);
		$this->load->view('backend/footer');
	}
		public function mock_session()
	{
		$data['res']=$this->AdminModel->mock_session();
		$this->load->view('backend/header');
		$this->load->view('backend/mock_session',$data);
		$this->load->view('backend/footer');
	}
	public function loadPayments()
	{
		$data['res']=$this->AdminModel->get_payments();
		$this->load->view('backend/header');
		$this->load->view('backend/payments',$data);
		$this->load->view('backend/footer');
	}
	public function load_contacts()
	{
		$data['res']=$this->AdminModel->get_contacts();
		$this->load->view('backend/header');
		$this->load->view('backend/contacts',$data);
		$this->load->view('backend/footer');

	}

	public function logout()
	{
		session_destroy();
		redirect('Admin');
	}
}
