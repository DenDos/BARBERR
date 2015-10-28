<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

  public $template = 'index';


  public function action_index()
  {
    $app = new Model_Question();
    $appR = new Model_Review();
    $array = array('status' => 1);
    $data["message"] ="";

    $questions = ORM::factory('Question')
      ->where('status', '=', 1)
      ->limit(2)
      ->order_by('date', 'DESC')
      ->find_all();

    $reviews = ORM::factory('Review')
      ->where('status', '=', 1)
      ->limit(3)
      ->order_by('global_date', 'DESC')
      ->find_all();

    $services = ORM::factory('Service')
      ->find_all();
    $masters = ORM::factory('Master')
      ->find_all();


    if (empty($questions[0])) $data["questions"] = 0 ;
    else $data["questions"] =$questions;

    if (empty($reviews[0])||empty($reviews[2])||empty($reviews[1])) $data["reviews"] = 0 ;
    else $data["reviews"] =$reviews;
    $data["services"] =$services;
    $data["masters"] =$masters;
    $this->template->content = View::factory('template/home',$data);
  }
} // End main
