<?php 

	class View
	{
		
		public static function render($path, $data)
		{
			extract($data);
			require 'views/header.php';
			require 'views/'.$path.'.php';
			require 'views/menu.php';
			require 'views/footer.php';
		}
	}
	class ViewAdmin
	{
		
		public static function render($path, $data)
		{
			extract($data);
			require 'views/header.php';
			require 'views/'.$path.'.php';
			require 'views/adminMenu.php';
			require 'views/footer.php';
		}
	}
?>