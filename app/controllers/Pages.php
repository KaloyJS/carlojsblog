<?php 
	class Pages extends Controller {
		public function __construct(){
			
		}

		public function index(){	

			$data = [
				'title' => 'CarloJS.blog',
				'description' => "Carlo JS' musings on his journey in life and web development"				
			];


			
			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'ʇnoqɐ',
				'description' => "A little Webapp to share my views,thoughts and stories to the world"
			];
			

			$this->view('pages/about', $data);
		}
	}
