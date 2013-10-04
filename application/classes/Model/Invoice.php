
<?php defined('SYSPATH') or die('No direct script access.');



class Model_Invoice extends Model {

	public function create()
	{	
		$userID =  Auth::instance()->get_user()->id;
		if(!is_null(Request::current()->post('payer')))
			$userID =  Request::current()->post('payer');

		$date =  Request::current()->post('date');

		$date = DateTime::createFromFormat('d/m/Y', $date);
		$date = $date->format('Y-m-d');
		$date = date("Y-m-d", strtotime($date));

		$amount =  Request::current()->post('amount');
		$category =  Request::current()->post('categoryId');
		$description =  Request::current()->post('description');
		$community =  Request::current()->post('communityId');
		$reduction =  Request::current()->post('reduction');
		$reductionUnit =  Request::current()->post('reductionUnit');

		if($reduction =='')
			$reduction = 0;

		else if($reductionUnit=='percent')
			$reduction = $amount-$amount*$reduction/100;

		if(!is_null($date) && !is_null($amount) && !is_null($description))
		{
			$db = Database::instance();
			$request = 'INSERT INTO invoices (date,amount,description,fk_category,fk_user) VALUES(\''.$date.'\','.$amount.',\''.$description.'\','.$category.','.$userID.')';
			$query = $db->query(Database::INSERT,$request);

			if(!is_null($community))
			{
				$request = 'INSERT INTO community_invoices (fk_community,fk_invoice,reduction) VALUES('.$community.','.$query[0].','.$reduction.')';
				$query = $db->query(Database::INSERT,$request);
				$subRequest = 'SELECT u.username,u.id FROM users u LEFT JOIN community_members cm ON cm.fk_user=u.id WHERE cm.fk_community='.$community;
				$subQuery = $db->query(Database::SELECT,$subRequest);
				foreach($subQuery as $m)
				{
					if(!is_null(Request::current()->post($m['id'])))
						{
							$r = 'INSERT INTO community_invoice_beneficiaries (fk_community_invoice,fk_user) VALUES('.$query[0].','.$m['id'].')';
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
	
	$id =  Request::current()->post('id');
	if(!is_null($id))
	{
		$db = Database::instance();
		$request = 'DELETE FROM community_invoice_beneficiaries cib LEFT JOIN community_invoices ci ON cib.fk_community_invoice=ci.id WHERE ci.fk_invoice='.$id ;
		$query = $db->query(Database::DELETE,$request);


		$request = 'DELETE FROM community_invoices WHERE fk_invoice='.$id ;
		$query = $db->query(Database::DELETE,$request);

		$request = 'DELETE FROM invoices WHERE id='.$id ;
		$query = $db->query(Database::DELETE,$request);
		unset($db);
		return true;

	}
	return false;

}

public function update()
{	

	$id =  Request::current()->post('id');
	$date =  Request::current()->post('date');
	$amount =  Request::current()->post('amount');
	$description =  Request::current()->post('description');
	$community =  Request::current()->post('community');
	$reduction =  Request::current()->post('reduction');
	if(!is_null($id) && !is_null($date) && !is_null($amount) && !is_null($description))
	{
		$db = Database::instance();
		$request = 'UPDATE FROM categories SET date=\''.$date.'\',amount='.$amount.',desciption\''.$description.'\' WHERE id='.$id;
		$query = $db->query(Database::UPDATE,$request);
		if(!is_null($community))
			{
				$request = 'UPDATE FROM community_invoices SET reduction='.$reduction.' WHERE fk_community='.$community.',fk_invoice='.$query[0];
				$query = $db->query(Database::INSERT,$request);
				$subRequest = 'SELECT u.username,u.id FROM users u LEFT JOIN community_members cm ON cm.fk_user=u.id WHERE cm.fk_community='.$community;
				$subQuery = $db->query(Database::SELECT,$subRequest);
				foreach($subQuery as $m)
				{
					$r = 'DELETE FROM community_invoice_beneficiaries cib LEFT JOIN community_invoices ci ON cib.fk_community_invoice=ci.id WHERE ci.fk_invoice='.$id ;
					$q = $db->query(Database::DELETE,$r);
					if(!is_null(Request::current()->post($m['username'])))
						{
							$r = 'INSERT INTO community_invoice_beneficiaries (fk_community_invoice,fk_user) VALUES('.$community.','.$query[0].')';
							$q = $db->query(Database::INSERT,$r);
						} 
				}

			}

		unset($db);
		return true;

	}
	return false;

}

public function getInvoices()
{
	$userID =  Auth::instance()->get_user()->id;
	$db = Database::instance();
	$begin =  Request::current()->post('begin');
	$end =  Request::current()->post('end');
	$category =  Request::current()->post('category');
	$categoryName =  Request::current()->post('categoryName');
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$day =  Request::current()->post('day');

	$request = 'SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1';
	if(!is_null($begin))
		$request.= ' AND  i.date>='.$begin;
	if(!is_null($end))
		$request.= ' AND i.date<='.$end;
	if(!is_null($category))
		$request.= ' AND i.fk_category='.$category;
	if(!is_null($year))
		$request.= ' AND Year(i.date)='.$year;
	if(!is_null($month))
		$request.= ' AND Month(i.date)='.$month;
	if(!is_null($day))
		$request.= ' AND Day(i.date)='.$day;
	if(!is_null($categoryName))
		$request.= ' AND c.label=\''.$categoryName.'\'';
	$request.= ' AND i.fk_user='.$userID;



	$query = $db->query(Database::SELECT,$request);
	$res = array();
	foreach($query as $m)
	{
		$res[] = $m;
	}
	unset($db);
	return json_encode($res);

}

public function getInvoicesOrderByCategory()
{
	$userID =  Auth::instance()->get_user()->id;
	$db = Database::instance();
	$begin =  Request::current()->post('begin');
	$end =  Request::current()->post('end');
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$day =  Request::current()->post('day');

	$request = 'SELECT c.label, SUM(i.amount) as amount FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1';
	if(!is_null($begin))
		$request.= ' AND  i.date>='.$begin;
	if(!is_null($end))
		$request.= ' AND i.date<='.$end;
	if(!is_null($year))
		$request.= ' AND Year(i.date)='.$year;
	if(!is_null($month))
		$request.= ' AND Month(i.date)='.$month;
	if(!is_null($day))
		$request.= ' AND Day(i.date)='.$day;
	$request.= ' AND i.fk_user='.$userID;

	$request.= ' GROUP BY c.label';
	$query = $db->query(Database::SELECT,$request);
	$res = array();
	foreach($query as $m)
	{
		$res[] = $m;
	}
	unset($db);
	return json_encode($res);

}


public function getInvoicesOrderByDate()
{
	$userID =  Auth::instance()->get_user()->id;
	$db = Database::instance();
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$category =  Request::current()->post('category');
	$categoryName =  Request::current()->post('categoryName');





	$request = null;
	if(is_null($year))
	{
		$request = 'SELECT Year(i.date) as label, SUM(i.amount) as amount FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category  WHERE 1 ';

		$endRequest =' GROUP BY Year(i.date)';

	}

	else if(is_null($month))
	{
		$request = 'SELECT Month(i.date) as label, SUM(i.amount) as amount FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = '.$year ;

		$endRequest =' GROUP BY Month(i.date)';
	}	


	else
	{
		$request = 'SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = '.$year.' AND Month(i.date) = '.$month;

		$endRequest =' GROUP BY Day(i.date)';
	}

	$request.= ' AND i.fk_user='.$userID;
	
	if(!is_null($category))
		$request .= ' AND i.fk_category='.$category;
	if(!is_null($categoryName))
		$request.= ' AND c.label=\''.$categoryName.'\'';
	



	if(!is_null($request))
	{
		$request.=$endRequest;
		$query = $db->query(Database::SELECT,$request);
	}
		
	$res = array();
	foreach($query as $m)
	{
		$res[] = $m;
	}
	unset($db);
	return json_encode($res);

}






} 