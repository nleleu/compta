<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-31 11:42:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Datal' not found ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in :
2013-08-31 11:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-31 11:42:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Model\Data.php [ 14 ] in C:\wamp\www\compta\application\classes\Model\Data.php:14
2013-08-31 11:42:53 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Data.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 14, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(13): Model_Data->getEvents()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Data.php:14
2013-08-31 11:43:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Model\Data.php [ 14 ] in C:\wamp\www\compta\application\classes\Model\Data.php:14
2013-08-31 11:43:01 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Data.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 14, Array)
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(13): Model_Data->getEvents()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Data.php:14