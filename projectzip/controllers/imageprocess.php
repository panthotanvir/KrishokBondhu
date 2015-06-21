<?php
class Imageprocess extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model("dbmodel");
			$this->load->helper("url");
			
		}
		
		public function index()
		{
			
				//$this->load->view("welcome");
			//$this->load->view("main_welcome");
			$this->buyproduct();
		}
		public function buyproduct()
		{
			if(isset($_POST['upload']))
			{
				$product_name=$_POST['product_name'];
				$product_date=$_POST['product_date'];
				$product_datelast=$_POST['product_datelast'];
				$product_amount=$_POST['product_amount'];
				$address=$_POST['address'];
				$bazarname=$_POST['bazarname'];
				$thana=$_POST['thana'];
				$district=$_POST['district'];
				$division=$_POST['division'];
				
				$national_id=$user_id;
				
				$buyresult=$this->dbmodel->buyproduct($national_id,$product_name,$product_date,$product_datelast,$product_amount,$address,$bazarname,$thana,$district,$division);
				$addproduct=$this->dbmodel->alladd();
				 $data['addproduct']=$addproduct;
						
				if($addproduct->num_rows()>=1 ) 
				{
					$data['addproduct']=$addproduct;
					$this->load->view("addshow",$data);
				}
			}
			
		}
}