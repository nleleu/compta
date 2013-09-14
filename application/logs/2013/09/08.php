<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-08 06:12:25 --- CRITICAL: View_Exception [ 0 ]: The requested view menu could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\compta\system\classes\Kohana\View.php:137
2013-09-08 06:12:25 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\View.php(137): Kohana_View->set_filename('menu')
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(30): Kohana_View->__construct('menu', NULL)
#2 C:\wamp\www\compta\application\views\index.php(170): Kohana_View::factory('menu')
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#4 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#5 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\wamp\www\compta\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#8 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\compta\system\classes\Kohana\View.php:137
2013-09-08 06:13:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\createInvoice.php [ 76 ] in C:\wamp\www\compta\application\views\createInvoice.php:76
2013-09-08 06:13:05 --- DEBUG: #0 C:\wamp\www\compta\application\views\createInvoice.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 76, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(147): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createInvoice.php:76
2013-09-08 06:14:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\createInvoice.php [ 76 ] in C:\wamp\www\compta\application\views\createInvoice.php:76
2013-09-08 06:14:04 --- DEBUG: #0 C:\wamp\www\compta\application\views\createInvoice.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 76, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(147): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createInvoice.php:76
2013-09-08 06:22:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\createInvoice.php [ 39 ] in :
2013-09-08 06:22:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-08 06:27:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: current ~ APPPATH\views\menu.php [ 3 ] in C:\wamp\www\compta\application\views\menu.php:3
2013-09-08 06:27:32 --- DEBUG: #0 C:\wamp\www\compta\application\views\menu.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 3, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\application\views\createInvoice.php(101): Kohana_View->__toString()
#5 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#6 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#7 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\compta\application\classes\Controller\Welcome.php(148): Kohana_Response->body(Object(View))
#10 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_invoice()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#13 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\compta\application\views\menu.php:3
2013-09-08 06:43:42 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\views\createInvoice.php [ 101 ] in :
2013-09-08 06:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-08 06:44:57 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\views\index.php [ 170 ] in :
2013-09-08 06:44:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :