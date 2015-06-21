<?php class Information extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model("dbmodel");
			$this->load->helper("url");
			$this->load->helper(array('form', 'url'));
			$this->load->helper('array');
			session_start();
			
			
		}
		
		public function cropView(){
			$data['cropview'] = $this->dbmodel->cropData();
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			
			$this->load->view('crop_information',$data);
			$this->load->view('template/footer');
		}
}
?>
