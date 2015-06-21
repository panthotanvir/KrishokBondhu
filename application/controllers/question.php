<?php
class Question extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			
			$this->load->model("dbmodel");
			$this->load->helper("url");
			$this->load->helper(array('form', 'url'));
			$this->load->helper('array');
			
		}
		
		public function questionIn(){
			
				$this->load->view('template/header');
				$this->load->view('template/menubar', $this->models->generate_menubar_data());
				$this->load->view('question');
				$this->load->view('template/footer');
			
		}
		
		public function questionShow(){
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			
			$show_success=$this->dbmodel->questionShowAll();
			
				
			if($show_success->num_rows()>0) 
			{
				  $data['show_success'] = $show_success;
				  $this->load->view("question_show",$data);
			}
			else{
				echo 'কোন প্রশ্ন নেই।';
			}
			
			$this->load->view('template/footer');
		}
		
		public function questionUpdate($id){
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			
			$update_success = $this->dbmodel->questionUpdate($id);
			
			if($update_success->num_rows()>0) 
			{
				  $data['update_success']=$update_success;
				  $this->load->view("question_update",$data);
			}	
			$this->load->view('template/footer');
		}
		
		public function questionUpdateFinal($id){   
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('question_update');
			$this->load->view('template/footer');
				//redirect('question/questionShow');
			}
		
		public function questionOne($question_id){
			$data['data'] = $this->dbmodel->get_question($question_id);
			$this->load->view('template/header');
			$this->load->view('template/menubar', $this->models->generate_menubar_data());
			$this->load->view('question_one', $data);
			$this->load->view('template/footer');
		}
}
?>
