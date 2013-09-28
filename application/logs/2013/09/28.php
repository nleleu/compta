<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-28 13:58:10 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO communities (label,fk_user) VALUES('test') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\compta\application\classes\Model\Community.php:17
2013-09-28 13:58:10 --- DEBUG: #0 C:\wamp\www\compta\application\classes\Model\Community.php(17): Kohana_Database_MySQL->query(2, 'INSERT INTO com...')
#1 C:\wamp\www\compta\application\classes\Controller\Welcome.php(132): Model_Community->create()
#2 C:\wamp\www\compta\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_community()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\compta\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\wamp\www\compta\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\compta\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\compta\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\compta\application\classes\Model\Community.php:17