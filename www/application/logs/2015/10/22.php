<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-22 13:23:10 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Service::delete() should be compatible with that of Kohana_ORM::delete() ~ APPPATH\classes\Model\Service.php [ 28 ] in Z:\home\kohana3.1\www\system\classes\Kohana\Core.php:511
2015-10-22 13:23:10 --- DEBUG: #0 Z:\home\kohana3.1\www\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'Z:\home\kohana3...', 28, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Service')
#3 Z:\home\kohana3.1\www\application\classes\Controller\Admin.php(20): spl_autoload_call('Model_Service')
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana3.1\www\system\classes\Kohana\Core.php:511
2015-10-22 13:23:42 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Service::delete() should be compatible with that of Kohana_ORM::delete() ~ APPPATH\classes\Model\Service.php [ 28 ] in Z:\home\kohana3.1\www\system\classes\Kohana\Core.php:511
2015-10-22 13:23:42 --- DEBUG: #0 Z:\home\kohana3.1\www\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'Z:\home\kohana3...', 28, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Service')
#3 Z:\home\kohana3.1\www\application\classes\Controller\Admin.php(20): spl_autoload_call('Model_Service')
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana3.1\www\system\classes\Kohana\Core.php:511
2015-10-22 14:34:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mass ~ APPPATH\classes\Controller\Service.php [ 96 ] in Z:\home\kohana3.1\www\application\classes\Controller\Service.php:96
2015-10-22 14:34:30 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Service.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 96, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Service->action_ajaxAddService()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Service.php:96
2015-10-22 14:34:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mass ~ APPPATH\classes\Controller\Service.php [ 96 ] in Z:\home\kohana3.1\www\application\classes\Controller\Service.php:96
2015-10-22 14:34:30 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Service.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 96, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Service->action_ajaxAddService()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Service.php:96
2015-10-22 14:35:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 96 ] in file:line
2015-10-22 14:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:35:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 96 ] in file:line
2015-10-22 14:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:44:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 96 ] in file:line
2015-10-22 14:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:44:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 96 ] in file:line
2015-10-22 14:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:46:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:46:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:53:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:53:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:53:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:53:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:53:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:53:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:54:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:54:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:55:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:55:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:55:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Service.php [ 98 ] in file:line
2015-10-22 14:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:56:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\Controller\Service.php [ 99 ] in file:line
2015-10-22 14:56:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-22 14:56:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\Controller\Service.php [ 99 ] in file:line
2015-10-22 14:56:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
