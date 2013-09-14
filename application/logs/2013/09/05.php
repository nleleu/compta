<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-05 05:46:13 --- CRITICAL: Kohana_Exception [ 0 ]: The login property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php:699
2013-09-05 05:46:13 --- DEBUG: #0 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('login', 'Nicolas')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(37): Kohana_ORM->__set('login', 'Nicolas')
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php:699
2013-09-05 05:47:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH\orm\classes\Model\Auth\User.php [ 59 ] in :
2013-09-05 05:47:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 05:48:15 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in :
2013-09-05 05:48:15 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('moi')
#1 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(1207): call_user_func_array(Array, Array)
#2 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(729): Kohana_ORM->run_filter('password', 'moi')
#3 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('password', 'moi')
#4 C:\wamp\www\compta\application\classes\Controller\Welcome.php(39): Kohana_ORM->__set('password', 'moi')
#5 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_auth()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-09-05 05:48:47 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\compta\system\classes\Kohana\Cookie.php:67
2013-09-05 05:48:47 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\compta\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 C:\wamp\www\compta\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\compta\system\classes\Kohana\Cookie.php:67
2013-09-05 05:50:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: remember ~ APPPATH\classes\Controller\Welcome.php [ 41 ] in C:\wamp\www\compta\application\classes\Controller\Welcome.php:41
2013-09-05 05:50:20 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Controller\Welcome.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 41, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\compta\application\classes\Controller\Welcome.php:41
2013-09-05 05:51:10 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php:1299
2013-09-05 05:51:10 --- DEBUG: #0 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\compta\application\classes\Controller\Welcome.php(40): Kohana_ORM->save()
#3 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php:1299
2013-09-05 06:30:42 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\modules\database\classes\Kohana\Database\Query.php:251
2013-09-05 06:30:42 --- DEBUG: #0 C:\wamp\www\compta\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\compta\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\compta\application\classes\Controller\Welcome.php(40): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\compta\modules\database\classes\Kohana\Database\Query.php:251
2013-09-05 07:23:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Welcome.php [ 43 ] in :
2013-09-05 07:23:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:24:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 57 ] in :
2013-09-05 07:24:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:25:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 57 ] in :
2013-09-05 07:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:25:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Welcome.php [ 62 ] in :
2013-09-05 07:25:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:26:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Welcome.php [ 76 ] in :
2013-09-05 07:26:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:34:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:34:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:35:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:39:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:39:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:39:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:39:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/', expecting ')' ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:39:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:45:10 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'INDEX_PAGE' ~ APPPATH\classes\Controller\Welcome.php [ 81 ] in :
2013-09-05 07:45:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:48:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Auth_ORM::$user ~ APPPATH\classes\Controller\Welcome.php [ 65 ] in C:\wamp\www\compta\application\classes\Controller\Welcome.php:65
2013-09-05 07:48:56 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Controller\Welcome.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\com...', 65, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\compta\application\classes\Controller\Welcome.php:65
2013-09-05 07:49:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Welcome.php [ 65 ] in :
2013-09-05 07:49:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-05 07:57:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Invoice::$c ~ APPPATH\classes\Controller\Welcome.php [ 13 ] in C:\wamp\www\compta\application\classes\Controller\Welcome.php:13
2013-09-05 07:57:59 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Controller\Welcome.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\com...', 13, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_c()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\compta\application\classes\Controller\Welcome.php:13
2013-09-05 12:04:01 --- CRITICAL: View_Exception [ 0 ]: The requested view createAccount could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\compta\system\classes\Kohana\View.php:137
2013-09-05 12:04:01 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\View.php(137): Kohana_View->set_filename('createAccount')
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(30): Kohana_View->__construct('createAccount', NULL)
#2 C:\wamp\www\compta\application\classes\Controller\Welcome.php(78): Kohana_View::factory('createAccount')
#3 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_createAccount()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\compta\system\classes\Kohana\View.php:137
2013-09-05 12:04:46 --- CRITICAL: View_Exception [ 0 ]: The requested view createAccount could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\compta\system\classes\Kohana\View.php:137
2013-09-05 12:04:46 --- DEBUG: #0 C:\wamp\www\compta\system\classes\Kohana\View.php(137): Kohana_View->set_filename('createAccount')
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(30): Kohana_View->__construct('createAccount', NULL)
#2 C:\wamp\www\compta\application\classes\Controller\Welcome.php(78): Kohana_View::factory('createAccount')
#3 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_createAccount()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\compta\system\classes\Kohana\View.php:137
2013-09-05 12:05:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\createAccount.php [ 25 ] in C:\wamp\www\compta\application\views\createAccount.php:25
2013-09-05 12:05:35 --- DEBUG: #0 C:\wamp\www\compta\application\views\createAccount.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\com...', 25, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\View.php(61): include('C:\wamp\www\com...')
#2 C:\wamp\www\compta\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\com...', Array)
#3 C:\wamp\www\compta\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\compta\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\compta\application\classes\Controller\Welcome.php(81): Kohana_Response->body(Object(View))
#6 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_createAccount()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\compta\application\views\createAccount.php:25
2013-09-05 13:36:43 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Welcome.php [ 74 ] in C:\wamp\www\compta\application\classes\Controller\Welcome.php:74
2013-09-05 13:36:43 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Controller\Welcome.php(74): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\com...', 74, Array)
#1 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_createAccount()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\compta\application\classes\Controller\Welcome.php:74