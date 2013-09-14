
<?php defined('SYSPATH') or die('No direct script access.');



class Model_Userc extends Model {




public function getUsers()
{
	
	$db = Database::instance();
	

	$request = 'SELECT u.username from users u';
	



	$query = $db->query(Database::SELECT,$request);
	$res = array();
	foreach($query as $m)
	{
		$res[] = $m['username'];
	}
	unset($db);
	return json_encode($res);

}









} 