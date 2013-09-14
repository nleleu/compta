<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-14 08:24:11 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.payer' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description,u.username as payer,ci.id as community_invoice_id FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND  com.id=1 AND Year(i.date)=2013 AND Month(i.date)=9 AND u.payer='Nicolas' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:229
2013-09-14 08:24:11 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(229): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(71): Model_CommunityInvoice->getCommunityInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test4()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:229
2013-09-14 08:24:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.payer' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description,u.username as payer,ci.id as community_invoice_id FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND  com.id=1 AND Year(i.date)=2013 AND Month(i.date)=9 AND u.payer='Nicolas' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:229
2013-09-14 08:24:18 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(229): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(71): Model_CommunityInvoice->getCommunityInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test4()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:229
2013-09-14 08:24:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'payer' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description,u.username as payer,ci.id as community_invoice_id FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND  com.id=1 AND Year(i.date)=2013 AND Month(i.date)=9 AND payer='Nicolas' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:229
2013-09-14 08:24:41 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(229): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(71): Model_CommunityInvoice->getCommunityInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test4()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:229
2013-09-14 08:27:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.username' in 'where clause' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id  WHERE Year(i.date) = 2013 AND Month(i.date) = 9 AND  com.id=1 AND u.username='titi' GROUP BY Day(i.date) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:388
2013-09-14 08:27:25 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(388): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(79): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:388