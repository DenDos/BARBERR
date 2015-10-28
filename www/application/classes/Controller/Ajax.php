<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

  public $template = 'index';


  public function action_ajaxZapic(){
    $data["message"] ="";
    $guest_data = array();
    $deal_to_base = new Model_Base();
    $to_mail = new Model_Mail();


    $timeHours = Arr::get($_POST, 'hour', '');
    $timeMins = Arr::get($_POST, 'minutes', '');
    $time = $timeHours.':'.$timeMins;

    $guest_data['date'] = Arr::get($_POST, 'date', '');
    $guest_data['time'] = $time;
    $guest_data['usluga'] = Arr::get($_POST, 'usluga', '');
    $guest_data['name'] = Arr::get($_POST, 'name', '');
    $guest_data['master'] = Arr::get($_POST, 'master', '');
    $guest_data['phone'] = Arr::get($_POST, 'phone', '');
    $guest_data['comment'] = Arr::get($_POST, 'comment', '');
    $err = $deal_to_base->write($guest_data);// записываем в базу все данные из формы
    $guest_data['id'] =  $deal_to_base->get_id($guest_data['phone']);//получаем последний созданый id по номеру телефона

    ///////////ПОчта///////
    $to      = 'cotoha_92@mail.ru';
    $subject = 'Запись на прием';
    $message = "Произошла запись на прием\nИмя: ".$guest_data['name']."\nИмя мастера: ". $guest_data['master']."\n";
    $message.="Время записи: ". $guest_data['time']."\n";
    $message.="Дата записи: ". $guest_data['date']."\n";
    $message.="Название услуги: ". $guest_data['usluga']."\n";
    $message.="Телефон: ". $guest_data['phone']."\n";
    $message.="Комментарий: ". $guest_data['comment']."\n";
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "To: ".$to."\r\n";
    $headers .= "From: ".$to."\r\n";
    //////////////////////

    if ($err)
    {
      mail($to, $subject, $message, $headers);
      echo json_encode(array("result"=>true,"msg"=>"Вы записаны на прием"));


    }else
    {
      echo json_encode(array("result"=>false,"msg"=>"В данное время мастер ". $guest_data['master'] ." занят.Выберите другое время или другого мастера"));
    }
  }
    public function action_ajaxUpdate(){
    $data["message"] ="";
    $guest_data = array();
    $deal_to_base = new Model_Base();
//
//
    $timeHours = Arr::get($_POST, 'hour', '');
    $timeMins = Arr::get($_POST, 'minutes', '');
    $time = $timeHours.':'.$timeMins;
//
    $guest_data['date'] = Arr::get($_POST, 'date', '');
    $guest_data['time'] = $time;
    $guest_data['service'] = Arr::get($_POST, 'service', '');
    $guest_data['name'] = Arr::get($_POST, 'name', '');
    $guest_data['master'] = Arr::get($_POST, 'master', '');
    $guest_data['phone'] = Arr::get($_POST, 'phone', '');
    $guest_data['comment'] = Arr::get($_POST, 'comment', '');
    $guest_data['id'] = Arr::get($_POST, 'id', '');
    $err = $deal_to_base->update($guest_data);// записываем в базу все данные из формы
    if ($err)
    {
      echo json_encode(array("result"=>true,"msg"=>"Данные записаны в базу11"));


    }else
    {
      echo json_encode(array("result"=>false,"msg"=>"В данное время мастер ". $guest_data['master'] ." занят.Выберите другое время или другого мастера"));
    }
  }
  public function action_ajaxDelete(){

    $deal_to_base = new Model_Base();
    $id = Arr::get($_POST, 'id', '');
    $guest_data = array();

    if ($deal_to_base->delete($id)){
      echo json_encode(array("result"=>true,"msg"=>"Вопрос удален из базы"));
    }
    else {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка при удалении вопросы из базы"));
    }
  }
}
