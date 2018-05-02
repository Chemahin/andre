<?php 
require_once 'models/gallery.php';
require_once 'models/contact.php';


class Gallery extends Controller
	{
		public function index()
		{
			$m = new ContactModel();
			$data = ContactModel::forMain();
						
			$m1 = new GalleryModel();
			$data1 = GalleryModel::index();



			View::render('gallery/gallery', compact('data','data1'));
			
		}


	}







 ?>