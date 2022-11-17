<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
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
		 $this->load->model('UserModel');
		 $this->load->helper(array('form','url','file','download'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('Simplify');
		 $this->load->library('cart');
		 $this->load->database();
	}
	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('web/home');
		$this->load->view('web/footer');
	}
	public function payment_ui(){
		$this->load->view('web/header');
		$this->load->view('web/payment_ui');
		$this->load->view('web/footer');
	}
	public function ins_contact()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$message=$this->input->post('message');
		$data=array(
			'name'=>$name,
			'email'=>$email,
			'contact'=>$contact,
			'message'=>$message
		);
		$res=$this->UserModel->ins_contact($data);
		if($res){
			$this->session->set_flashdata('success','Thank you for sending us a messgae !');
			redirect('User/contact');
		}
		else{
			$this->session->set_flashdata('failed','cant send message right now !');
			redirect('User/contact');
		}
	}
	public function check_payment($date,$iid,$mock_test)
	{
		$user_id=$this->session->userdata('user_id');

		$data=array(
			'user_id'=>$user_id,
			'timestamp'=>$date,
			'payment_id'=>$iid,
			'mock_test'=>$mock_test
		);
		$this->UserModel->ins_check_payment($data);
	}
public function bypass_mt1()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt1($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt1_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt1_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt1_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_mt2()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt2($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt2_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt2_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt2_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_mt3()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt3($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt3_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt3_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt3_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_mt4()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt4($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt4_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt4_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt4_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}

		public function bypass_mt5()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt5($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt5_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt5_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt5_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_mt6()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt6($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt6_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt6_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt6_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}

		public function bypass_mt7()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt7($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt7_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt7_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt7_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_mt8()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt8($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt8_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt8_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt8_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_mt9()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_mt9($user_id);
		if($data){
		foreach($data as $row){
		;	echo $row->timestamp;
			if (time() - strtotime($row->timestamp) > 60*60*24) {
			    redirect('User/mt9_qp1_sg1','refresh:2');
			//	print "Unauthorized, No payment found in last 24 hours";
			} else {
				redirect('User/mt9_qp1_sg1','refresh:2');
			 }
		}
	}	else{
	    	redirect('User/mt9_qp1_sg1','refresh:2');
	//echo "No past payment on this mock test";
	}
	}
	public function bypass_pm_hindi()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_hindi($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						redirect('User/load_study_material_hindi?name=study_material_hindi','refresh:2'); // study material wali link pe jaa
					 }
				}

		}else{
			echo "No past payment to access study material";
		}


	}

		public function bypass_pm_punjabi()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_punjabi($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						redirect('User/load_study_material_punjabi?name=study_material_punjabi','refresh:2'); // study material wali link pe jaa
					 }
				}

		}else{
			echo "No past payment to access study material";
		}


	}

	public function bypass_pm_tamil()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_tamil($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						redirect('User/load_study_material_tamil?name=study_material_tamil','refresh:2'); // study material wali link pe jaa
					 }
				}

		}else{
			echo "No past payment to access study material";
		}


	}

	public function bypass_pm_urdu()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_urdu($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						redirect('User/load_study_material_urdu?name=URDU PRACTISE MATERIAL','refresh:2'); // study material wali link pe jaa
					 }
				}

		}else{
			echo "No past payment to access study material";
		}


	}



	public function bypass_pm_nepali()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_nepali($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						redirect('User/load_study_material_nepali?name=NEPALI PRACTISE MATERIAL','refresh:2'); // study material wali link pe jaa
					 }
				}

		}else{
			echo "No past payment to access study material";
		}


	}

	public function bypass_pm_indonesian()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_indonesian($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						redirect('User/load_study_material_indonesian?name=Indonesian practise Material','refresh:2'); // study material wali link pe jaa
					 }
				}

		}
		else{
			echo "No past payment to access study material";
		}


	}


   public function bypass_pm_session()
	{
		$user_id=$this->session->userdata('user_id');
		$data=$this->UserModel->bypass_pm_session($user_id); //doubt
		if($data>=1){
			foreach($data as $row){
				//;	echo $row->timestamp;
					if (time() - strtotime($row->timestamp) > 6000*6000*24*30) {
						print "Unauthorized, No payment found";
					 } else {
						print "OUR NAATI COACH WILL SOON CONTACT YOU";
					 }
				}

		}else{
			echo "No past payment to access study material";
		}


	}









	public function load_login()
	{
		$this->load->view('web/header');
		$this->load->view('web/loginsign');
		$this->load->view('web/footer');
	}
	public function contact()
	{
		$this->load->view('web/header');
		$this->load->view('web/contact');
		$this->load->view('web/footer');
	}
	public function loadmock_mt1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt1',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Hindi!');
				redirect('User/');
		}
	}
	public function loadmock_mt2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt2',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Hindi !');
				redirect('User/');
		}
	}
	public function loadmock_mt3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt3',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Hindi !');
				redirect('User/');
		}
	}
		public function loadmock_mt4()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt4',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Punjabi !');
				redirect('User/');
		}
	}


		public function loadmock_mt5()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt5',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Punjabi !');
				redirect('User/');
		}
	}
	public function loadmock_mt6()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt6',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Punjabi !');
				redirect('User/');
		}
	}
	public function loadmock_mt7()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt7',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Gujarati !');
				redirect('User/');
		}
	}
	public function loadmock_mt8()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt8',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Gujarati !');
				redirect('User/');
		}
	}
	public function loadmock_mt9()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_mt9',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to continue MockTest in Gujarati !');
				redirect('User/');
		}
	}


		public function load_pm_hindi()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_hindi',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Study Material !');
				redirect('User/');
		}
	}
	public function load_buy_hindi()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Hindi/buy_hindi',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Hindi - Study material and Mock Test !');
				redirect('User/');
		}
	}
		public function load_buy_punjabi()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Punjabi/buy_punjabi',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Punjabi - Study material!');
				redirect('User/');
		}
	}
		public function load_buy_tamil()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Tamil/buy_tamil',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Tamil - Study material!');
				redirect('User/');
		}
	}
		public function load_buy_urdu()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Urdu/buy_urdu',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Urdu - Study material!');
				redirect('User/');
		}
	}
		public function load_buy_nepali()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Nepali/buy_nepali',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Nepali - Study material!');
				redirect('User/');
		}
	}
		public function load_buy_indonesian()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Indonesian/buy_indonesian',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Indonesian - Study material!');
				redirect('User/');
		}
	}

	public function load_pm_session()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_session',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to get 1-to-1 session !');
				redirect('User/');
		}
	}
	public function load_pm_punjabi()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_punjabi',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Study Material !');
				redirect('User/');
		}
	}

		public function load_pm_tamil()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_tamil',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Study Material !');
				redirect('User/');
		}
	}
		public function load_pm_urdu()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_urdu',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Study Material !');
				redirect('User/');
		}
	}

		public function load_pm_nepali()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_nepali',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Study Material !');
				redirect('User/');
		}
	}
		public function load_pm_indonesian()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/confirmation_indonesian',$name);
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','Please login to access Study Material !');
				redirect('User/');
		}
	}












	public function mt1p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt1p2');
		$this->load->view('web/footer');
	}
	public function mt2p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt2p2');
		$this->load->view('web/footer');
	}
	public function mt3p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt3p2');
		$this->load->view('web/footer');
	}
		public function mt4p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt4p2'); //doubt
		$this->load->view('web/footer');
	}
		public function mt5p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt5p2');
		$this->load->view('web/footer');
	}
	public function mt6p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt6p2');
		$this->load->view('web/footer');
	}
		public function mt7p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt7p2');
		$this->load->view('web/footer');
	}
	public function mt8p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt8p2');
		$this->load->view('web/footer');
	}
		public function mt9p2()
	{
		$this->load->view('web/header');
		$this->load->view('web/mt9p2');
		$this->load->view('web/footer');
	}
	//tanvi
	public function register_user()
	{
		$user_firstname=$this->input->post('user_firstname');
		$user_lastname=$this->input->post('user_lastname');
		$user_contact=$this->input->post('user_contact');
		$user_email=$this->input->post('user_email');
		$user_password=$this->input->post('user_password');
		$userData=array('user_firstname'=>$user_firstname,
		'user_lastname'=>$user_lastname,
		'user_contact'=>$user_contact,
		'user_email'=>$user_email,
		'user_password'=>base64_encode($user_password));
		$res=$this->UserModel->ins_user($userData);
		//$this->load->view()
		if($res){
				$this->session->set_flashdata('success','Thank You for registering with  NAATI Mock test');
				redirect('User/');
		}
		else{
				echo "Failed";
		}
	}

	public function isUserLogin()
	{
		$email=$this->input->post('user_email');
		$password=$this->input->post('user_password');
		//$data=array('eamil'=>$email,'password'=>$password);
		$return=$this->UserModel->loginUser($email,$password);
		if(count($return)>0)
		{
			foreach($return as $row)
			{
				$sessionArray=array(
					'user_id'=>$row->user_id,
					'user_firstname'=>$row->user_firstname,
					'user_lastname'=>$row->user_lastname,
					'user_email'=>$row->user_email
				);
			}
			$this->session->set_userdata($sessionArray);
		redirect('User/index');
		}
		else
		{
			$this->session->set_flashdata('failed','Incorrect Email or Password');
			redirect('User/load_login');
		}
	}
	public function load_dropdown()
	{
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/dropdown');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function calc()
	{
		$this->load->view('web/header');
		$this->load->view('web/confirmation');
		$this->load->view('web/footer');
	}
	public function confirmation()
	{
		$this->load->view('web/header');
		$this->load->view('web/confirmation');
		$this->load->view('web/footer');
	}
	public function terms()
	{
		$this->load->view('web/header');
		$this->load->view('web/terms');
		$this->load->view('web/footer');
	}
	public function date()
	{
		if (time() - strtotime("2020-10-24 4:00:26") > 60*60*24) {
			print "Older than 24h";
		 } else {
			print "Newer than 24h";
		 }
	}

	public function check_mt1()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
		//	$name = $_POST['name'];
				$name = 'tanvi mali';
		//	$email = $_POST['email'];
				$email = 'maltanvi@gmail.com';
		//	$card_num = $_POST['card_num'];
			$card_num = '4242424242424242';
		//	$card_exp_month = $_POST['exp_month'];
				$card_exp_month = '01';
		//	$card_exp_year = $_POST['exp_year'];
				$card_exp_year ='2022';
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
			  "secret_key"      => "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",
			  "publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1= date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
				//	'card_num' => $card_num,
			    	'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);


				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
					//	$data['insertID'] = $this->db->insert_id();
						$iid=$this->db->insert_id();
						$mock_test='1';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt1_qp1_sg1','refresh:2');

					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function check_payment_mt1()
	{

	}
	public function check_payment_mt2()
	{

	}
	public function check_payment_mt3()
	{

	}	public function check_payment_mt4()
	{

	}
	public function check_mt2()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='2';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt2_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function check_mt3()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='3';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt3_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	//mock test 4
	public function check_mt4()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
		//	$name = $_POST['name'];
				$name = 'tanvi mali';
		//	$email = $_POST['email'];
				$email = 'maltanvi@gmail.com';
		//	$card_num = $_POST['card_num'];
			$card_num = '4242424242424242';
		//	$card_exp_month = $_POST['exp_month'];
				$card_exp_month = '01';
		//	$card_exp_year = $_POST['exp_year'];
				$card_exp_year ='2022';
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
			  "secret_key"      => "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",
			  "publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "4";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1= date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
				//	'card_num' => $card_num,
			    	'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);


				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
					//	$data['insertID'] = $this->db->insert_id();
						$iid=$this->db->insert_id();
						$mock_test='4';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt4_qp1_sg1','refresh:2');

					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}

	//mock test 5
		public function check_mt5()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "5";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='5';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt5_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	//mock test 6
	public function check_mt6()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "6";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='6';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt6_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}

		//mock test 7
	public function check_mt7()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "7";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='7';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt7_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
		//mock test 8
	public function check_mt8()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "8";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='8';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt8_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}

		//mock test 9
	public function check_mt9()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "9";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,

					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='9';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/mt9_qp1_sg1','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}

	public function check_pm_hindi()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='pm_hindi';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/load_study_material_hindi?name=study_material_hindi','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function check_pm_punjabi()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='pm_punjabi';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/load_study_material_punjabi?name=study_material_punjabi','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
		public function check_pm_tamil()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='pm_tamil';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/load_study_material_tamil?name=study_material_tamil','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
		public function check_pm_urdu()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='pm_urdu';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/load_study_material_urdu?name=study_material_urdu','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function check_pm_nepali()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='pm_nepali';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/load_study_material_nepali?name=study_material_nepali','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function check_pm_indonesian()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_test='pm_indonesian';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_test);
						 redirect('User/load_study_material_indonesian?name=study_material_indonesian','refresh:2');
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
		public function check_pm_session()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];

			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$itemName=$_POST['item_name'];

			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			//set api key
			$stripe = array(
				"secret_key"      => "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",
				"publishable_key" => "pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs"
			);
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			//item information
			$itemName = $this->input->post('item_name');;
			$itemNumber = "1";
			$itemPrice = $this->input->post('item_price');
			$itemTotal=$this->input->post('item_total');
			$qty = "1";
			$currency = "aud";
			$orderID = "1";
			/*
				$itemName = "stripe donation";
				$itemNumber = "PS123456";
				$itemPrice = 50;
				$curency = "inr";
				$itemName="proargi9+";
				orderID = "SKA92712";
			*/
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));

			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
				$date1=date("y-m-d H:i:s");
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email,
					'card_num' => $card_num,
					'card_exp_month' => $card_exp_month,
					'card_exp_year' => $card_exp_year,
					'item_name' => $itemName,
					'item_price' => $itemPrice/100,
					'item_price_currency' => $currency,
					'paid_amount' => $amount/100,
					'paid_amount_currency' => $currency,
					'txn_id' => $balance_transaction,
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
				);

				if ($this->db->insert('payments', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){
						$iid=$this->db->insert_id();
						$mock_session='pm_session';
					//	$this->load->view('web/payment_success', $data);
						$this->check_payment($date,$iid,$mock_session);
						 echo "Transaction has been successful";
					}
					else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}
			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}
	public function load_checkout_mt1()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_mt1',$data);
		$this->load->view('web/footer');
	}
	public function load_checkout_mt2()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_mt2',$data);
		$this->load->view('web/footer');
	}
	public function load_checkout_mt3()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_mt3',$data);
		$this->load->view('web/footer');
	}
		public function load_checkout_mt4()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_mt4',$data);
		$this->load->view('web/footer');
	}
		public function load_checkout_mt5()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_mt5',$data);
		$this->load->view('web/footer');
	}
	public function load_checkout_mt6()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_mt6',$data);
		$this->load->view('web/footer');
	}
	public function load_checkout_pm_hindi()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_hindi',$data);
		$this->load->view('web/footer');
	}
		public function load_checkout_pm_punjabi()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_punjabi',$data);
		$this->load->view('web/footer');
	}

	public function load_checkout_pm_tamil()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_tamil',$data);
		$this->load->view('web/footer');
	}

	public function load_checkout_pm_urdu()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_urdu',$data);
		$this->load->view('web/footer');
	}
	public function load_checkout_pm_nepali()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_nepali',$data);
		$this->load->view('web/footer');
	}
	public function load_checkout_pm_indonesian()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_indonesian',$data);
		$this->load->view('web/footer');
	}
		public function load_checkout_pm_session()
	{
		$data['item_amount']=$this->input->post('calc');
		$data['item_name']=$this->input->post('item_name');
		$this->load->view('web/header');
		$this->load->view('web/checkout_session',$data);
		$this->load->view('web/footer');
	}

	public function payment_success()
	{
		$this->load->view('web/payment_success');
	}
	public function payment_error()
	{
		$this->load->view('web/payment_error');
	}
	public function load_home()
	{
		$this->load->view('web/header');
		$this->load->view('web/home');
		$this->load->view('web/footer');
	}
	public function load_about()
	{
		$this->load->view('web/header');
		$this->load->view('web/about');
		$this->load->view('web/footer');
	}

		public function load_study_material()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/access_material');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}

	public function load_study_material_hindi()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/study_material_hindi');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_study_material_punjabi()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/study_material_punjabi');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}

	public function load_study_material_tamil()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/study_material_tamil');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}

	public function load_study_material_urdu()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/study_material_urdu');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_study_material_nepali()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/study_material_nepali');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}


	public function load_study_material_indonesian()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/study_material_indonesian');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}




	public function load_hindi_vocab()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Hindi/hindi_vocab');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_hindi_pm1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Hindi/hindi_pm1');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_hindi_pm2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Hindi/hindi_pm2');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_hindi_pm3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Hindi/hindi_pm3');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_punjabi_vocab()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Punjabi/punjabi_vocab');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_punjabi_pm1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Punjabi/punjabi_pm1');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}

	public function load_punjabi_pm2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Punjabi/punjabi_pm2');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}

	public function load_punjabi_pm3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Punjabi/punjabi_pm3');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}



		public function load_tamil_vocab()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Tamil/tamil_vocab');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_tamil_pm1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Tamil/tamil_pm1');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_tamil_pm2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Tamil/tamil_pm2');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}


	public function load_tamil_pm3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Tamil/tamil_pm3');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}



		public function load_urdu_vocab()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Urdu/urdu_vocab');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_urdu_pm1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Urdu/urdu_pm1');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_urdu_pm2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Urdu/urdu_pm2');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_urdu_pm3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Urdu/urdu_pm3');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
		public function load_nepali_vocab()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Nepali/nepali_vocab');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_nepali_pm1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Nepali/nepali_pm1');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_nepali_pm2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Nepali/nepali_pm2');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_nepali_pm3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Nepali/nepali_pm3');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_indonesian_vocab()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Indonesian/indonesian_vocab');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_indonesian_pm1()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Indonesian/indonesian_pm1');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_indonesian_pm2()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Indonesian/indonesian_pm2');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
