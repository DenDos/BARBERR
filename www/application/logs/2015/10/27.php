<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-27 14:30:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 40 ] in file:line
2015-10-27 14:30:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 14:31:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 55 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\admin_modal\pips_modal.php:55
2015-10-27 14:31:04 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\admin_modal\pips_modal.php(55): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 55, Array)
#1 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(86): require('Z:\home\kohana3...')
#2 Z:\home\kohana3.1\www\application\views\template\admin.php(72): require('Z:\home\kohana3...')
#3 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#4 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#5 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\kohana3.1\www\application\views\index.php(18): Kohana_View->__toString()
#7 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#8 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\admin_modal\pips_modal.php:55
2015-10-27 14:50:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:50:44 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:50:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:50:44 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:29 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:29 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:45 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:45 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:59 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:51:59 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:53:49 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:53:49 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:56:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:56:58 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:56:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: usluga ~ APPPATH\classes\Model\Base.php [ 37 ] in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 14:56:58 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\Base.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 37, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Ajax.php(73): Model_Base->update(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\Base.php:37
2015-10-27 15:07:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 40 ] in file:line
2015-10-27 15:07:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 15:08:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 40 ] in file:line
2015-10-27 15:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 15:11:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENDWHILE ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 43 ] in file:line
2015-10-27 15:11:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 15:12:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENDWHILE ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 43 ] in file:line
2015-10-27 15:12:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 15:13:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\admin_template\admin_modal\pips_modal.php [ 42 ] in file:line
2015-10-27 15:13:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 15:35:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 11 ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 105 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:35:43 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(105): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 105, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:36:24 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 9 ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 105 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:36:24 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(105): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 105, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:43:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 105 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:43:44 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(105): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 105, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:43:59 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 105 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:43:59 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(105): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 105, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:44:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 105 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:44:18 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(105): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 105, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:44:28 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 15 ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 105 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 15:44:28 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(105): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\kohana3...', 105, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:105
2015-10-27 16:04:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 119 ] in file:line
2015-10-27 16:04:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-27 16:04:51 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 110 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:110
2015-10-27 16:04:51 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(110): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana3...', 110, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:110
2015-10-27 16:05:16 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\views\template\admin_template\pips_tmp_admin.php [ 113 ] in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:113
2015-10-27 16:05:16 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php(113): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana3...', 113, Array)
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
#15 {main} in Z:\home\kohana3.1\www\application\views\template\admin_template\pips_tmp_admin.php:113