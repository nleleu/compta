
<?php defined('SYSPATH') or die('No direct script access.');



class Model_CommunityInvoice extends Model {



	private function getMax($obj)
	{
		$res;
		$max;
		foreach($obj as $cle=>$valeur)
		{
			if(!isset($min) || $valeur>$max)
			{
				$res=$cle;
				$max=$valeur;
			}

		}
		return $res;
	}


	private function getMin($obj)
	{
		$res;
		$min;
		foreach($obj as $cle=>$valeur)
		{
			if(!isset($min) || $valeur<$min)
			{
				$res=$cle;
				$min=$valeur;
			}

		}
		return $res;
	}


	public function getBilan()
	{
		$results = new stdClass();
		$bilanPos = new stdClass();
		$bilanNeg = new stdClass();

		$results->currentUser = Auth::instance()->get_user()->username;

		$db = Database::instance();
		$begin =  Request::current()->post('begin');
		$communityId =  Request::current()->post('communityId');
		$end =  Request::current()->post('end');
		$category =  Request::current()->post('category');
		$categoryName =  Request::current()->post('categoryName');
		$year =  Request::current()->post('year');
		$month =  Request::current()->post('month');
		$day =  Request::current()->post('day');



		

		$s = 'SELECT distinct(fk_community),c.id,c.label FROM community_members cm LEFT JOIN communities c ON cm.fk_community=c.id WHERE cm.fk_user='.Auth::instance()->get_user()->id;
		if(!is_null($communityId))
			$s.= ' AND  c.id='.$communityId;

		$r = $db->query(Database::SELECT,$s);
		foreach($r as $comm)
		{
			$communityId = $comm['id'];

			$results->$comm['label'] = new stdClass();

			$results->$comm['label']->bilanDetails = new stdClass();
			$results->$comm['label']->bilan = new stdClass();


			$subRequest = 'SELECT u.username,u.id FROM community_members cm LEFT JOIN users u ON cm.fk_user=u.id WHERE cm.fk_community='.$communityId;
			$subQuery = $db->query(Database::SELECT,$subRequest);
			foreach($subQuery as $u)
			{
				$request = 'SELECT ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,p.username as payer,r.nb ,b.username as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users p ON i.fk_user=p.id  LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_community_invoice LEFT JOIN users b ON cib.fk_user=b.id LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice WHERE 1';
				$request.= ' AND  com.id='.$communityId;
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
				$request.= ' AND (i.fk_user='.$u['id'].' OR cib.fk_user='.$u['id'].')';


				$tab = new stdClass();
				$query = $db->query(Database::SELECT,$request);
				$res = array();
				foreach($query as $m)
				{
		//Aparemment on se tape de l'initialisation de l'obj tab
					if($m['nb']>0)
					{
						if($m['beneficiary']==$u['username']  &&  $m['payer']!=$u['username'] )
						{
							$tab->$m['payer']-=round(($m['amount']-$m['reduction'])/$m['nb'],2);
						}
						else if($m['payer']==$u['username'] && $m['beneficiary']!=$u['username'])
						{

							$tab->$m['beneficiary']+=round(($m['amount']-$m['reduction'])/$m['nb'],2);
						}

					}
					
				}

				$bilan = 0;

				foreach($tab as $cle=>$valeur)
				{
					$bilan+=round($valeur,2);

				}

				if($bilan>0)
					$bilanPos->$u['username'] = $bilan;
				else if($bilan<0)
					$bilanNeg->$u['username'] = $bilan;


				$results->$comm['label']->bilan->$u['username'] = $bilan ;
				$results->$comm['label']->bilanDetails->$u['username'] = $tab ;




			}

			$x = (array)$bilanPos;
			$y = (array)$bilanNeg;


$results->$comm['label']->solve = new ArrayObject();
while(!empty($x) && !empty($y)) //http://stackoverflow.com/questions/1389431/how-to-check-if-object-is-empty-in-php
{

	$min = Model_CommunityInvoice::getMin($bilanNeg);
	$max = Model_CommunityInvoice::getMax($bilanPos);
	$adjust=round(abs($bilanNeg->$min)-abs($bilanPos->$max),2);
	if($adjust<0)
		$adjust =   abs($bilanNeg->$min);
	else
		$adjust =  round(abs($bilanPos->$max),2) ;
	$tmp  = new stdClass();
	$tmp->from = $min;
	$tmp->to = $max;
	$tmp->amount = $adjust;
	$results->$comm['label']->solve->append( $tmp);	
	if($bilanNeg->$min+$adjust==0)
	{
		unset($bilanNeg->$min);
	}
	else
		$bilanNeg->$min = round($bilanNeg->$min+$adjust,2);

	if(round($bilanPos->$max-$adjust,2)==0)
		unset($bilanPos->$max);
	else
		$bilanPos->$max = round($bilanPos->$max-$adjust,2);

	$x = (array)$bilanPos;
	$y = (array)$bilanNeg;
}
}

unset($db);
return json_encode($results);








}

public function getCommunityInvoices()
{
	$username =  Request::current()->post('username');
	$db = Database::instance();
	$begin =  Request::current()->post('begin');
	$communityId =  Request::current()->post('communityId');
	$end =  Request::current()->post('end');
	$category =  Request::current()->post('category');
	$categoryName =  Request::current()->post('categoryName');
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$day =  Request::current()->post('day');

	$request = 'SELECT c.label,i.id, i.amount,i.date,i.description,u.username as payer,ci.id as community_invoice_id FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1';
	if(!is_null($communityId))
		$request.= ' AND  com.id='.$communityId;
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
	if(!is_null($username))
		$request.= ' AND u.username=\''.$username.'\'';



	$query = $db->query(Database::SELECT,$request);
	$res = array();
	foreach($query as $m)
	{

		$benef = array();
		$rbenef = 'SELECT u.username FROM community_invoice_beneficiaries cib LEFT JOIN users u ON cib.fk_user=u.id WHERE cib.fk_community_invoice='.$m['community_invoice_id'];
		$qbenef = $db->query(Database::SELECT,$rbenef);
		foreach($qbenef as $b)
		{

			$benef[] = $b['username'];

		}
		$m['beneficiaries'] = $benef;
		$res[] = $m;
	}
	unset($db);
	return json_encode($res);

}

public function getCommunityInvoicesOrderByCategory()
{
	$db = Database::instance();
	$username =  Request::current()->post('username');
	$communityId =  Request::current()->post('communityId');
	$begin =  Request::current()->post('begin');
	$end =  Request::current()->post('end');
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$day =  Request::current()->post('day');

	$request = 'SELECT c.label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1';
	if(!is_null($communityId))
		$request.= ' AND  com.id='.$communityId;
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
	if(!is_null($username))
		$request.= ' AND u.username=\''.$username.'\'';

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



public function getCommunityInvoicesOrderByMembers()
{
	$db = Database::instance();
	$communityId =  Request::current()->post('communityId');
	$begin =  Request::current()->post('begin');
	$end =  Request::current()->post('end');
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$day =  Request::current()->post('day');
	$categoryName =  Request::current()->post('categoryName');

	$request = 'SELECT u.username as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1';
	if(!is_null($communityId))
		$request.= ' AND  com.id='.$communityId;
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
	if(!is_null($categoryName))
		$request.= ' AND c.label=\''.$categoryName.'\'';
	

	$request.= ' GROUP BY u.username';
	$query = $db->query(Database::SELECT,$request);
	$res = array();
	foreach($query as $m)
	{
		$res[] = $m;
	}
	unset($db);
	return json_encode($res);

}

public function getCommunityInvoicesOrderByDate()
{
	$username =  Request::current()->post('username');
	$communityId =  Request::current()->post('communityId');
	$db = Database::instance();
	$year =  Request::current()->post('year');
	$month =  Request::current()->post('month');
	$category =  Request::current()->post('category');
	$categoryName =  Request::current()->post('categoryName');





	$request = null;
	if(is_null($year))
	{
		$request = 'SELECT Year(i.date) as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id   LEFT JOIN users u ON i.fk_user=u.id WHERE 1 ';

		$endRequest =' GROUP BY Year(i.date)';

	}

	else if(is_null($month))
	{
		$request = 'SELECT Month(i.date) as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id  LEFT JOIN users u ON i.fk_user=u.id WHERE Year(i.date) = '.$year ;

		$endRequest =' GROUP BY Month(i.date)';
	}	


	else
	{
		$request = 'SELECT Day(i.date) as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id  LEFT JOIN users u ON i.fk_user=u.id WHERE Year(i.date) = '.$year.' AND Month(i.date) = '.$month;

		$endRequest =' GROUP BY Day(i.date)';
	}

	
	if(!is_null($communityId))
		$request.= ' AND  com.id='.$communityId;
	if(!is_null($category))
		$request .= ' AND i.fk_category='.$category;
	if(!is_null($categoryName))
		$request.= ' AND c.label=\''.$categoryName.'\'';
	if(!is_null($username))
		$request.= ' AND u.username=\''.$username.'\'';


	



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