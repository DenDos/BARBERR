<?php defined('SYSPATH') or die('No direct script access.');

class Model_QuestAns
{

  public function write($data)
  {
    $app = new Model_Question();

    $app->question =$data['question'];
    $app->name =$data['name'];
    $app->email =$data['email'];
    $app->phone =$data['phone'];
    $app->status =0;
    $app->save();
    return true;
  }

  public function get_id($data)
  {

    $app = new Model_Application();

    //Узнаем id только что соданный
    $usertemp = ORM::factory('Question', array('phone'=>$data));
    $addId = $usertemp->id;
    return $addId;

  }

  public function delete($id)
  {
    if(!is_numeric($id)) return false;// Если число
    else{

      $usertemp = ORM::factory('Question', array('id'=>$id)); //Application - т название модели Model_Application

      if($usertemp->loaded()) { // если элемент найден в базе

        $usertemp->delete();
        return true;

      }else return false;
    }
  }
  public function reWrite($data)
  {

    $subject = 'Barber';
    $headers = 'From: BARBER';

    $usertemp = ORM::factory('Question', array('id'=>$data['id'])); //Application - т название модели Model_Application

    if($usertemp->loaded()) { // если элемент найден в базе
      $message = "Ваш вопрос опубликован.\n";
      $message.="Ваш вопрос:\n".$usertemp->question."\n";
      $message.="Наш ответ:\n".$data['answer']."\n";
      $to      = $usertemp->email;
      $usertemp->status = $data['status'];
      if ($usertemp->status!= '0') mail($to, $subject, $message, $headers);
      $usertemp->answer = $data['answer'];
      $usertemp->date = $data['date'];
      $usertemp->save();
      return true;

    }else return false;
  }

}
