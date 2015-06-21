<?php
class Models extends CI_Model{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function userinfo($user,$fullname,$password,$re_password,$email,$session1,$session2,$admissionyear,$unit,$faculty,$department,$date_of_birth,$phone_no)
		{
			$query="insert into user_info(user,fullname,password,re_password,email,session1,session2,admissionyear,unit,faculty,department,date_of_birth,phone_no) values ('".$user."','".$fullname."','".$password."','".$re_password."','".$email."','".$session1."','".$session2."','".$admissionyear."','".$unit."','".$faculty."','".$department."','".$date_of_birth."','".$phone_no."');";
			
			$userinfo=$this->db->query($query);
			
			return $userinfo;
		}
		public function checkuser($user,$password)
		{
			$query="select * from user_info where user='".$user."' and password='".$password."'";
			
			$userinfo=$this->db->query($query);
			
			return $userinfo;
		}
		public function home_check($user)
		{
			$query="select * from user_info where user='".$user."'";
			
			$userinfo=$this->db->query($query);
			
			return $userinfo;
		}
			public function addFarmer($farmer_district,$farmer_division,$farmer_kid,$farmer_mobile,$farmer_name,$farmer_nid,$farmer_password,$farmer_union,$farmer_village){
			//$query1 = "insert into farmer(farmer_name) values('".$farmer_name."');";
			$query = "insert into farmer(farmer_name,farmer_kid,farmer_nid,farmer_division,farmer_district,farmer_union,farmer_village,farmer_mobile) values ('".$farmer_name."','".$farmer_kid."','".$farmer_nid."','".$farmer_division."','".$farmer_district."','".$farmer_union."','".$farmer_village."','".$farmer_mobile."')";
		echo $query;
		$result = $this->db->query($query);
		return $result;
		
		}
		public function login($user,$password)
		{
			$query="insert into login(user,pass) values ('".$user."','".$password."')";
			$result = $this->db->query($query);
			return $result;
		}
		public function get_crop_data(){
			$query = "SELECT DISTINCT(type) FROM crop";
			$result = $this->db->query($query);
			//var_dump($result);
			$ret = array();
			foreach( $result->result() as $r ){
				$type = $r->type;
				//var_dump($type);
				$query = "SELECT DISTINCT(subtype) FROM crop WHERE type='$type'";
				$result2 = $this->db->query($query);
				//var_dump($result2);
				foreach( $result2->result() as $r2 ){
					$subtype = $r2->subtype;
					//var_dump($subtype);
					$query = "SELECT id, title FROM crop WHERE type='$type' and subtype='$subtype'";
					$result3 = $this->db->query($query);
					foreach( $result3->result() as $r3 ){
						$ret[$type][$subtype][$r3->title] = base_url() . 'index.php/crop/view/' .$r3->id;
					}
				}
			}
			//var_dump($ret);
			return $ret;
		}
		public function get_bank_data(){
			$query = "SELECT bank_id, bank_name FROM bank";
			$result = $this->db->query($query);
			//var_dump($result);
			$ret = array();
			foreach( $result->result() as $r ){
				$ret[$r->bank_name] = base_url() . 'index.php/krishifirst/bankloan/' . $r->bank_id; 
			}
			//var_dump($ret);
			return $ret;
		}
		public function generate_url(){
			$ret = array();
			$ret['home'] = base_url();
			$ret['about'] = base_url().'index.php/krishifirst/about';
			$ret['login'] = base_url().'index.php/user/login';
			$ret['signup'] = base_url().'index.php/user/sign';
			$ret['logout'] = base_url().'index.php/user/unsetSession';
			$ret['profile'] = base_url().'index.php/user/myProfile';
			
			$ret['new_question'] = base_url().'index.php/question/questionIn';
			$ret['all_question'] = base_url().'index.php/question/questionShow';
			
			$ret['new_sell'] = base_url().'index.php/product/sell';
			$ret['list_sell'] = base_url().'index.php/product/showFullSellList';
			
			$ret['new_buy'] = base_url().'index.php/product/buy';
			$ret['list_buy'] = base_url().'index.php/product/showFullBuyList';
			
			$ret['market_analysis'] = base_url() . 'index.php/product/marketAnalysis';
			
			$ret['crop'] = base_url() . 'index.php/crop/listview';
			
			return $ret;
		}
		public function is_logged_in(){
			if( isset($_SESSION['x']) == true ){
				if( $_SESSION['x'] == '1' ){
					if($_SESSION['id'] == 'admin') return false;
					return true;
				}
			}
			return false;
		}
		public function get_user_data($user_id){
			$query = "SELECT * FROM user WHERE user_id = $user_id";
			$result = $this->db->query($query);
			return $result->result_array();
		}
		public function generate_menubar_data(){
			$ret = array();
			$ret['url'] = $this->generate_url();
			$ret['crop'] = $this->get_crop_data();
			$ret['bank'] = $this->get_bank_data();
			//var_dump($ret['url']);
			//echo $_SESSION['x'];
			$ret['logged_in'] = $this->is_logged_in();
			if( $ret['logged_in'] ){
				$ret['user'] = $this->get_user_data($_SESSION['id']);
			}
			return $ret;
		}
	}
?>
