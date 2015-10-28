<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Master extends Controller {

  public $template = 'index';

  public function action_ajaxZapic(){
    $deal_to_base = new Model_QuestAns();
    $guest_data = array();


    $guest_data['email'] = Arr::get($_POST, 'email', '');
    $guest_data['name'] = Arr::get($_POST, 'Qname', '');
    $guest_data['phone'] = Arr::get($_POST, 'Qphone', '');
    $guest_data['question'] = Arr::get($_POST, 'question', '');

    $guest_data['id'] =  $deal_to_base->get_id($guest_data['phone']);//получаем последний созданый id по номеру телефона
    $err = $deal_to_base->write($guest_data);// записываем в базу все данные из формы

    if ($err)
    {
      echo json_encode(array("result"=>true,"msg"=>"Спасибо за вопрос,мы опубликуем ответ в ближайшее время"));
    }else
    {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка при записи в базу даных,попробуйте позже"));
    }

  }
  public function action_ajaxDelete(){

    $deal_to_base = new Model_Master();
    $id = Arr::get($_POST, 'id', '');
    $guest_data = array();

    if ($deal_to_base->delete_master($id)){
      echo json_encode(array("result"=>true,"msg"=>"Вопрос удален из базы","id"=> $id));
    }
    else {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка при удалении вопросы из базы","id"=> $id));
    }

  }
  public function action_ajaxUpdate(){
    $guest_data = array();
    $deal_to_base = new Model_Service();

    $guest_data['description'] = Arr::get($_POST, 'description', '');
    $guest_data['price'] = Arr::get($_POST, 'price', '');
    $guest_data['name'] = Arr::get($_POST, 'name', '');
    $guest_data['id'] = Arr::get($_POST, 'id', '');


    if ($deal_to_base->reWrite($guest_data)){
      echo json_encode(array("result"=>true,"msg"=>"Статус изменен"));
    }
    else {
      echo json_encode(array("result"=>false,"msg"=>"Возникла ошибка"));
    }
  }

  public function action_ajaxMore(){

    $array = array('status' => 1);
    $app = new Model_Question();
    $mass[]='';
    $count =0;

    $questions = ORM::factory('Question')
      ->where('status', '=', 1)
      ->limit(2)
      ->order_by(DB::expr('RAND()'))
      ->find_all();

    foreach($questions as $data ){
      $mass[$count]['id'] = $questions[$count]->id;
      $mass[$count]['answer'] = $questions[$count]->answer;
      $mass[$count]['question'] = $questions[$count]->question;
      $count++;
    }
    echo json_encode(array("result"=>true,"msg"=>$mass));
  }
  public function action_ajaxAddMaster(){

    $guest_data['name'] = Arr::get($_POST, 'name', '');
    $deal_to_base = new Model_Master();
    $deal_to_base->write($guest_data);
    echo json_encode(array("result"=>true));
  }
}
