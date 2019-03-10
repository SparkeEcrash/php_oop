<?php
	class Pages extends Controller {
		public function __construct() {
		}

		public function index() {

			if(isLoggedIn()){
				redirect('posts');
			}

			$data = [
				'title' => 'PHP_OOP MVC FRAMEWORK',
				'description' => 'Simple social network built on the PHP_OOP MVC framework'
			];

			$this->view('pages/index', $data);
		}

		public function about() {
			$data = [
				'title' => 'About Us',
				'description' => 'App to share posts with other users'
			];
			$this->view('pages/about', $data);
		}

	}

?>