<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-07 05:01:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\createInvoice.php [ 109 ] in C:\wamp\www\compta\application\views\createInvoice.php:109
2013-09-07 05:01:39 --- DEBUG: #0 C:\wamp\www\compta\application\views\createInvoice.php(109): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 109, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(106): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createInvoice.php:109
2013-09-07 05:07:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$userID' (T_VARIABLE) ~ APPPATH\classes\Model\Category.php [ 64 ] in :
2013-09-07 05:07:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-07 05:07:28 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\createInvoice.php [ 109 ] in C:\wamp\www\compta\application\views\createInvoice.php:109
2013-09-07 05:07:28 --- DEBUG: #0 C:\wamp\www\compta\application\views\createInvoice.php(109): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\com...', 109, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(108): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createInvoice.php:109
2013-09-07 05:08:15 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\createInvoice.php [ 109 ] in C:\wamp\www\compta\application\views\createInvoice.php:109
2013-09-07 05:08:15 --- DEBUG: #0 C:\wamp\www\compta\application\views\createInvoice.php(109): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\com...', 109, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(108): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createInvoice.php:109
2013-09-07 06:12:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Welcome.php [ 106 ] in :
2013-09-07 06:12:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-07 06:12:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Welcome.php [ 106 ] in :
2013-09-07 06:12:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-07 09:53:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'cm ON cm.fk_users=u.id  WHERE cm.fk_community=function ( value ) {
		var hooks, ' at line 1 [ SELECT u.id, u.username FROM community_members cm LEFT JOIN users u cm ON cm.fk_users=u.id  WHERE cm.fk_community=function ( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:53:37 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Community.php(85): Kohana_Database_MySQL->query(1, 'SELECT u.id, u....')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(104): Model_Community->getMembers()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_getCommunityMembers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:53:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'cm ON cm.fk_users=u.id  WHERE cm.fk_community=function ( value ) {
		var hooks, ' at line 1 [ SELECT u.id, u.username FROM community_members cm LEFT JOIN users u cm ON cm.fk_users=u.id  WHERE cm.fk_community=function ( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:53:42 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Community.php(85): Kohana_Database_MySQL->query(1, 'SELECT u.id, u....')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(104): Model_Community->getMembers()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_getCommunityMembers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:54:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.' at line 1 [ SELECT u.id, u.username FROM community_members cm LEFT JOIN users u  ON cm.fk_users=u.id  WHERE cm.fk_community=function ( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:54:11 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Community.php(85): Kohana_Database_MySQL->query(1, 'SELECT u.id, u....')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(104): Model_Community->getMembers()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_getCommunityMembers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:54:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.' at line 1 [ SELECT u.id, u.username FROM community_members cm LEFT JOIN users u  ON cm.fk_user=u.id  WHERE cm.fk_community=function ( value ) {
		var hooks, ret, isFunction,
			elem = this[0];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 09:54:51 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Community.php(85): Kohana_Database_MySQL->query(1, 'SELECT u.id, u....')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(104): Model_Community->getMembers()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_getCommunityMembers()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Community.php:85
2013-09-07 10:24:17 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO Invoices (date,amount,description,fk_category,fk_user) VALUES('11/09/2013',40,'test',3,2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:21
2013-09-07 10:24:17 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(21): Kohana_Database_MySQL->query(2, 'INSERT INTO Inv...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:21
2013-09-07 10:25:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ INSERT INTO community_invoices (fk_community,fk_invoice,reduction) VALUES(1,3,) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:26
2013-09-07 10:25:09 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(26): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:26
2013-09-07 10:36:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\Invoice.php [ 12 ] in :
2013-09-07 10:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-07 10:40:45 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ INSERT INTO community_invoices (fk_community,fk_invoice,reduction) VALUES(1,4,) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:37
2013-09-07 10:40:45 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(37): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:37
2013-09-07 10:41:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ INSERT INTO community_invoices (fk_community,fk_invoice,reduction) VALUES(1,5,) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:37
2013-09-07 10:41:24 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(37): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:37
2013-09-07 10:42:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ INSERT INTO community_invoices (fk_community,fk_invoice,reduction) VALUES(1,6,) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:37
2013-09-07 10:42:11 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(37): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:37
2013-09-07 10:42:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1-3' for key 'PRIMARY' [ INSERT INTO community_invoice_beneficiaries (fk_community_invoice,fk_user) VALUES(1,3) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:47
2013-09-07 10:42:53 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(47): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:47
2013-09-07 10:43:27 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1-4' for key 'PRIMARY' [ INSERT INTO community_invoice_beneficiaries (fk_community_invoice,fk_user) VALUES(1,4) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Invoice.php:47
2013-09-07 10:43:27 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Invoice.php(47): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(118): Model_Invoice->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Invoice.php:47
2013-09-07 10:50:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\Invoice.php [ 46 ] in :
2013-09-07 10:50:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-07 11:25:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Welcome.php [ 123 ] in :
2013-09-07 11:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-07 11:32:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 127 ] in :
2013-09-07 11:32:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :