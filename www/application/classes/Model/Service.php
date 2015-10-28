<?php defined('SYSPATH') or die('No direct script access.');

class Model_Service extends ORM
{
  //protected $_table_name = 'first';
  public function get_all(){

    return $this->find_all();

  }

  public function delete_service($id)
  {
    if(!is_numeric($id)) return false;// Если число
    else{

      $usertemp = ORM::factory('Service', array('id'=>$id)); //Application - т название модели Model_Application

      if($usertemp->loaded()) { // если элемент найден в базе

        $usertemp->delete();
        return true;

      }else return false;
    }
  }
  public function reWrite($data)
  {
    $usertemp = ORM::factory('Service', array('id'=>$data['id'])); //Application - т название модели Model_Application

    if($usertemp->loaded()) { // если элемент найден в базе
      $usertemp->name = $data['name'];
      $usertemp->description = $data['description'];
      $usertemp->price = $data['price'];
      $usertemp->save();
      return true;

    }else return false;
  }
  public function write($data)
  {
    $this->name =$data['name'];
    $this->description =$data['description'];
    $this->price =$data['price'];
    $this->save();
    return true;
  }


}
