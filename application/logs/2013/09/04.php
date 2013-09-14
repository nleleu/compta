<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-04 08:40:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND i.fk_category=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:149
2013-09-04 08:40:40 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(149): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:149
2013-09-04 08:40:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND i.fk_category ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:85
2013-09-04 08:40:40 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(85): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:85
2013-09-04 08:44:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND i.fk_category=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:149
2013-09-04 08:44:45 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(149): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:149
2013-09-04 08:44:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND i.fk_category ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:85
2013-09-04 08:44:45 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(85): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:85
2013-09-04 08:58:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND i.fk_category=Déplacements AND Year(i.date)=2013 AND Month(i.date)=9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:88
2013-09-04 08:58:23 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(88): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:88
2013-09-04 08:58:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND i.fk_category=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:157
2013-09-04 08:58:23 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(157): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:157
2013-09-04 08:59:00 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?placements AND Year(i.date)=2013 AND Month(i.date)=9' at line 1 [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND i.fk_category=D�placements AND Year(i.date)=2013 AND Month(i.date)=9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:88
2013-09-04 08:59:00 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(88): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:88
2013-09-04 08:59:17 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?placements AND Year(i.date)=2013 AND Month(i.date)=9' at line 1 [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND i.fk_category=D�placements AND Year(i.date)=2013 AND Month(i.date)=9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:88
2013-09-04 08:59:17 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(88): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:88
2013-09-04 09:01:04 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?placements AND Year(i.date)=2013 AND Month(i.date)=9' at line 1 [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND i.fk_category=D�placements AND Year(i.date)=2013 AND Month(i.date)=9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:01:04 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:02:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:02:02 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:02:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:02:02 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:03:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:03:46 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:03:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:03:46 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:04:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?placements' at line 1 [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=D�placements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:04:13 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:04:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Nourriture' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND c.label=Nourriture ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:04:32 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:04:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Nourriture' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Nourriture ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:04:32 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:05:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Nourriture' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Nourriture ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:05:48 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:06:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:06:07 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:06:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:06:07 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:06:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?placements' at line 1 [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=D�placements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:06:12 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:09:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:09:19 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:09:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:09:20 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:09:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:09:27 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:09:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Déplacements' in 'group statement' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date) AND c.label=Déplacements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:09:27 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:09:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '?placements' at line 1 [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=D�placements ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:09:32 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:13:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Nourriture' in 'where clause' [ SELECT c.label,i.id, i.amount,i.date,i.description FROM invoices i LEFT JOIN categories c ON c.id=i.fk_category WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 AND c.label=Nourriture ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:13:05 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(90): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(25): Model_Invoice->getInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test3()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:90
2013-09-04 09:13:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:13:48 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:16:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:16:19 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:16:27 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:16:27 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:20:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:20:14 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:20:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:20:19 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:21:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:21:20 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:24:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:24:31 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:24:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:24:39 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:26:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:26:12 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:26:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:26:19 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:29:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:29:12 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:29:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:29:16 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:39:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:39:15 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:39:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:39:21 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:40:03 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:40:03 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:40:41 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:40:41 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:40:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:40:48 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(161): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:161
2013-09-04 09:41:45 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:41:45 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:42:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9  GROUP BY Day(i.date)0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 09:42:44 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(162): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(19): Model_Invoice->getInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test2()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:162
2013-09-04 10:05:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$endRequest' (T_VARIABLE) ~ APPPATH\classes\Model\Invoice.php [ 152 ] in :
2013-09-04 10:05:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-04 10:05:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$endRequest' (T_VARIABLE) ~ APPPATH\classes\Model\Invoice.php [ 152 ] in :
2013-09-04 10:05:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-04 10:05:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$endRequest' (T_VARIABLE) ~ APPPATH\classes\Model\Invoice.php [ 152 ] in :
2013-09-04 10:05:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-04 10:05:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$endRequest' (T_VARIABLE) ~ APPPATH\classes\Model\Invoice.php [ 152 ] in :
2013-09-04 10:05:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-04 10:06:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$endRequest' (T_VARIABLE) ~ APPPATH\classes\Model\Invoice.php [ 152 ] in :
2013-09-04 10:06:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :