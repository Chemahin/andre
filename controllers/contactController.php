<?php 
require_once 'models/contact.php';

class Contact extends Controller{

	public function index()
		{
			$m = new ContactModel();
			$data = ContactModel::forMain();
						
			


			View::render('contact/contact', compact('data'));
			
		}





}




 ?>