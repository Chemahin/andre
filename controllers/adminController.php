<?php 
require_once 'models/contact.php';
//все модели

	class Admin extends Controller
	{
		public function index()
		{
			$m = new ContactModel();
			$data = ContactModel::forMain();

			View::render('home/main', compact('data'));
		}


	}



 ?>