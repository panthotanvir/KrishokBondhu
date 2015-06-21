<?php
class Krishifirst extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model("dbmodel");
			$this->load->helper("url");
			$this->load->helper(array('form', 'url'));
			$this->load->helper('array');
			session_start();
			//$_SESSION['x']=0;
			
			
		}
		
		public function index()
		{
			$_SESSION['x']=0;
			$this->load->view("welcome");
		}
		
		public function home(){
			$this->load->view('welcome');
		}
		
		public function admin(){
			
			$this->load->view('admin_page');
		}
		
		
		
		
		
		public function buyproduct()
		{
			if(isset($_POST['upload']))
			{
				
				$product_name=$_POST['product_name'];
				$product_date=$_POST['product_date'];
				$product_amount=$_POST['product_amount'];
				$address=$_POST['address'];
				$bazarname=$_POST['bazarname'];
				$thana=$_POST['thana'];
				$district=$_POST['district'];
				$division=$_POST['division'];
				$result=$this->dbmodel->buyproduct($product_name,$product_date,$product_amount,$address,$bazarname,$thana,$district,$division);
				
				
			}
		} 
		 
		public function business()
		{
			echo $_SESSION['id'];
			if($_SESSION['x']==0) $this->load->view('welcome');
			else if($_SESSION['x']==1){
				$check=$this->dbmodel->login($_SESSION['id'],$_SESSION['password']);
				$data['check']=$check;
			//if($_SESSION['x']==1)
				$this->load->view('user_profile',$data);
			}
			//echo $_SESSION['id'];
			
			
		}
		
	
		
		
		
		
		

		public function productinfo()
		{
			
			
		}
		public function loginsuc()
		{
			if(isset($_POST['login']))
			{
			
			$this->load->view("welcome");
			}
		}
		public function hello()
		{
			
			if(isset($_POST['log']))
			{
				$this->load->view("add_customer_page");
			}
			
			}
	  
		
		public function about()
		{
			$this->load->view("About");
		}
		public function technology()
		{
		}
		public function bankloan($bankid)
		{
			if($bankid==0)$this->load->view('bangladeshbank');
			else if($bankid==1)$this->load->view('krishibank');
			else if($bankid==2)$this->load->view('sonalibank');
			else if($bankid==3)$this->load->view('agronibank');
			else if($bankid==4)$this->load->view('grameenbank');
			else if($bankid==5)$this->load->view('jonotabank');
		}
		
		public function program($program_id)
		{
			if($program_id==0)$this->load->view("mati_over");
			if($program_id==1)$this->load->view("mati_prog");
			 if($program_id==2)$this->load->view("diba_over");
			 if($program_id==3)$this->load->view("diba_prog");
		     if($program_id==4)$this->load->view("dak_over");
			 if($program_id==5)$this->load->view("dak_prog");
		}
		public function  research()
		{
			
		}
		public function contact()
		{
			
		}
		public function cultivation(){
			$this->load->view('cultivation');
		}
	
}
?>