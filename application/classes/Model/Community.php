
<?php defined('SYSPATH') or die('No direct script access.');



class Model_Community extends Model {

	public function create()
	{	
		$label =  Request::current()->post('label');
		$members =  Request::current()->post('members');
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null($label))
		{
			$db = Database::instance();
			$request = 'INSERT INTO communities (label,fk_user) VALUES(\''.$label.'\','.$userID.')';
			$query = $db->query(Database::INSERT,$request);
			if(!is_null($members))
			{
				$members = json_decode($members);
				foreach ($members as $m) {
					$ruser = 'SELECT id FROM users WHERE username=\''.$m.'\'';
					$quser = $db->query(Database::SELECT,$ruser);
					
					foreach($quser as $u)
					{
						$r = 'INSERT INTO community_members (fk_community,fk_user) VALUES('.$query[0].','.$u['id'].')';
						$q = $db->query(Database::INSERT,$r);

					}
					
				}

			}

			unset($db);

			return true;

		}
		return false;

	}

	public function delete()
	{	
		//Simuler une cascade ou set autre chose ? 
		$id =  Request::current()->post('id');
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null($id))
		{
			$db = Database::instance();
			$request = 'DELETE FROM communities WHERE id='.$id;
			$query = $db->query(Database::DELETE,$request);
			unset($db);
			return true;

		}
		return false;

	}

	public function update()
	{	
		//refaire comme create
		$id =  Request::current()->post('id');
		$label =  Request::current()->post('label');
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null($id) && !is_null($label))
		{
			$db = Database::instance();
			$request = 'UPDATE FROM communities SET label=\''.$label.'\' WHERE id='.$id.' AND fk_user='.$userID;
			$query = $db->query(Database::UPDATE,$request);
			unset($db);
			return true;

		}
		return false;

	}

	public function getCommunities()
	{
		$db = Database::instance();
		$userID =  Auth::instance()->get_user()->id;
		$request = 'SELECT c.label, c.id FROM communities c LEFT JOIN community_members cm ON c.id=cm.fk_community ';
		$request.= ' WHERE cm.fk_community='.$userID;
		

		$query = $db->query(Database::SELECT,$request);
		$res = array();
		foreach($query as $m)
		{
			$res[] = $m;
		}
		unset($db);
		return json_encode($res);

	}

	public function getMembers()
	{
		$db = Database::instance();
		$communityId =  Request::current()->post('communityId');
		$request = 'SELECT u.id, u.username FROM community_members cm LEFT JOIN users u  ON cm.fk_user=u.id ';
		$request.= ' WHERE cm.fk_community='.$communityId;
		

		$query = $db->query(Database::SELECT,$request);
		$res = array();
		foreach($query as $m)
		{
			$res[] = $m;
		}
		unset($db);
		return json_encode($res);

	}

//useless ?
	public function addMember()
	{
		
		if(is_null($userId) || $userId=='')
			$userId =  Request::current()->post('userId');
		if(is_null($communityId) || $communityId=='')
			$communityId =  Request::current()->post('communityId');
		if(!is_null($userId) && !is_null($communityId))
		{
			$db = Database::instance();
			$request = 'INSERT INTO community_members (fk_community,fk_user) VALUES('.$communityId.','.$userId.')';
			$query = $db->query(Database::INSERT,$request);
			unset($db);
			return true;

		}
		return false;
	}

	public function deleteMember()
	{
		$me =  Auth::instance()->get_user()->id;
		$userId =  Request::current()->post('userId');
		$communityId =  Request::current()->post('communityId');
		if(!is_null($userId) && !is_null($communityId))
		{
			$db = Database::instance();
			$request = 'DELETE FROM  community_members WHERE fk_community = '.$communityId.' AND fk_user= '.$userId.')';
			$query = $db->query(Database::DELETE,$request);
			unset($db);
			return true;

		}
		return false;
	}

	






} 