<?php class Crop extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model("dbmodel");
			$this->load->helper("url");
			$this->load->helper(array('form', 'url'));
			$this->load->helper('array');
			session_start();
			
			
		}
		
		
		public function adminupdate($check_id)
		{
			if($check_id==0)
			{
				//$this->load->view("crops_form");
				$this->load->view('template/header');
				$this->load->view('template/menubar');
				$this->load->view('template/sidebar');
				$this->load->view('crops_form');
				$this->load->view('template/footer');
			}
			else if($check_id==1)
			{ 
				//$this->load->view("bazar_update");
				$this->load->view('template/header');
				$this->load->view('template/menubar');
				$this->load->view('template/sidebar');
				$this->load->view('bazar_update');
				$this->load->view('template/footer');
			}
			else if($check_id==2)
			{ 
				//$this->load->view("bazar_update");$this->load->view("program_update");
				$this->load->view('template/header');
				$this->load->view('template/menubar');
				$this->load->view('template/sidebar');
				$this->load->view('program_update');
				$this->load->view('template/footer');
			}
			else if($check_id==3)
			{
				
				//$this->load->view("bazar_update");$this->load->view("program_update");
				$this->load->view('template/header');
				$this->load->view('template/menubar');
				$this->load->view('template/sidebar');
				$this->load->view('bank_update');
				$this->load->view('template/footer');
			
			}
			
			
		}
		
		public function cropsUpdate(){
			if(isset($_POST['upload']))
			{
					$title=$_POST['product_name'];
					echo $title;
					$type=$_POST['product_type'];
					$subtype=$_POST['product_subtype'];
					$description=$_POST['product_info'];
					$cultivation=$_POST['cultivation'];
					$insecticide=$_POST['product_insect'];
					$fertilizer=$_POST['product_seed'];
					$result1=$this->dbmodel->cropsUpdate($title,$type,$subtype,$description,$cultivation,$insecticide,$fertilizer);
					
							
							
							if($result1==false) 
							{
								$this->load->view('main_welcome');
								
							}
							else{
								$result=$this->dbmodel->cropshow();
								$data['result']=$result;
								$this->load->view('template/header',$data);
								$this->load->view('template/menubar',$data);
								$this->load->view('template/sidebar',$data);
								$this->load->view('cropShow',$data);
								$this->load->view('template/footer',$data);
							}
			}
			else $this->load->view('crops_form');
		}
		
		
			public function bazarUpdate()
			{
				
					if(isset($_POST['upload']))
					{
						
							$product_name=$_POST['product_name'];
							$product_price=$_POST['product_price'];
							$product_district=$_POST['product_district'];
							$product_date=$_POST['product_date'];
							
							$improve=$this->dbmodel->bazarCheck($product_name,$product_district);
							if($improve->num_rows()<1)
							{
								
								$product_stat_init=0;
								$result1=$this->dbmodel->bazarUpdate($product_name,$product_price,$product_district,$product_date,$product_stat_init);
								
											   if($result1==false) 
												{
													$this->load->view('main_welcome');
													
												}
												else{
													$result=$this->dbmodel->bazarImprove();
													$data['result']=$result;
													$this->load->view('template/header',$data);
													$this->load->view('template/menubar',$data);
													$this->load->view('template/sidebar',$data);
													$this->load->view('bazarShow',$data);
													$this->load->view('template/footer',$data);
												}
							}
							else
							{
								
								
								if($improve->num_rows()>=1)
								{
									$data['improve']=$improve;
									$flag=0;
									 foreach($improve->result_array() as $row)
									 {
										 if($flag==0)
										 {
											 $priceTemp=$row['product_price'];
											 $product_stat=(($product_price-$priceTemp)/$priceTemp)*100;
											
											 $result1=$this->dbmodel->bazarUpdate($product_name,$product_price,$product_district,$product_date,$product_stat);
											 
											 if($result1==false) 
												{
													$this->load->view('main_welcome');
													
												}
												else{
													$result=$this->dbmodel->bazarImprove();
													$data['result']=$result;
													$this->load->view('template/header',$data);
													$this->load->view('template/menubar',$data);
													$this->load->view('template/sidebar',$data);
													$this->load->view('bazarShow',$data);
													$this->load->view('template/footer',$data);
												}
												$flag=1;
										 }else break;
									 }
									
								} 
							}
						
					}
			else $this->load->view('main_welcome');
		}
		
		
		public function programUpdate()
		{
			        if(isset($_POST['upload']))
					{
						
						$program_name=$_POST['program_name'];
						$channel_name=$_POST['channel_name'];
						$program_schedule=$_POST['program_schedule'];
						$program_overview=$_POST['program_overview'];
						$result1=$this->dbmodel->programUpdate($program_name,$channel_name,$program_schedule,$program_overview);
						 if($result1==false) 
							{
								$this->load->view('main_welcome');
							}
							else{
							$result=$this->dbmodel->programCheck();
							$data['result']=$result;
							$this->load->view('template/header',$data);
							$this->load->view('template/menubar',$data);
							$this->load->view('template/sidebar',$data);
							$this->load->view('programShow',$data);
							$this->load->view('template/footer',$data);
												}
					}
					else $this->load->view("program_update");
					
		}
		
		public function bankUpdate()
		{
			        if(isset($_POST['upload']))
					{
						
						$bank_name=$_POST['bank_name'];
						$bank_loan=$_POST['bank_loan'];
						$bank_website=$_POST['bank_website'];
						$result1=$this->dbmodel->bankUpdate($bank_name,$bank_loan,$bank_website);
						 if($result1==false) 
							{
								$this->load->view('main_welcome');
							}
							else{
							$result=$this->dbmodel->bankCheck();
							$data['result']=$result;
							$this->load->view('template/header',$data);
							$this->load->view('template/menubar',$data);
							$this->load->view('template/sidebar',$data);
							$this->load->view('bankShow',$data);
							$this->load->view('template/footer',$data);
												}
					}
					else $this->load->view("bank_update");
					
		}
		
		
}
?>