
<?php defined('SYSPATH') or die('No direct script access.');



class Model_Category extends Model {

	public function create()
	{	
		$label =  Request::current()->post('label');
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null($label))
		{
			$db = Database::instance();
			$request = 'INSERT INTO categories (label,fk_user) VALUES(\''.$label.'\','.$userID.')';
			$query = $db->query(Database::INSERT,$request);
			unset($db);
			return true;

		}
		return false;

	}

	public function delete()
	{	
		$id =  Request::current()->post('id');
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null($id))
		{
			$db = Database::instance();
			$request = 'DELETE FROM categories WHERE id='.$id.' AND fk_user='.$userID;
			$query = $db->query(Database::DELETE,$request);
			unset($db);
			return true;

		}
		return false;

	}

	public function update()
	{	
		$id =  Request::current()->post('id');
		$label =  Request::current()->post('label');
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null($id) && !is_null($label))
		{
			$db = Database::instance();
			$request = 'UPDATE FROM categories SET label=\''.$label.'\' WHERE id='.$id.' AND fk_user='.$userID;
			$query = $db->query(Database::UPDATE,$request);
			unset($db);
			return true;

		}
		return false;

	}

	public function getCategories()
	{
		$db = Database::instance();
		$userID =  Auth::instance()->get_user()->id;
		$request = 'SELECT c.label, c.id FROM categories c WHERE fk_user='.$userID;
		

		$query = $db->query(Database::SELECT,$request);
		$res = array();
		foreach($query as $m)
		{
			$res[] = $m;
		}
		unset($db);
		return json_encode($res);

	}

	






} 