<?php class User extends CI_Controller{
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
		
		public function admin(){
			
			//$this->load->view('admin_page');
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			//$this->load->view('template/sidebar');
			$this->load->view('admin_page');
			$this->load->view('template/footer');
			
		}
		public function sign(){
			if(!isset($_POST['submit'])){
				$data['x']=null;
			$this->load->view('template/header',$data);
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			
			$this->load->view("farmerRegistration");
			$this->load->view('template/footer',$data);
			}
			else{
				//session_start();
				
				//$session = $_SESSION['x'];
				//echo $_SESSION['x'];
				$this->form_validation->set_rules('user_name', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
				$this->form_validation->set_rules('confirm_password', 'Password', 'required|matches[password]');
				$this->form_validation->set_rules('national_id', 'National ID', 'required|exact_lenght[13]');
				$this->form_validation->set_rules('phone_no', 'Phone No', 'required|exact_lenght[11]');
				if ($this->form_validation->run() == FALSE)
				{
					$data['x']=null;
					$this->load->view('template/header',$data);
					$this->load->view('template/menubar', $this->models->generate_menubar_data());
					$this->load->view("farmerRegistration");
					$this->load->view('template/footer',$data);
				}
				
				else{
					$user_name= $_POST['user_name'];
					$password = $_POST['password'];
				
					$national_id= $_POST['national_id'];
					$division= $_POST['division'];
					$district_name= $_POST['district_name'];
					$subdistrict_name= $_POST['subdistrict_name'];
					$address= $_POST['address'];
					$phone_no= $_POST['phone_no'];
					$result= $this->dbmodel->addFarmer($user_name,$password,$national_id,$district_name,$division,$subdistrict_name,$address,$phone_no);
					if($result==false){
						$this->dbmodel->unsetSession();
						$data['x']=null;
						$this->load->view('template/header',$data);
						$this->load->view('template/menubar', $this->models->generate_menubar_data());
						$this->load->view("farmerRegistration");
						$this->load->view('template/footer',$data);
					}
				
					else {
					
					
							$check=$this->dbmodel->getUserId($national_id);
							foreach($check->result_array() as $row){
								$id = $row['user_id'];
								echo $id;
							}
							$this->dbmodel->setSession($id,$password);
							$data['check']=$check;
							
							$this->signConfirm($data);
							//echo $id;
							//$this->business($data);
						//$this->load->view('user_profile',$data);
						
				
					}
				}
				
			}
		}
		
		public function signConfirm($data){
			
							$this->load->view('template/header',$data);
							$this->load->view('template/menubar', $this->models->generate_menubar_data());
							$this->load->view('register_success',$data);
							$this->load->view('template/footer',$data);
			
		}
		public function login()
	   {
		  if(isset($_POST['login']))
			{
				
								//echo "session". $_SESSION['x'];
				$user=$_POST['user'];
				//echo "user"+$user;
				$password=$_POST['password'];  
				$userAdmin="admin";
				
				if($user==$userAdmin && $password == "admin")
				{
					//echo $user;
					$this->dbmodel->setSession($user,$password);
					$this->admin();
				}
				else
				{
					$check=$this->dbmodel->login($user,$password);
					if($check==false){
						//session_start();	
						$_SESSION['y']=1;
						$this->load->view('template/header');
						$this->load->view('template/menubar', $this->models->generate_menubar_data());
						$this->load->view('main_welcome');
						$this->load->view('template/footer');
					}
					else{
						$this->dbmodel->setSession($user,$password);
						//$_SESSION['x']=1;
						$data['check']=$check;
						redirect( base_url() );
						//echo "session".$_SESSION['x'];
						//$this->business($data);
						//$this->load->view('user_profile',$data);
					}
				}
			}
	    }
		
		public function unsetSession(){
			$this->dbmodel->unsetSession();
			redirect(base_url());
		}
		public function myProfile(){
			$check=$this->dbmodel->login($_SESSION['id'],$_SESSION['password']);
			$data['check'] = $check;
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('user_profile', $data);
			$this->load->view('template/footer');
		}
}
?>
