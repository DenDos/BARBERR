<?php defined('SYSPATH') or die('No direct script access.');

class Model_ReviewBase
{

  public function write($data)
  {
    $date = new DateTime();
    $app = new Model_Review();

    setlocale(LC_ALL, 'ru_RU.UTF-8');

    $app->review =$data['review'];
    $app->name =$data['name'];
    $app->email =$data['email'];
    $app->phone =$data['phone'];
    $app->date = $this->rus_date("j F");
    $app->status = $data['Rstatus'];

    $app->global_date = $date->format('U = Y-m-d H:i:s');

    $app->save();
    return true;
  }

  public function get_id($data)
  {

    $app = new Model_Application();

    //Узнаем id только что соданный
    $usertemp = ORM::factory('Review', array('phone'=>$data));
    $addId = $usertemp->id;
    return $addId;

  }

  public function delete($id)
  {
    if(!is_numeric($id)) return false;// Если число
    else{

      $usertemp = ORM::factory('Review', array('id'=>$id)); //Application - т название модели Model_Application

      if($usertemp->loaded()) { // если элемент найден в базе

        $usertemp->delete();
        return true;

      }else return false;
    }
  }
  public function reWrite($data)
  {

    $usertemp = ORM::factory('Review', array('id'=>$data['id'])); //Application - т название модели Model_Application

    if($usertemp->loaded()) { // если элемент найден в базе

      $usertemp->status = $data['status'];
      $usertemp->save();
      return true;

    }else return false;
  }
  public function rus_date() {
    $translate = array(
      "am" => "дп",
      "pm" => "пп",
      "AM" => "ДП",
      "PM" => "ПП",
      "Monday" => "Понедельник",
      "Mon" => "Пн",
      "Tuesday" => "Вторник",
      "Tue" => "Вт",
      "Wednesday" => "Среда",
      "Wed" => "Ср",
      "Thursday" => "Четверг",
      "Thu" => "Чт",
      "Friday" => "Пятница",
      "Fri" => "Пт",
      "Saturday" => "Суббота",
      "Sat" => "Сб",
      "Sunday" => "Воскресенье",
      "Sun" => "Вс",
      "January" => "Января",
      "Jan" => "Янв",
      "February" => "Февраля",
      "Feb" => "Фев",
      "March" => "Марта",
      "Mar" => "Мар",
      "April" => "Апреля",
      "Apr" => "Апр",
      "May" => "Мая",
      "May" => "Мая",
      "June" => "Июня",
      "Jun" => "Июн",
      "July" => "Июля",
      "Jul" => "Июл",
      "August" => "Августа",
      "Aug" => "Авг",
      "September" => "Сентября",
      "Sep" => "Сен",
      "October" => "Октября",
      "Oct" => "Окт",
      "November" => "Ноября",
      "Nov" => "Ноя",
      "December" => "Декабря",
      "Dec" => "Дек",
      "st" => "ое",
      "nd" => "ое",
      "rd" => "е",
      "th" => "ое"
    );

    if (func_num_args() > 1) {
      $timestamp = func_get_arg(1);
      return strtr(date(func_get_arg(0), $timestamp), $translate);
    } else {
      return strtr(date(func_get_arg(0)), $translate);
    }
  }

}
