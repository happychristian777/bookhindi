<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

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
	 public function loginUser($email,$password)
	 {
		 	$this->db->where('user_email',$email);
			$this->db->where('user_password',base64_encode($password));
			$result=$this->db->get('users');
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

	 public function flight_count() {
		return $this->db->count_all("users");
	}
	public function passenger_count() {
		return $this->db->count_all("payments");
	}
	public function pilots_count() {
		return $this->db->count_all("data");
	}
	public function ins_user($userData){
		$res=$this->db->insert('users',$userData);
		return true;

	}
	public function ins_check_payment($data)
	{
		$this->db->insert('chk_payment',$data);
		return true;
	}
	public function bypass_mt1($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','1');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
	public function bypass_mt2($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','2');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
	public function bypass_mt3($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','3');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_mt4($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','4');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_mt5($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','5');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_mt6($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','6');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_mt7($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','7');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_mt8($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','8');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_mt9($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','9');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
	public function bypass_pm_hindi($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','pm_hindi');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_pm_punjabi($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','pm_punjabi');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_pm_tamil($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','pm_tamil');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_pm_urdu($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','pm_urdu');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_pm_nepali($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','pm_nepali');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
	
		public function bypass_pm_indonesian($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_test','pm_indonesian');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function bypass_pm_session($user_id)
	{
		$this->db->select('*');
		$this->db->from('chk_payment');
		$this->db->where('user_id',$user_id);
		$this->db->where('mock_session','pm_session');
		$this->db->order_by("id", "desc");
		$this->db->limit('1');
		$res=$this->db->get();
		return $res->result();
	}
		public function check_email($email)
	{
		$this->db->where('user_email',$email);
		$res=$this->db->get('users');
		return $res->result();
	}
	
	
	
	
	
	
	
	
	public function ins_contact($data)
	{
		$this->db->insert('contact',$data);
		return true;
	}
	
}