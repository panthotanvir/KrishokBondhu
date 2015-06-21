<?php
class Models extends CI_Model{
		public function __construct()
		{
			parent::__construct();
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
			$result =$this->db->query($query);
			return $result;
		}

	}
?>