public function load_indonesian_pm3()
	{
		if($this->session->userdata('user_firstname')){
			$name['name']=$this->input->get('name');
			$this->load->view('web/header');
			$this->load->view('web/Indonesian/indonesian_pm3');
			$this->load->view('web/footer');
		}else{
			$this->session->set_flashdata('login','To access Study material, Please Register/Login');
				redirect('User/');
		}
	}
	public function load_contact()
	{
		$this->load->view('web/header');
		$this->load->view('web/contact');
		$this->load->view('web/footer');
	}
	//MockTest1 data//
	public function mt1_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt1_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt1/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	//MockTest 2 data//
	public function mt2_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt2_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt2/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	//MockTest 3 data//
	public function mt3_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt3_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt3/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
		//MockTest4 data//
	public function mt4_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt4_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt4/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}

	//mock test 5 data

	public function mt5_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt5_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt5/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	//MockTest 6 data//
	public function mt6_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt6_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt6/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}


		//MockTest 7 data//
	public function mt7_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt7_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt7/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}

		//MockTest 8 data//
	public function mt8_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt8_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt8/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}

		//MockTest 9 data//
	public function mt9_qp1_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp1_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp1/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg1(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment1');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg2(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment2');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg3(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment3');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg4(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment4');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg5(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment5');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg6(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment6');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg7(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment7');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg8(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment8');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg9(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment9');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg10(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment10');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg11(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment11');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function mt9_qp2_sg12(){
		if($this->session->userdata('user_id'))
		{
			$this->load->view('web/header');
			$this->load->view('web/mt9/qp2/segment12');
			$this->load->view('web/footer');
		}
		else{
			redirect('User/');
		}
	}
	public function base()
	{
		$user='bookhindi';
		$pass='Bookhindi123';
		$db='bookhindi';

		$con=mysqli_connect('localhost',$user, $pass, $db);


		$user_id=2;
		$user_firstname='Hello';
		$user_lastname='Hello';
		$user_email='Hello';
		$segment='Hello';
		$question_paper='Hello';
		$mock_test='Hello';
		$submitted_at='Hello';
		$user_file='Hello';


		$sql="insert into data (user_id,user_firstname,user_lastname,user_email,submitted_at,mock_test,question_paper,segment,user_file) values('$user_id','$user_firstname','$user_lastname','$user_email','$user_file','$submitted_at','$mock_test','$question_paper','$segment')";
		$query=mysqli_query($con,$sql);
		if($query)
		{
			echo "No Error In Adding Product";
		}
		else{

			echo "Error In Adding Product";
		}
	}



	public function save_rec(){
	//local
	$user='bookhindi';
	$pass='Bookhindi123';
	$db='bookhindi';

	$con=mysqli_connect('localhost',$user, $pass, $db);

	$user_id=$this->session->userdata('user_id');
	$user_firstname=$this->session->userdata('user_firstname');
	$user_lastname=$this->session->userdata('user_lastname');
	$user_email=$this->session->userdata('user_email');
	$segment=$this->input->get('segment');
	$question_paper=$this->input->get('question_paper');
	$mock_test=$this->input->get('mock_test');
	$submitted_at=date('d:m:y');
	$user_file=$_POST['audio-filename'];

	$sql="insert into data (user_id,user_firstname,user_lastname,user_email,submitted_at,mock_test,question_paper,segment,user_file) values('$user_id','$user_firstname','$user_lastname','$user_email','$submitted_at','$mock_test','$question_paper','$segment','$user_file')";
	$query=mysqli_query($con,$sql);


	function someFunction($errno, $errstr) {
		echo '<h2>Upload failed.</h2><br>';
		echo '<p>'.$errstr.'</p>';
	}

	function selfInvoker()
	{
		if (!isset($_POST['audio-filename']) && !isset($_POST['video-filename'])) {
			echo 'Empty file name.';
			return;
		}

		// do NOT allow empty file names
		if (empty($_POST['audio-filename']) && empty($_POST['video-filename'])) {
			echo 'Empty file name.';
			return;
		}

		// do NOT allow third party audio uploads
		if (false && isset($_POST['audio-filename']) && strrpos($_POST['audio-filename'], "RecordRTC-") !== 0) {
			echo 'File name must start with "RecordRTC-"';
			return;
		}

		// do NOT allow third party video uploads
		if (false && isset($_POST['video-filename']) && strrpos($_POST['video-filename'], "RecordRTC-") !== 0) {
			echo 'File name must start with "RecordRTC-"';
			return;
		}



		$fileName = '';
		$tempName = '';
		$file_idx = '';

		if (!empty($_FILES['audio-blob'])) {
			$file_idx = 'audio-blob';
			$fileName = $_POST['audio-filename'];
			$tempName = $_FILES[$file_idx]['tmp_name'];
		} else {
			$file_idx = 'video-blob';
			$fileName = $_POST['video-filename'];
			$tempName = $_FILES[$file_idx]['tmp_name'];
		}

		if (empty($fileName) || empty($tempName)) {
			if(empty($tempName)) {
				echo 'Invalid temp_name: '.$tempName;
				return;
			}

			echo 'Invalid file name: '.$fileName;
			return;
		}

		/*
		$upload_max_filesize = return_bytes(ini_get('upload_max_filesize'));

		if ($_FILES[$file_idx]['size'] > $upload_max_filesize) {
		echo 'upload_max_filesize exceeded.';
		return;
		}

		$post_max_size = return_bytes(ini_get('post_max_size'));

		if ($_FILES[$file_idx]['size'] > $post_max_size) {
		echo 'post_max_size exceeded.';
		return;
		}
		*/

		$filePath =  'uploads/' . $fileName;

		// make sure that one can upload only allowed audio/video files
		$allowed = array(
			'webm',
			'wav',
			'mp4',
			'mkv',
			'mp3',
			'ogg'
		);
		$extension = pathinfo($filePath, PATHINFO_EXTENSION);
		if (!$extension || empty($extension) || !in_array($extension, $allowed)) {
			echo 'Invalid file extension: '.$extension;
			return;
		}

		if (!move_uploaded_file($tempName, $filePath)) {
			if(!empty($_FILES["file"]["error"])) {
				$listOfErrors = array(
					'1' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
					'2' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
					'3' => 'The uploaded file was only partially uploaded.',
					'4' => 'No file was uploaded.',
					'6' => 'Missing a temporary folder. Introduced in PHP 5.0.3.',
					'7' => 'Failed to write file to disk. Introduced in PHP 5.1.0.',
					'8' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop; examining the list of loaded extensions with phpinfo() may help.'
				);
				$error = $_FILES["file"]["error"];

				if(!empty($listOfErrors[$error])) {
					echo $listOfErrors[$error];
				}
				else {
					echo 'Not uploaded because of error #'.$_FILES["file"]["error"];
				}
			}
			else {
				echo 'Problem saving file: '.$tempName;
			}
			return;
		}

	echo "success";
	}


	/*
	function return_bytes($val) {
		$val = trim($val);
		$last = strtolower($val[strlen($val)-1]);
		switch($last) {
			// The 'G' modifier is available since PHP 5.1.0
			case 'g':
				$val *= 1024;
			case 'm':
				$val *= 1024;
			case 'k':
				$val *= 1024;
		}

		return $val;
	}
	*/

	selfInvoker();
		}

		public function logout()
		{
			session_destroy();
			redirect('User/index');
		}
		public function finish_mt1()
		{
		//	$this->load->view('web/header');
			$this->load->view('web/finish_test_mt1');
		//	$this->load->view('web/footer');
		}
			function forget_password() {

		$email = $this->input->post('email');
		$query_mail = $this->UserModel->check_email($email);

        $this->load->config('email');
		$this->load->library('email');
		$title = 'Message From Naatitests';
		if(count($query_mail) != 0)
		{
			$data['user'] = $query_mail;
			$this->load->view('web/header');
			$this->load->view('web/forgot_pwd');
		    $this->load->view('web/footer');
		echo "";
		foreach($query_mail as $row){
			$pwd=$row->user_password;
			$from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($email);
		$this->email->subject('Password Recovery Mail');
        $this->email->message('your naatimocktest password is:'.base64_decode($pwd));

        if ($this->email->send()) {
            echo "";
        } else {
            show_error($this->email->print_debugger());
		}
		}


	}
	else
	{
	    	$this->load->view('web/header');
			$this->load->view('web/noaccountfound');
		    $this->load->view('web/footer');
	//	echo "No Account Found For This Email.";
	}
    }
		public function finish()
		{
		//	$this->load->view('web/header');
			$this->load->view('web/finish_test');
		//	$this->load->view('web/footer');
		}

}

