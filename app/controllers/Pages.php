<?php 
	class Pages extends Controller {
		public function __construct(){
			
		}

		public function index(){	

			$data = [
				'title' => 'cjsMVC'				
			];


			
			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'Welcome'
			];
			

			$this->view('pages/about', $data);
		}
	}
