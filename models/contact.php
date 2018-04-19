<?php 


	class ContactModel extends Model
	{
		static function forMain()
		{
			$res = self::$pdo->query('SELECT * FROM contacts');
			return $res->fetchAll(PDO::FETCH_ASSOC);
		}

	}
	




 ?>