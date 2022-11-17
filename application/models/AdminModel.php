<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

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
		 $this->load->database();
	 }
	 public function loginAdmin($email,$password)
	 {
		 	$this->db->where('adminemail',$email);
			$this->db->where('adminpwd',$password);
			$result=$this->db->get('admin');
			return $result->result();
	 }
	 public function get_users()
	 {
		$res=$this->db->get('users');
		return $res->result();
	 }
	 public function get_payments()
	 {
		$res=$this->db->get('payments');
		return $res->result();
	 }
	 public function get_data()
	 {
		$res=$this->db->get('data');
		return $res->result();
	 }
	 public function users_count() {
		return $this->db->count_all("users");
	}
	public function payments_count() {
		return $this->db->count_all("payments");
	}
	public function test_count() {
		return $this->db->count_all("data");
	}
	public function mock_test1()
	{
		$this->db->where('mock_test','1');
		$mt1=$this->db->get('data');
		return $mt1->result();
	}
	public function mock_test2()
	{
		$this->db->where('mock_test','2');
		$mt2=$this->db->get('data');
		return $mt2->result();
	}
	public function mock_test3()
	{
		$this->db->where('mock_test','3');
		$mt3=$this->db->get('data');
		return $mt3->result();
	}
		public function mock_test4()
	{
		$this->db->where('mock_test','4');
		$mt4=$this->db->get('data');
		return $mt4->result();
	}
		public function mock_test5()
	{
		$this->db->where('mock_test','5');
		$mt5=$this->db->get('data');
		return $mt5->result();
	}
		public function mock_test6()
	{
		$this->db->where('mock_test','6');
		$mt6=$this->db->get('data');
		return $mt6->result();
	}
	public function mock_test7()
	{
		$this->db->where('mock_test','7');
		$mt7=$this->db->get('data');
		return $mt7->result();
	}
	public function mock_test8()
	{
		$this->db->where('mock_test','8');
		$mt8=$this->db->get('data');
		return $mt8->result();
	}
	public function mock_test9()
	{
		$this->db->where('mock_test','9');
		$mt9=$this->db->get('data');
		return $mt9->result();
	}
		public function mock_session()
	{
		$this->db->where('mock_session','10');
		$mock_session=$this->db->get('data');
		return $mock_session->result();
	}
	public function pm_session()
	{
		$this->db->where('mock_session','pm_session');
		$pm_session=$this->db->get('data');
		return $pm_session->result();
	}
	public function pm_hindi()
	{
		$this->db->where('mock_test','pm_hindi');
		$pm_hindi=$this->db->get('data');
		return $pm_hindi->result();
	}
	public function pm_punjabi()
	{
		$this->db->where('mock_test','pm_punjabi');
		$pm_punjabi=$this->db->get('data');
		return $pm_punjabi->result();
	}
	
		public function pm_tamil()
	{
		$this->db->where('mock_test','pm_tamil');
		$pm_tamil=$this->db->get('data');
		return $pm_tamil->result();
	}
	
		public function pm_urdu()
	{
		$this->db->where('mock_test','pm_urdu');
		$pm_urdu=$this->db->get('data');
		return $pm_urdu->result();
	}
	
		public function pm_nepali()
	{
		$this->db->where('mock_test','pm_nepali');
		$pm_nepali=$this->db->get('data');
		return $pm_nepali->result();
	}
	
		public function pm_indonesian()
	{
		$this->db->where('mock_test','pm_indonesian');
		$pm_indonesian=$this->db->get('data');
		return $pm_indonesian->result();
	}
	
	
	
	
	
	public function count_mt1()
	{
		$this->db->where('mock_test','1');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	public function count_mt2()
	{
		$this->db->where('mock_test','2');
		$this->db->from('data');
		return $this->db->count_all_results();

	}
	public function count_mt3()
	{
		$this->db->where('mock_test','3');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_mt4()
	{
		$this->db->where('mock_test','4');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	
	public function count_mt5()
	{
		$this->db->where('mock_test','5');
		$this->db->from('data');
		return $this->db->count_all_results();

	}
	public function count_mt6()
	{
		$this->db->where('mock_test','6');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	
	
		public function count_mt7()
	{
		$this->db->where('mock_test','7');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_mt8()
	{
		$this->db->where('mock_test','8');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_mt9()
	{
		$this->db->where('mock_test','9');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_session()
	{
		$this->db->where('mock_session','7');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	
	
		public function count_pm_hindi()
	{
		$this->db->where('mock_test','pm_hindi');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_pm_punjabi()
	{
		$this->db->where('mock_test','pm_punjabi');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	
		public function count_pm_tamil()
	{
		$this->db->where('mock_test','pm_tamil');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	
		public function count_pm_urdu()
	{
		$this->db->where('mock_test','pm_urdu');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_pm_nepali()
	{
		$this->db->where('mock_test','pm_nepali');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
		public function count_pm_indonesian()
	{
		$this->db->where('mock_test','pm_indonesian');
		$this->db->from('data');
		return $this->db->count_all_results();
	}
	
	public function get_contacts()
	{
		$res=$this->db->get('contact');
		return $res->result();
	}
	
}