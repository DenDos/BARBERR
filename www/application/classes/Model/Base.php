<?php defined('SYSPATH') or die('No direct script access.');

class Model_Base
{

  public function write($data)
  {
    $app = new Model_Application();
    $array = array('date' => $data['date'], 'time' => $data['time'],'master'=>$data['master']);

    $into_base = ORM::factory('Application', $array);

    if($into_base->loaded()){
      return false;
    }else{
      $app->date =$data['date'];
      $app->time =$data['time'];
      $app->usluga =$data['usluga'];
      $app->name =$data['name'];
      $app->master =$data['master'];
      $app->phone =$data['phone'];
      $app->comment =$data['comment'];
      $app->save();
      return true;
    }
  }
  public function update($data)
  {
    $app = new Model_Application();
    $into_base = ORM::factory('Application', array('id'=>$data['id']));

    if(!$into_base->loaded()){
      return false;
    }else{
      $into_base->date =$data['date'];
      $into_base->time =$data['time'];
      $into_base->usluga =$data['service'];
      $into_base->name =$data['name'];
      $into_base->master =$data['master'];
      $into_base->phone =$data['phone'];
      $into_base->comment =$data['comment'];
      $into_base->save();
      return true;
    }
  }

  public function get_id($data)
  {

    $app = new Model_Application();

    //Узнаем id только что соданный
    $usertemp = ORM::factory('Application', array('phone'=>$data));
    $addId = $usertemp->id;
    return $addId;

  }

  public function delete($id)
  {
    if(!is_numeric($id)) return false;// Если число
    else{

      $usertemp = ORM::factory('Application', array('id'=>$id)); //Application - т название модели Model_Application

      if($usertemp->loaded()) { // если элемент найден в базе

        $usertemp->delete();
        return true;

      }else return false;
    }
  }
  public function reWrite($id)
  {
    if(!is_numeric($id)) return false;// Если число
    else{

      $usertemp = ORM::factory('Application', array('id'=>$id)); //Application - т название модели Model_Application

      if($usertemp->loaded()) { // если элемент найден в базе

        $usertemp->date = 'лох';
        $usertemp->time = 'лох';
        $usertemp->phone = 'лох';
        $usertemp->save();
        return true;

      }else return false;
    }
  }

}
