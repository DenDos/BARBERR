<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-25 07:57:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Services' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-10-25 07:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-25 07:57:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Services' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-10-25 07:57:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-25 07:58:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Services' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-10-25 07:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-25 08:30:17 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 90 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:90
2015-10-25 08:30:17 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(90): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana3...', 90, Array)
#1 Z:\home\kohana3.1\www\application\views\template\admin.php(72): require('Z:\home\kohana3...')
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:90
2015-10-25 08:31:06 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 90 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:90
2015-10-25 08:31:06 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(90): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana3...', 90, Array)
#1 Z:\home\kohana3.1\www\application\views\template\admin.php(72): require('Z:\home\kohana3...')
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:90
2015-10-25 08:36:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Admin.php [ 35 ] in file:line
2015-10-25 08:36:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-25 11:19:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\classes\Model\Master.php [ 43 ] in Z:\home\kohana3.1\www\application\classes\Model\Master.php:43
2015-10-25 11:19:06 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Master.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 43, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Master.php(86): Model_Master->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Master->action_ajaxAddMaster()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Master))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Master.php:43
2015-10-25 11:19:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\classes\Model\Master.php [ 43 ] in Z:\home\kohana3.1\www\application\classes\Model\Master.php:43
2015-10-25 11:19:19 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Master.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 43, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Master.php(86): Model_Master->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Master->action_ajaxAddMaster()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Master))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Master.php:43
2015-10-25 16:00:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 76 ] in file:line
2015-10-25 16:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-25 16:28:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 99 ] in file:line
2015-10-25 16:28:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
