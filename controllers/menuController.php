<?php 
require_once 'models/contact.php';

	class Menu extends Controller
	{
		public function index()
		{
			$m = new ContactModel();
			$data = ContactModel::forMain();
			

			View::render('menu', compact('data'));
			
		}

	}



 ?>