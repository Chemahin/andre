<?php 
require_once 'models/materialsContent.php';
require_once 'models/contact.php';


class Material extends Controller
	{
		public function index()
		{
			$m = new ContactModel();
			$data = ContactModel::forMain();
						
			$m1 = new MaterialsContent();
			$data1 = MaterialsContent::index();



			View::render('materials/materials', compact('data','data1'));
			
		}


	}







 ?>