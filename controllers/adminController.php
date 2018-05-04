<?php 
require_once 'models/contact.php';
require_once 'models/gallery.php';
require_once 'models/materialsContent.php';

//все модели

	class Admin extends Controller
	{
		public function index()
		{
			$m = new ContactModel();
			$data = ContactModel::forMain();

			ViewAdmin::render('admin/adminLogin', compact('data'));
		}
		public function material()
			{
				$m = new ContactModel();
				$data = ContactModel::forMain();

				ViewAdmin::render('admin/materials', compact('data'));
			}
			public function gallery()
			{
				$m = new ContactModel();
				$data = ContactModel::forMain();

				ViewAdmin::render('admin/gallery', compact('data'));
			}
			public function contact()
			{
				$m = new ContactModel();
				$data = ContactModel::forMain();

				ViewAdmin::render('admin/contact', compact('data'));
			}


	}



 ?>