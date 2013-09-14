
<?php defined('SYSPATH') or die('No direct script access.');



class Model_Data extends Model {

	public function getEvents()
	{
		$db = Database::instance();
		$request = 'SELECT * from invoices';
		$query = $db->query(Database::SELECT,$request);
		$res = array();
        foreach($query as $m)
        {
            $res[] = $m;
        }
		unset($db);
        return json_encode($res);
	}






} // End Welcome