<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-21 09:14:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Review_base' not found ~ APPPATH\classes\Controller\Review.php [ 9 ] in file:line
2015-09-21 09:14:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 09:15:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: review ~ APPPATH\classes\Model\ReviewBase.php [ 10 ] in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:10
2015-09-21 09:15:36 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 10, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(17): Model_ReviewBase->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:10
2015-09-21 09:15:59 --- CRITICAL: Kohana_Exception [ 0 ]: The question property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php:702
2015-09-21 09:15:59 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('question', '')
#1 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(10): Kohana_ORM->__set('question', '')
#2 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(17): Model_ReviewBase->write(Array)
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php:702
2015-09-21 09:23:22 --- CRITICAL: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\ReviewBase.php [ 15 ] in file:line
2015-09-21 09:23:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'Z:\home\kohana3...', 15, Array)
#1 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(15): date()
#2 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(17): Model_ReviewBase->write(Array)
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-21 09:28:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\ReviewBase.php [ 15 ] in file:line
2015-09-21 09:28:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 09:30:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\Model\ReviewBase.php [ 16 ] in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:30:56 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 16, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(17): Model_ReviewBase->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\Model\ReviewBase.php [ 16 ] in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:08 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 16, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(17): Model_ReviewBase->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\Model\ReviewBase.php [ 16 ] in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:50 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 16, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(18): Model_ReviewBase->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\Model\ReviewBase.php [ 16 ] in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:53 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 16, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(18): Model_ReviewBase->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\Model\ReviewBase.php [ 16 ] in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 09:31:55 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 16, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Review.php(18): Model_ReviewBase->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\ReviewBase.php:16
2015-09-21 15:27:47 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template\home.php [ 267 ] in Z:\home\kohana3.1\www\application\views\template\home.php:267
2015-09-21 15:27:47 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\home.php(267): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana3...', 267, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana3.1\www\application\views\index.php(18): Kohana_View->__toString()
#5 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana3.1\www\application\views\template\home.php:267
2015-09-21 15:55:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Controller\Ajax.php [ 32 ] in file:line
2015-09-21 15:55:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 15:56:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Controller\Ajax.php [ 32 ] in file:line
2015-09-21 15:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-21 16:03:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Controller\Ajax.php [ 32 ] in file:line
2015-09-21 16:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
