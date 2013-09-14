<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-06 07:36:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'ci.fk_invoice' in 'on clause' [ SELECT c.label, SUM(i.amount) FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 GROUP BY c.label ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:86
2013-09-06 07:36:14 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(86): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(73): Model_CommunityInvoice->getCommunityInvoicesOrderByCategory()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test6()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:86
2013-09-06 07:36:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ APPPATH\classes\Model\CommunityInvoice.php [ 174 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:36:16 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(174): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 174, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(65): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:36:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'ci.fk_invoice' in 'on clause' [ SELECT c.label,i.id, i.amount,i.date,i.description,com.label FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:47
2013-09-06 07:36:17 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(47): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(57): Model_CommunityInvoice->getCommunityInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test4()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:47
2013-09-06 07:36:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'ci.fk_invoice' in 'on clause' [ SELECT u.username as label, SUM(i.amount) FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 GROUP BY u.username ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:125
2013-09-06 07:36:18 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(125): Kohana_Database_MySQL->query(1, 'SELECT u.userna...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(81): Model_CommunityInvoice->getCommunityInvoicesOrderByMembers()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test7()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:125
2013-09-06 07:36:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'ci.fk_invoice' in 'on clause' [ SELECT c.label,i.id, i.amount,i.date,i.description,com.label FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id WHERE 1 AND Year(i.date)=2013 AND Month(i.date)=9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:47
2013-09-06 07:36:38 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(47): Kohana_Database_MySQL->query(1, 'SELECT c.label,...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(57): Model_CommunityInvoice->getCommunityInvoices()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test4()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:47
2013-09-06 07:40:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ APPPATH\classes\Model\CommunityInvoice.php [ 174 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:40:04 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(174): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 174, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(65): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:40:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ APPPATH\classes\Model\CommunityInvoice.php [ 174 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:40:18 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(174): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 174, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(65): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:40:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userID ~ APPPATH\classes\Model\CommunityInvoice.php [ 174 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 07:40:30 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(174): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 174, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(65): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:174
2013-09-06 08:38:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: community ~ APPPATH\classes\Model\CommunityInvoice.php [ 59 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:59
2013-09-06 08:38:19 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 59, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:59
2013-09-06 08:40:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: community ~ APPPATH\classes\Model\CommunityInvoice.php [ 65 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:65
2013-09-06 08:40:08 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 65, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:65
2013-09-06 08:40:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: community ~ APPPATH\classes\Model\CommunityInvoice.php [ 65 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:65
2013-09-06 08:40:20 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 65, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:65
2013-09-06 08:40:24 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'fk_community_invoice' in 'field list' [ SELECT u.username,ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,i.fk_user,r.nb as payer,cib.fk_user as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_commmunity_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:40:24 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT u.userna...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:43:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'fk_community_invoice' in 'field list' [ SELECT u.username,ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,i.fk_user as payer,r.nb ,cib.fk_user as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_commmunity_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:43:55 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT u.userna...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:45:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'fk_community_invoice' in 'field list' [ SELECT u.username,ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,i.fk_user as payer,r.nb ,cib.fk_user as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users u ON i.fk_user=u.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_community_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:45:19 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT u.userna...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:50:44 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Model\CommunityInvoice.php [ 113 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:113
2013-09-06 08:50:44 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(113): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\com...', 113, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:113
2013-09-06 08:53:12 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\Model\CommunityInvoice.php [ 122 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:122
2013-09-06 08:53:12 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(122): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\com...', 122, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:122
2013-09-06 08:57:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'payer.username' in 'field list' [ SELECT ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,payer.username as payer,r.nb ,payer.beneficiary as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users payers ON i.fk_user=u.id  LEFT JOIN users beneficiary ON cib.fk_user=u.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_community_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice WHERE 1 AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:57:59 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT ci.reduc...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:58:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'b.beneficiary' in 'field list' [ SELECT ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,p.username as payer,r.nb ,b.beneficiary as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users p ON i.fk_user=u.id  LEFT JOIN users b ON cib.fk_user=u.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_community_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice WHERE 1 AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:58:34 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT ci.reduc...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:58:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.id' in 'on clause' [ SELECT ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,p.username as payer,r.nb ,b.username as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users p ON i.fk_user=u.id  LEFT JOIN users b ON cib.fk_user=u.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_community_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice WHERE 1 AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:58:57 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT ci.reduc...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:59:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'cib.fk_user' in 'on clause' [ SELECT ci.reduction,c.label,i.id, i.amount,i.date,i.description,com.label,p.username as payer,r.nb ,b.username as beneficiary  FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id  LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id LEFT JOIN users p ON i.fk_user=p.id  LEFT JOIN users b ON cib.fk_user=b.id LEFT JOIN community_invoice_beneficiaries cib ON ci.id=cib.fk_community_invoice LEFT JOIN (select count(*) as nb,fk_community_invoice from community_invoice_beneficiaries group by fk_community_invoice) r ON ci.id=r.fk_community_invoice WHERE 1 AND  com.id=1 AND (i.fk_user=2 OR cib.fk_user=2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 08:59:49 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(89): Kohana_Database_MySQL->query(1, 'SELECT ci.reduc...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:89
2013-09-06 09:01:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Model\CommunityInvoice.php [ 94 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:94
2013-09-06 09:01:39 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(94): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\com...', 94, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:94
2013-09-06 09:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Model\CommunityInvoice.php [ 95 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:95
2013-09-06 09:02:24 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(95): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\com...', 95, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(32): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:95
2013-09-06 09:20:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getMin() ~ APPPATH\classes\Model\CommunityInvoice.php [ 145 ] in :
2013-09-06 09:20:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 09:21:08 --- CRITICAL: ErrorException [ 1 ]: Class 'this' not found ~ APPPATH\classes\Model\CommunityInvoice.php [ 145 ] in :
2013-09-06 09:21:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 10:00:59 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant communities - assumed 'communities' ~ APPPATH\views\community.php [ 200 ] in C:\wamp\www\compta\application\views\community.php:200
2013-09-06 10:00:59 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(200): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\com...', 200, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:200
2013-09-06 10:01:10 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\community.php [ 201 ] in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:01:10 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(201): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\com...', 201, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:01:37 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant length - assumed 'length' ~ APPPATH\views\community.php [ 201 ] in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:01:37 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(201): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\com...', 201, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:05:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH\views\community.php [ 201 ] in :
2013-09-06 10:05:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 10:05:43 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\community.php [ 201 ] in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:05:43 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(201): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\com...', 201, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:08:24 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\community.php [ 201 ] in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:08:24 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(201): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\com...', 201, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:09:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\community.php [ 201 ] in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:09:20 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(201): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\com...', 201, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:201
2013-09-06 10:10:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\views\community.php [ 203 ] in :
2013-09-06 10:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 10:11:07 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\views\community.php [ 202 ] in :
2013-09-06 10:11:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 10:11:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''id'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\views\community.php [ 202 ] in :
2013-09-06 10:11:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 10:12:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$login ~ APPPATH\views\community.php [ 202 ] in C:\wamp\www\compta\application\views\community.php:202
2013-09-06 10:12:09 --- DEBUG: #0 C:\wamp\www\compta\application\views\community.php(202): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\com...', 202, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(20): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_com()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\community.php:202
2013-09-06 10:14:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'com.id' in 'where clause' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9 AND  com.id=1 GROUP BY Day(i.date) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:362
2013-09-06 10:14:37 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(362): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(76): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:362
2013-09-06 10:15:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'com.id' in 'where clause' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9 AND  com.id=1 GROUP BY Day(i.date) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:362
2013-09-06 10:15:15 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(362): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(76): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:362
2013-09-06 10:15:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'com.id' in 'where clause' [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM invoices i  LEFT JOIN categories c ON c.id=i.fk_category WHERE Year(i.date) = 2013 AND Month(i.date) = 9 AND  com.id=1 GROUP BY Day(i.date) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:362
2013-09-06 10:15:37 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(362): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(76): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:362
2013-09-06 10:19:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'invoices i LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities co' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id invoices i LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id  WHERE Year(i.date) = 2013 AND Month(i.date) = 9 AND  com.id=1 GROUP BY Day(i.date) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:361
2013-09-06 10:19:31 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(361): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(76): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:361
2013-09-06 10:19:38 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'invoices i LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities co' at line 1 [ SELECT Day(i.date) as label, SUM(i.amount) as amount FROM community_invoices ci LEFT JOIN invoices i  ON ci.fk_invoice=i.id invoices i LEFT JOIN categories c ON c.id=i.fk_category LEFT JOIN communities com ON ci.fk_community=com.id  WHERE Year(i.date) = 2013 AND Month(i.date) = 9 AND  com.id=1 GROUP BY Day(i.date) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:361
2013-09-06 10:19:38 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(361): Kohana_Database_MySQL->query(1, 'SELECT Day(i.da...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(76): Model_CommunityInvoice->getCommunityInvoicesOrderByDate()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test5()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:361
2013-09-06 11:21:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\createInvoice.php [ 25 ] in C:\wamp\www\compta\application\views\createInvoice.php:25
2013-09-06 11:21:10 --- DEBUG: #0 C:\wamp\www\compta\application\views\createInvoice.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 25, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(103): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createInvoice.php:25
2013-09-06 11:24:34 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\compta\system\classes\Kohana\Session.php:125
2013-09-06 11:24:34 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\compta\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\compta\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\wamp\www\compta\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\wamp\www\compta\application\classes\Controller\Welcome.php(101): Kohana_Auth::instance()
#5 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\compta\system\classes\Kohana\Session.php:125
2013-09-06 11:24:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 76 ] in :
2013-09-06 11:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 11:26:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'u.username' in 'field list' [ SELECT u.username from users ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Userc.php:22
2013-09-06 11:26:30 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Userc.php(22): Kohana_Database_MySQL->query(1, 'SELECT u.userna...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(105): Model_Userc->getUsers()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Userc.php:22
2013-09-06 11:41:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting variable (T_VARIABLE) or '$' ~ APPPATH\views\createInvoice.php [ 26 ] in :
2013-09-06 11:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 13:09:48 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:09:48 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\com...', 160, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Kohana_Response->body(Array)
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:12:58 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:12:58 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\com...', 160, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Kohana_Response->body(Array)
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:15:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:15:06 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\com...', 160, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Kohana_Response->body(Array)
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:15:59 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:15:59 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\com...', 160, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Kohana_Response->body(Array)
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\system\classes\Kohana\Response.php:160
2013-09-06 13:17:04 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Model\CommunityInvoice.php [ 123 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:123
2013-09-06 13:17:04 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(123): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\wamp\www\com...', 123, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:123
2013-09-06 14:09:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\CommunityInvoice.php [ 193 ] in :
2013-09-06 14:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-06 14:10:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Nicolas' in 'where clause' [ SELECT distinct(fk_community),c.id,c.label FROM community_members cm LEFT JOIN communities c ON cm.fk_community=c.id WHERE cm.fk_user=Nicolas ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:71
2013-09-06 14:10:29 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(71): Kohana_Database_MySQL->query(1, 'SELECT distinct...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:71
2013-09-06 14:11:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'com.id' in 'where clause' [ SELECT distinct(fk_community),c.id,c.label FROM community_members cm LEFT JOIN communities c ON cm.fk_community=c.id WHERE cm.fk_user=2 AND  com.id=1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:71
2013-09-06 14:11:34 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php(71): Kohana_Database_MySQL->query(1, 'SELECT distinct...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(38): Model_CommunityInvoice->getBilan()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_bilan()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\CommunityInvoice.php:71