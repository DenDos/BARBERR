<?php defined('SYSPATH') or die('No direct script access.');

class Model_Mail
{
    public function send_data($data_array)
    {
        $master = $data_array['master'];
        $name = $data_array['name'];
        $usluga=  $data_array['usluga'];
        $com = $data_array['comment'];

        try
        {
            $config = Kohana::$config->load('email');
            Email::connect($config);
            $to = 'cotoha92@gmail.com';
            $subject = 'ТЕСТ';
            $from = 'kohanaframework@test.ru';
            $message = "Произошла запись на прием\nИмя: $name\nФамилия: $master\n";
          //$message.= "Дата: $date\nВремя: $time\n"

            Email::send($to, $from, $subject, $message, $html = false);

        }
        catch (Exeption $e)
        {
            echo $e->getMessage();
            return false;
        }

    }

}
