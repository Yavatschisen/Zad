<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-02 13:48:12 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'koh-db' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\kohana-task\modules\database\classes\Kohana\Database\MySQL.php:75
2013-03-02 13:48:12 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('koh-db')
#1 C:\xampp\htdocs\kohana-task\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\kohana-task\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(9): Kohana_ORM::factory('user')
#9 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#12 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\kohana-task\modules\database\classes\Kohana\Database\MySQL.php:75
2013-03-02 14:00:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\users\index.php [ 4 ] in C:\xampp\htdocs\kohana-task\application\views\users\index.php:4
2013-03-02 14:00:56 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\views\users\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana-task\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(10): Kohana_View->render()
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana-task\application\views\users\index.php:4
2013-03-02 14:03:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\users\index.php [ 4 ] in :
2013-03-02 14:03:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 15:30:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 32 ] in :
2013-03-02 15:30:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 15:32:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\users.php [ 32 ] in :
2013-03-02 15:32:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:07:22 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\users.php [ 50 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:50
2013-03-02 16:07:22 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(50): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:50
2013-03-02 16:07:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\users.php [ 50 ] in :
2013-03-02 16:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:09:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\users.php [ 51 ] in :
2013-03-02 16:09:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:09:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\users.php [ 51 ] in :
2013-03-02 16:09:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:10:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\Controller\users.php [ 52 ] in :
2013-03-02 16:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:11:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH), expecting ',' or ';' ~ APPPATH\classes\Controller\users.php [ 53 ] in :
2013-03-02 16:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:11:27 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\users.php [ 52 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-02 16:11:27 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(52): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-02 16:11:44 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\users.php [ 52 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-02 16:11:44 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(52): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:52
2013-03-02 16:20:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\users.php [ 51 ] in :
2013-03-02 16:20:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:20:19 --- CRITICAL: ErrorException [ 8 ]: Undefined property: ORM_Validation_Exception::$errors ~ APPPATH\classes\Controller\users.php [ 51 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:51
2013-03-02 16:20:19 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(51): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 51, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:51
2013-03-02 16:23:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' ~ APPPATH\classes\Controller\users.php [ 51 ] in :
2013-03-02 16:23:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:24:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH\classes\Controller\users.php [ 53 ] in :
2013-03-02 16:24:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:37:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\users.php [ 46 ] in :
2013-03-02 16:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:39:29 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:39:29 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1263): Kohana_Validation->check()
#2 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(50): Kohana_ORM->save(Object(Validation))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:39:42 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:39:42 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1263): Kohana_Validation->check()
#2 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(50): Kohana_ORM->save(Object(Validation))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:41:48 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:41:48 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1263): Kohana_Validation->check()
#2 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(48): Kohana_ORM->save(Object(Validation))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:41:54 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:41:54 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1263): Kohana_Validation->check()
#2 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(48): Kohana_ORM->save(Object(Validation))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:42:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\users.php [ 47 ] in :
2013-03-02 16:42:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:42:28 --- CRITICAL: ReflectionException [ 0 ]: Function not empty() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:42:28 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not empty')
#1 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1263): Kohana_Validation->check()
#2 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#3 C:\xampp\htdocs\kohana-task\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(Object(Validation))
#4 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(48): Kohana_ORM->save(Object(Validation))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#8 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana-task\system\classes\Kohana\Validation.php:396
2013-03-02 16:42:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\users.php [ 46 ] in :
2013-03-02 16:42:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:50:25 --- CRITICAL: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\classes\Controller\users.php [ 55 ] in :
2013-03-02 16:50:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 16:56:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\users.php [ 55 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 16:56:21 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 16:56:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\users.php [ 55 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 16:56:43 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 16:59:19 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\users.php [ 55 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 16:59:19 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(55): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 17:01:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\users.php [ 57 ] in :
2013-03-02 17:01:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 17:20:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\users.php [ 55 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 17:20:23 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:55
2013-03-02 19:10:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::post() ~ APPPATH\classes\Controller\users.php [ 42 ] in :
2013-03-02 19:10:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 19:11:11 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_users::$input ~ APPPATH\classes\Controller\users.php [ 42 ] in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:42
2013-03-02 19:11:11 --- DEBUG: #0 C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Controller.php(84): Controller_users->action_delete_all()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_users))
#4 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana-task\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana-task\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana-task\application\classes\Controller\users.php:42
2013-03-02 19:14:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_users::post() ~ APPPATH\classes\Controller\users.php [ 42 ] in :
2013-03-02 19:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 19:14:29 --- CRITICAL: ErrorException [ 1 ]: Method name must be a string ~ APPPATH\classes\Controller\users.php [ 42 ] in :
2013-03-02 19:14:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-02 19:14:32 --- CRITICAL: ErrorException [ 1 ]: Method name must be a string ~ APPPATH\classes\Controller\users.php [ 42 ] in :
2013-03-02 19:14:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :