<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Review extends Controller {

  public $template = 'index';

  public function action_ajaxZapic(){
    $deal_to_base = new Model_ReviewBase();
    $guest_data = array();


    $guest_data['email'] = Arr::get($_POST, 'Remail', '');
    $guest_data['name'] = Arr::get($_POST, 'Rname', '');
    $guest_data['phone'] = Arr::get($_POST, 'Rphone', '');
    $guest_data['Rstatus'] = Arr::get($_POST, 'Rstatus', '');
    $guest_data['review'] = Arr::get($_POST, 'review', '');

    $guest_data['id'] =  $deal_to_base->get_id($guest_data['phone']);//получаем последний созданый id по номеру телефона
    $err = $deal_to_base->write($guest_data);// записываем в базу все данные из формы

    if ($err)
    {
      echo json_encode(array("result"=>true,"msg"=>"Спасибо за ваш отзыв, мы опубликуем его в ближайшее время"));
    }else
    {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка при записи в базу даных,попробуйте позже"));
    }

  }
  public function action_ajaxDelete(){

    $deal_to_base = new Model_ReviewBase();
    $id = Arr::get($_POST, 'id', '');
    $guest_data = array();

    if ($deal_to_base->delete($id)){
      echo json_encode(array("result"=>true,"msg"=>"Вопрос удален из базы"));
    }
    else {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка при удалении вопросы из базы"));
    }

  }
  public function action_ajaxUpdate(){
    $deal_to_base = new Model_ReviewBase();
    $date = new DateTime();
    $guest_data = array();

    $guest_data['id'] = Arr::get($_POST, 'id', '');
    $guest_data['status'] = Arr::get($_POST, 'status', '');

    if ($deal_to_base->reWrite($guest_data)){
      echo json_encode(array("result"=>true,"msg"=>"Статус изменен"));
    }
    else {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка"));
    }
  }

  public function action_ajaxMore(){

    $app = new Model_ReviewBase();
    $array = array('status' => 1);
    $mass[]='';
    $count =0;
    $reviews = ORM::factory('Review')
      ->where('status', '=', 1)
      ->limit(3)
      ->order_by(DB::expr('RAND()'))
      ->find_all();
    foreach($reviews as $data ){
      $mass[$count]['id'] = $reviews[$count]->id;
      $mass[$count]['review'] = $reviews[$count]->review;
      $mass[$count]['date'] = $reviews[$count]->date;
      $mass[$count]['name'] = $reviews[$count]->name;
      $count++;
    }
 echo json_encode(array("result"=>true,"msg"=>$mass));
  }
}
