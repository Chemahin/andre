<?php 


	class MaterialsContent extends Model
	{
		static function index()
		{
			$res = self::$pdo->query('SELECT * FROM materials');
			return $res->fetchAll(PDO::FETCH_ASSOC);
		}

	}
	




 ?>