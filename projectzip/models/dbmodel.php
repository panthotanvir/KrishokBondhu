<?php
class Dbmodel extends CI_Model{
		public function __construct()
		{
			parent::__construct();
			
		}
		
		public function setSession($user,$password){
						$_SESSION['x']=1;
						$_SESSION['id']=$user;
						echo $_SESSION['id'];
						$_SESSION['password']=$password;
		}
		
		public function unsetSession(){
						$_SESSION['x']=0;
						$_SESSION['id']="";
						$_session['password']="";;
		}
		public function addFarmer($user_name,$password,$national_id,$district_name,$division,$subdistrict_name,$address,$phone_no){
			$this->load->database();
			$query1 = "select national_id from user where national_id='".$national_id."';";
			//echo $query1;
			$check= $this->db->query($query1);
			//echo $check->num_rows;
				if($check->num_rows==0){
					$query = "insert into user(user_name,division,district_name,subdistrict_name,national_id,phone_no,address,password) values ('".$user_name."','".$division."','".$district_name."','".$subdistrict_name."','".$national_id."','".$phone_no."','".$address."','".$password."');";
		//echo $query;
		//$query2 = "insert into userlist(user_nid,user_name,password) values ('".$farmer_nid."','".$farmer_name."','".$farmer_password."');";
		//echo $query2;
		//$result1= $this->db->query($query2);
		$result = $this->db->query($query);
		return $result ? true : false;
				}
				else return false;
			
			$this->db->close();
		
		}
		
		public function getUserId($national_id){
			$this->load->database();
			$query1 = "select user_id from user where national_id='".$national_id."';";
			//echo $query1;
			$result= $this->db->query($query1);
			return $result;
		}
		
		public function login($user,$password){
			$this->load->database();
			$query1 = "select * from user where user_id='".$user."' and password='".$password."';" ;
			//echo $query1;
			$check= $this->db->query($query1);
			//echo $check->num_rows;
			if($check->num_rows==1){
					return $check;
				}
			else return false;
			$this->db->close();
			
		}
		
		public function alladd()
		{
			$query="SELECT * FROM  buyproduct natural join customer ";
			$returnview=$this->db->query($query);
			return $returnview;
		}
		
		public function buyproduct($national_id,$product_name,$product_date,$product_datelast,$product_amount,$address,$bazarname,$thana,$district,$division)
		{
			$query="insert into buyproduct(national_id,product_name,product_date,product_datelast,product_amount,address,bazarname,thana,district,division) 
			         values('".$product_name."','".$product_date."','".$product_amount."','".$address."','".$bazarname."','".$thana."','".$district."','".$division."') ";
					 
					 $result=$this->db->query($query);
					 
		}
		public function cropsUpdate($title,$type,$subtype,$description,$cultivation,$insecticide,$fertilizer)
		{
			$this->load->database();
			$query="insert into crop(title,type,subtype,description,cultivation,insecticide,fertilizer) values('".$title."','".$type."','".$subtype."','".$description."','".$cultivation."','".$insecticide."','".$fertilizer."')";
			
			$result=$this->db->query($query);
			
				 return $result ? true : false;
			
			
			
			
		}
		
			public function addSell($data,$user_id,$title,$amount,$price,$production_date,$description,$location){
			 $image_name = $data['upload_data']['file_name'];
			// $farmer_nid = $user_nid;
			// $add_type = $product_type;
			 //$photo_path = $data['upload_data']['full_path'];
			 $this->load->database();
			 $query = "insert into sell(user_id,amount,price,production_date,description,image_name,location,title) values ('".$user_id."','".$amount."','".$price."','".$production_date."','".$description."','".$image_name."','".$location."','".$title."');";
			 $result = $this->db->query($query);
			 return $result;
			 $this->db->close();
			 
		}
		
			public function showPost($id){
		
			$this->load->database();
			$query = "select * from sell where user_id='".$id."';";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
		}			 
		
		public function addBuy($user_id,$title,$amount,$price,$required_date,$description,$location){
			 $this->load->database();
			 $query = "insert into buy(user_id,amount,price,require_date,description,location,title) values ('".$user_id."','".$amount."','".$price."','".$required_date."','".$description."','".$location."','".$title."');";
			 $result = $this->db->query($query);
			 return $result? true:false;
			 $this->db->close();
			
		
		}
		
			public function showBuy($id){
		
			$this->load->database();
			$query = "select * from buy where user_id='".$id."';";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
		}
					 
					 
		public function cropshow()
		{
			$this->load->database();
			$query = "select * from crop ";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
		}	
		
		public function bazarUpdate($product_name,$product_price,$product_district,$product_date,$product_stat)	
		{
			 $this->load->database();
			 $query = "insert into bazar(product_name,product_price,product_district,product_date,product_stat) values ('".$product_name."','".$product_price."','".$product_district."','".$product_date."','".$product_stat."');";
			 $result = $this->db->query($query);
			 return $result;
			 $this->db->close();
		}	
		public function bazarImprove()
		{
			$this->load->database();
			$query = "select * from bazar ";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
			
		}
		 public function bazarCheck($product_name,$product_district)
		{
			$this->load->database();
			$query = "select * from bazar where product_name='".$product_name."'  and  product_district='".$product_district."' order by product_date  desc" ;
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
		} 
		
		public function programUpdate($program_name,$channel_name,$program_schedule,$program_overview)
		{
			$this->load->database();
			$query="insert into program(program_name,channel_name,program_schedule,program_overview) values('".$program_name."','".$channel_name."','".$program_schedule."','".$program_overview."')";
			$result=$this->db->query($query);
			return $result;
			$this->db->close();
		}
		public function programCheck()
		{
			$this->load->database();
			$query = "select * from program ";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
			
		}
		
		public function bankUpdate($bank_name,$bank_loan,$bank_website)
		{
			$this->load->database();
			$query="insert into bank(bank_name,bank_loan,bank_website) values('".$bank_name."','".$bank_loan."','".$bank_website."')";
			$result=$this->db->query($query);
			return $result;
			$this->db->close();
		}
		
		public function bankCheck()
		{
			$this->load->database();
			$query = "select * from bank ";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
			
		}			 
		
		public function marketAnalysisDB($product_district){
			$this->load->database();
			$query = "select * from bazar where product_district='".$product_district."'";
			$result = $this->db->query($query);
			return $result;
			$this->db->close();
		
		}

}
?>