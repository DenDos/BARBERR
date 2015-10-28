<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-18 06:17:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Question.php [ 65 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:65
2015-09-18 06:17:42 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana3...', 65, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:65
2015-09-18 06:49:14 --- CRITICAL: ErrorException [ 1 ]: Class 'R' not found ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:49:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 06:51:27 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: type is unsupported, encoded as null ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'Z:\home\kohana3...', 66, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(66): json_encode(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-18 06:57:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 06:57:28 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: type is unsupported, encoded as null ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:57:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'Z:\home\kohana3...', 66, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(66): json_encode(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-18 06:57:30 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: type is unsupported, encoded as null ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:57:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'Z:\home\kohana3...', 66, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(66): json_encode(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-18 06:57:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:57:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 06:59:54 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: type is unsupported, encoded as null ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 06:59:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'Z:\home\kohana3...', 66, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(66): json_encode(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-18 07:01:22 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Question as array ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 07:01:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:01:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ']' ~ APPPATH\classes\Controller\Question.php [ 66 ] in file:line
2015-09-18 07:01:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:09:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ APPPATH\classes\Controller\Question.php [ 58 ] in file:line
2015-09-18 07:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:10:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Question.php [ 58 ] in file:line
2015-09-18 07:10:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:10:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Question.php [ 58 ] in file:line
2015-09-18 07:10:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:10:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Question.php [ 67 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:67
2015-09-18 07:10:53 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 67, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:67
2015-09-18 07:11:15 --- CRITICAL: ErrorException [ 2 ]: json_encode() expects at least 1 parameter, 0 given ~ APPPATH\classes\Controller\Question.php [ 70 ] in file:line
2015-09-18 07:11:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() e...', 'Z:\home\kohana3...', 70, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(70): json_encode()
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxMore()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-09-18 07:11:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Question.php [ 70 ] in file:line
2015-09-18 07:11:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:12:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 72 ] in file:line
2015-09-18 07:12:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:12:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 72 ] in file:line
2015-09-18 07:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:15:09 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 463 ] in file:line
2015-09-18 07:15:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-18 07:15:31 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 1122 ] in file:line
2015-09-18 07:15:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
