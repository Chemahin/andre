<?php 


	class GalleryModel extends Model
	{
		static function index()
		{
			$res = self::$pdo->query('SELECT * FROM galleries');
			return $res->fetchAll(PDO::FETCH_ASSOC);
		}

	}
	




 ?>