<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-11 03:53:52 --- CRITICAL: ErrorException [ 2 ]: include(myModal.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\template\home.php [ 277 ] in Z:\home\barber\www\application\views\template\home.php:277
2015-09-11 03:53:52 --- DEBUG: #0 Z:\home\barber\www\application\views\template\home.php(277): Kohana_Core::error_handler(2, 'include(myModal...', 'Z:\home\barber\...', 277, Array)
#1 Z:\home\barber\www\application\views\template\home.php(277): include()
#2 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#3 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#4 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 Z:\home\barber\www\application\views\index.php(9): Kohana_View->__toString()
#6 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#7 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#8 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barber\www\application\views\template\home.php:277
2015-09-11 04:00:57 --- CRITICAL: ErrorException [ 2 ]: include(model/zapic.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\template\home.php [ 147 ] in Z:\home\barber\www\application\views\template\home.php:147
2015-09-11 04:00:57 --- DEBUG: #0 Z:\home\barber\www\application\views\template\home.php(147): Kohana_Core::error_handler(2, 'include(model/z...', 'Z:\home\barber\...', 147, Array)
#1 Z:\home\barber\www\application\views\template\home.php(147): include()
#2 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#3 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#4 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 Z:\home\barber\www\application\views\index.php(9): Kohana_View->__toString()
#6 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#7 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#8 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\barber\www\application\views\template\home.php:147
2015-09-11 04:48:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\main.php [ 20 ] in Z:\home\barber\www\application\classes\Controller\main.php:20
2015-09-11 04:48:10 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 20, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:20
2015-09-11 04:48:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sdf ~ APPPATH\classes\Controller\main.php [ 20 ] in Z:\home\barber\www\application\classes\Controller\main.php:20
2015-09-11 04:48:40 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 20, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:20
2015-09-11 04:57:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\main.php [ 52 ] in file:line
2015-09-11 04:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 04:57:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ APPPATH\classes\Model\base.php [ 9 ] in Z:\home\barber\www\application\classes\Model\base.php:9
2015-09-11 04:57:59 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 9, Array)
#1 Z:\home\barber\www\application\classes\Controller\main.php(55): Model_Base->write(Array)
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_ajax()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:9
2015-09-11 04:58:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ APPPATH\classes\Model\base.php [ 9 ] in Z:\home\barber\www\application\classes\Model\base.php:9
2015-09-11 04:58:09 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 9, Array)
#1 Z:\home\barber\www\application\classes\Controller\main.php(55): Model_Base->write(Array)
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_ajax()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:9
2015-09-11 04:58:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 04:58:57 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 04:59:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 04:59:01 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 04:59:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 04:59:46 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:00:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:00:05 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:00:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:00:22 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:06:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:06:27 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:08:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:08:26 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:08:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:08:29 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:25:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\ajax.php [ 6 ] in Z:\home\barber\www\application\classes\Controller\ajax.php:6
2015-09-11 05:25:01 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\ajax.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 6, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_asd()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\ajax.php:6
2015-09-11 05:25:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\ajax.php [ 6 ] in Z:\home\barber\www\application\classes\Controller\ajax.php:6
2015-09-11 05:25:04 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\ajax.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 6, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_asd()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\ajax.php:6
2015-09-11 05:25:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\ajax.php [ 6 ] in Z:\home\barber\www\application\classes\Controller\ajax.php:6
2015-09-11 05:25:28 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\ajax.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 6, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_asd()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\ajax.php:6
2015-09-11 05:30:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:30:23 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:30:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:30:27 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:30:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\main.php [ 52 ] in file:line
2015-09-11 05:30:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:30:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:30:57 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:31:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:31:16 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:32:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\main.php [ 54 ] in file:line
2015-09-11 05:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:32:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\main.php [ 54 ] in file:line
2015-09-11 05:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:32:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\main.php [ 54 ] in file:line
2015-09-11 05:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:32:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:32:43 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:46:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\main.php [ 7 ] in file:line
2015-09-11 05:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:47:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH\classes\Controller\main.php [ 8 ] in file:line
2015-09-11 05:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:47:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_NEW ~ APPPATH\classes\Controller\main.php [ 8 ] in file:line
2015-09-11 05:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 05:48:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:49 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:52 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:53 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:53 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:54 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:54 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 17 ] in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:48:55 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 17, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:17
2015-09-11 05:50:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:50:39 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:50:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:50:40 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:56:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 42 ] in Z:\home\barber\www\application\classes\Controller\main.php:42
2015-09-11 05:56:08 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 42, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_ajaxZapic()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:42
2015-09-11 05:56:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 42 ] in Z:\home\barber\www\application\classes\Controller\main.php:42
2015-09-11 05:56:19 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 42, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_ajaxZapic()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:42
2015-09-11 05:56:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\main.php [ 42 ] in Z:\home\barber\www\application\classes\Controller\main.php:42
2015-09-11 05:56:59 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 42, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_ajaxZapic()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:42
2015-09-11 05:59:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 05:59:03 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 06:00:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 06:00:51 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 06:00:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index.php [ 11 ] in Z:\home\barber\www\application\views\index.php:11
2015-09-11 06:00:55 --- DEBUG: #0 Z:\home\barber\www\application\views\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\barber\www\application\views\index.php:11
2015-09-11 06:03:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\ajax.php [ 26 ] in file:line
2015-09-11 06:03:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-11 06:03:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\ajax.php [ 26 ] in file:line
2015-09-11 06:03:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
