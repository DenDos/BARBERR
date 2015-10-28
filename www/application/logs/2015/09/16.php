<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-16 05:55:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'barber.questionses' doesn't exist [ SHOW FULL COLUMNS FROM `questionses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:55:19 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('questionses')
#2 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(8): Kohana_ORM->__construct()
#6 Z:\home\kohana3.1\www\application\classes\Controller\Questions.php(24): Model_QuestAns->write(Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Questions->action_ajaxZapic()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:56:42 --- CRITICAL: Database_Exception [ 1146 ]: Table 'barber.questionses' doesn't exist [ SHOW FULL COLUMNS FROM `questionses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:56:42 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('questionses')
#2 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(8): Kohana_ORM->__construct()
#6 Z:\home\kohana3.1\www\application\classes\Controller\Questions.php(24): Model_QuestAns->write(Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Questions->action_ajaxZapic()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:56:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'barber.questionses' doesn't exist [ SHOW FULL COLUMNS FROM `questionses` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:56:45 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('questionses')
#2 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(8): Kohana_ORM->__construct()
#6 Z:\home\kohana3.1\www\application\classes\Controller\Questions.php(24): Model_QuestAns->write(Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Questions->action_ajaxZapic()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Questions))
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:57:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'barber.questions' doesn't exist [ SHOW FULL COLUMNS FROM `questions` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:57:34 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('questions')
#2 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(8): Kohana_ORM->__construct()
#6 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(24): Model_QuestAns->write(Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxZapic()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:58:46 --- CRITICAL: Database_Exception [ 1146 ]: Table 'barber.questions' doesn't exist [ SHOW FULL COLUMNS FROM `questions` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:58:46 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('questions')
#2 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(8): Kohana_ORM->__construct()
#6 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(24): Model_QuestAns->write(Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxZapic()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:59:59 --- CRITICAL: Database_Exception [ 1146 ]: Table 'barber.questions' doesn't exist [ SHOW FULL COLUMNS FROM `questions` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 05:59:59 --- DEBUG: #0 Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('questions')
#2 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana3.1\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(8): Kohana_ORM->__construct()
#6 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(24): Model_QuestAns->write(Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxZapic()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana3.1\www\modules\database\classes\Kohana\Database\MySQL.php:359
2015-09-16 06:01:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_QuestAns::get_id() ~ APPPATH\classes\Controller\Question.php [ 26 ] in file:line
2015-09-16 06:01:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 06:07:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: answer ~ APPPATH\classes\Model\QuestAns.php [ 10 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:10
2015-09-16 06:07:55 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 10, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(24): Model_QuestAns->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:10
2015-09-16 06:37:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: answer ~ APPPATH\classes\Model\QuestAns.php [ 10 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:10
2015-09-16 06:37:04 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 10, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(18): Model_QuestAns->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:10
2015-09-16 06:37:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\classes\Model\QuestAns.php [ 11 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:11
2015-09-16 06:37:42 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 11, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(18): Model_QuestAns->write(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxZapic()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:11
2015-09-16 07:14:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: clients ~ APPPATH\views\template\admin.php [ 1 ] in Z:\home\kohana3.1\www\application\views\template\admin.php:1
2015-09-16 07:14:57 --- DEBUG: #0 Z:\home\kohana3.1\www\application\views\template\admin.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 1, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana3.1\www\application\views\index.php(16): Kohana_View->__toString()
#5 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana3.1\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana3.1\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana3.1\www\application\views\template\admin.php:1
2015-09-16 08:07:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\Controller\Question.php [ 40 ] in file:line
2015-09-16 08:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:08:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Question.php [ 39 ] in file:line
2015-09-16 08:08:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:08:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 39 ] in file:line
2015-09-16 08:08:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:09:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 45 ] in file:line
2015-09-16 08:09:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:09:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 45 ] in file:line
2015-09-16 08:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:09:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 45 ] in file:line
2015-09-16 08:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:09:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 45 ] in file:line
2015-09-16 08:09:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:09:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Question.php [ 45 ] in file:line
2015-09-16 08:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 08:10:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Question.php [ 40 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:19 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 40, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxDelete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Question.php [ 40 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:44 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 40, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxDelete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Question.php [ 40 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:56 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 40, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxDelete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Question.php [ 40 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:10:59 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 40, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxDelete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:11:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Question.php [ 40 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:11:07 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 40, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxDelete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:11:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Question.php [ 40 ] in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 08:11:38 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 40, Array)
#1 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxDelete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana3.1\www\application\classes\Controller\Question.php:40
2015-09-16 09:23:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:23:36 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:23:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:23:49 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:24:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:24:25 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:24:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:24:36 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:25:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:25:11 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:26:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:26:01 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:26:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\QuestAns.php [ 49 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 09:26:04 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(49): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:49
2015-09-16 10:02:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sttaus ~ APPPATH\classes\Model\QuestAns.php [ 53 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:53
2015-09-16 10:02:16 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 53, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(48): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:53
2015-09-16 10:02:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sttaus ~ APPPATH\classes\Model\QuestAns.php [ 53 ] in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:53
2015-09-16 10:02:20 --- DEBUG: #0 Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 53, Array)
#1 Z:\home\kohana3.1\www\application\classes\Controller\Question.php(48): Model_QuestAns->reWrite(Array)
#2 Z:\home\kohana3.1\www\system\classes\Kohana\Controller.php(84): Controller_Question->action_ajaxUpdate()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Question))
#5 Z:\home\kohana3.1\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana3.1\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana3.1\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana3.1\www\application\classes\Model\QuestAns.php:53
