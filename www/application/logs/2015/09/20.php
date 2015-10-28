<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-20 15:00:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Model\QuestAns.php [ 12 ] in file:line
2015-09-20 15:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 15:01:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Model\QuestAns.php [ 12 ] in file:line
2015-09-20 15:01:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-20 15:53:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH\views\template\admin_template\pips_tmp.php [ 4 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php:4
2015-09-20 15:53:00 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 4, Array)
#1 Z:\home\kohana3.1\www\application\views\template\admin.php(22): require('Z:\home\kohana3...')
#2 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#3 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#4 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana3.1\www\application\views\index.php(18): Kohana_View->__toString()
#6 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#7 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php:4
2015-09-20 15:53:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH\views\template\admin_template\pips_tmp.php [ 4 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php:4
2015-09-20 15:53:42 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 4, Array)
#1 Z:\home\kohana3.1\www\application\views\template\admin.php(22): require('Z:\home\kohana3...')
#2 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#3 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#4 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana3.1\www\application\views\index.php(18): Kohana_View->__toString()
#6 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#7 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php:4
2015-09-20 15:53:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH\views\template\admin_template\pips_tmp.php [ 4 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php:4
2015-09-20 15:53:45 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 4, Array)
#1 Z:\home\kohana3.1\www\application\views\template\admin.php(22): require('Z:\home\kohana3...')
#2 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#3 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#4 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana3.1\www\application\views\index.php(18): Kohana_View->__toString()
#6 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#7 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp.php:4
