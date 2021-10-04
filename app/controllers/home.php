<?php 

	class Home extends CI_Controller{
		public function index(){
			// //how to pass data to view
			// $data['welcome'] = 'Hello!';
			// $this->load->view('home', $data);

			$data['main_content'] = 'home';
			$this->load->view('layouts/main', $data);

		}
	}

 ?>