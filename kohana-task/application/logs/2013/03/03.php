<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-03 01:46:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '|' ~ APPPATH\views\users\index.php [ 27 ] in :
2013-03-03 01:46:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-03 01:46:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\index.php [ 28 ] in :
2013-03-03 01:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-03 01:58:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\Controller\users.php [ 52 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-03 01:58:07 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_delete_all()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-03 01:58:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ids ~ APPPATH\classes\Controller\users.php [ 52 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-03 01:58:12 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_delete_all()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-03 02:00:51 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\users.php [ 47 ] in :
2013-03-03 02:00:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-03 02:01:10 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\users.php [ 47 ] in :
2013-03-03 02:01:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-03 02:06:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH\classes\Controller\users.php [ 44 ] in :
2013-03-03 02:06:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-03 02:07:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: r ~ APPPATH\views\users\index.php [ 30 ] in C:\xampp\htdocs\kohana-task\application\views\users\index.php:30
2013-03-03 02:07:32 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\views\users\index.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana-task\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(9): Kohana_View->render()
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana-task\application\views\users\index.php:30
2013-03-03 02:19:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idi ~ APPPATH\classes\Controller\users.php [ 45 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:45
2013-03-03 02:19:34 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_delete_all()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:45
2013-03-03 02:19:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idi ~ APPPATH\classes\Controller\users.php [ 45 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:45
2013-03-03 02:19:37 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_delete_all()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:45