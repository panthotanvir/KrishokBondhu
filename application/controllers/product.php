<?php
class Product extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model("dbmodel");
			$this->load->helper("url");
			$this->load->helper(array('form', 'url'));
			$this->load->helper('array');
			$this->load->library('form_validation');
			session_start();
			
			
		}
		
		public   function sell()
		{
				//echo $user_nid;
				if($this->models->is_logged_in()){
				$data= array('nuser'=> $_SESSION['id'], 'error'=>"");
				//$this->load->view("add_farmer_page");

				$this->load->view('template/header');
				$this->load->view('template/menubar', $this->models->generate_menubar_data());
				$this->load->view('add_customer_page',$data);
				$this->load->view('template/footer');
				}
				else {
					$_SESSION['y']=0;
				$this->load->view('template/header');
				$this->load->view('template/menubar', $this->models->generate_menubar_data());
				$this->load->view('main_welcome');
				$this->load->view('template/footer');
				}//redirect(base_url());
				
				//$this->load->view("addshow");
		}
		
		public function do_upload()
		{	
			if(isset($_POST['upload'])){
				
				$this->form_validation->set_rules('title', 'Title', 'required');
				$this->form_validation->set_rules('amount', 'Amount', 'required');
				$this->form_validation->set_rules('price', 'Price', 'required');
				
				$this->form_validation->set_rules('production_date', 'Production Date', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$this->sell();
				}
				else{
				$user_id = $_SESSION['id'];
				$title= $_POST['title'];
				$amount= $_POST['amount'];
				//echo $amount;
				$price= $_POST['price'];
				$production_date= $_POST['production_date'];
				$description= $_POST['description'];
				//$post_date = date();
				//$location= $_POST['location'];
		//echo $user_nid;
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
		
				$config['max_size']	= '5000';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors(),'nuser'=>"");

					$this->load->view('template/header');
					$this->load->view('template/menubar', $this->models->generate_menubar_data());
					$this->load->view('add_customer_page',$error);
					$this->load->view('template/footer');
					
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
				//$file_name = $upload_data['file_name'];
				//echo $user_nid;
				
					$image = $this->dbmodel->addSell($data,$user_id,$title,$amount,$price,$production_date,$description);
					$data1= array('user_id'=> $user_id);
					//$this->load->view('template/header',$data1);
					$this->load->view('template/header');
					$this->load->view('template/menubar', $this->models->generate_menubar_data());
					$this->load->view('upload_success',$data1);
					$this->load->view('template/footer');
				}
				}
			}
		}
		
		
		public function showSell(){
			$image = $this->dbmodel->showPost($_SESSION['id']);
			$data = array('image'=>$image, 'user_id'=>$_SESSION['id']);
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('show_post',$data);
			$this->load->view('template/footer');
		}
		
		public function showFullSellList(){
			$data['result'] = $this->dbmodel->sellFullList();
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			
			$this->load->view('sell_product_show',$data);
			$this->load->view('template/footer');
			
			}
		public function buy(){
			if($this->models->is_logged_in()){
				$data= array('nuser'=> $_SESSION['id'], 'error'=>"");
				//$this->load->view("add_farmer_page");
				$this->load->view('template/header');
				$this->load->view('template/menubar', $this->models->generate_menubar_data());
				$this->load->view('buy_post',$data);
				$this->load->view('template/footer');
				
				
			}
			else {
				$_SESSION['y']=0;
				$_SESSION['x']=0;
				$this->load->view('template/header');
				$this->load->view('template/menubar', $this->models->generate_menubar_data());
				$this->load->view('main_welcome');
				$this->load->view('template/footer');
				//redirect(base_url());
			}
		}
		
		public function buyPostConfirm(){
			if(isset($_POST['upload'])){
				$this->form_validation->set_rules('title', 'Title', 'required');
				$this->form_validation->set_rules('amount', 'Amount', 'required');
				$this->form_validation->set_rules('price', 'Price','required' );
				
				$this->form_validation->set_rules('required_date', 'Required Date', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$this->buy();
				}
				else{
				$user_id = $_SESSION['id'];
				$title= $_POST['title'];
				$amount= $_POST['amount'];
				//echo $amount;
				$price= $_POST['price'];
				$required_date= $_POST['required_date'];
				$description= $_POST['description'];
				//$location= $_POST['location'];
		//echo $user_nid;
					$image = $this->dbmodel->addBuy($user_id,$title,$amount,$price,$required_date,$description);
					$data1= array('user_id'=> $user_id);
					$this->load->view('template/header');
					$this->load->view('template/menubar', $this->models->generate_menubar_data());
					if($image==false){
						$this->buy();
					}
					else{
						$this->load->view('buy_success',$data1);
					}
				
					$this->load->view('template/footer');
				}
			}
			
		}
		public function showBuy(){
			$image = $this->dbmodel->showBuy($_SESSION['id']);
			$data = array('image'=>$image, 'user_id'=>$_SESSION['id']);
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('show_buy_post',$data);
			$this->load->view('template/footer');
		}
		
		public function showFullBuyList(){
			$data['result'] = $this->dbmodel->sellBuyList();
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('buy_product_show',$data);
			$this->load->view('template/footer');
			
			}
		
		public function marketAnalysis(){
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('market_selection');
			$this->load->view('template/footer');
		}
		public function marketAnalysisPost(){
			if(isset($_POST['enter'])){
				$this->form_validation->set_rules('district', 'District', 'required');
				if ($this->form_validation->run() == FALSE)
				{
					$this->marketAnalysis();
				}
				else{
					$product_district=$_POST['district'];
					$product_date=$_POST['date'];
					$result = $this->dbmodel->marketAnalysisDB($product_district,$product_date);
					if($result->num_rows==0){
						$this->marketAnalysis();
					}
					else{
						$data['result']=$result;
						$this->load->view('template/header');
						$this->load->view('template/menubar', $this->models->generate_menubar_data());
						$this->load->view('market_analysis_page',$data);
						$this->load->view('template/footer');
					}
				}
				
			}
		
		}
}
?>
