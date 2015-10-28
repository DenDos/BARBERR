<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {

  public $template = 'index';
  public function before()
  {
    $auth = Auth::instance();
    if($auth->logged_in() ==0)
    {
      $this->redirect('/auth');
    }
    return parent::before();
  }
  public function action_index()
  {

    $auth = Auth::instance();//экземпляр класса авторизации
    $questions_app = new Model_Question();
    $service_app = new Model_Service();
    $reviews_app = new Model_Review();
    $dial_to_base = new Model_Base();
    $masters = new Model_Master();
    $app = new Model_Application();
    $app_all = new Model_Application();


    $date = Arr::get($_GET, 'date', '');
    $service = Arr::get($_GET, 'service', '');
    $master = Arr::get($_GET, 'master', '');


    if(!empty($date))
    {
      $clients = $app->where('date', '=', $date);
    }
    else{
      $date = date("Y-m-d");
      $clients = $app->where('date', '=', $date);
    }
    if(!empty($service))
    {
      $clients = $app->where('usluga', '=', $service);
    }
    if(!empty($master))
    {
      $clients = $app->where('master', '=', $master);
    }

    $clients = $app->get_all();
    $all_clients = $app_all->order_by('id', 'DESC')->get_all();

    $questions = $questions_app->order_by('status', 'ASC')->get_all();

    $reviews = $reviews_app->order_by('status', 'ASC')->get_all();

    $services = $service_app->get_all();

    $masters = $masters->get_all();

    $this->template->content = View::factory('template/admin')->bind('clients', $clients)
                                                              ->bind('questions', $questions)
                                                              ->bind('services', $services)
                                                              ->bind('masters', $masters)
                                                              ->bind('reviews', $reviews)
                                                              ->bind('service', $service)
                                                              ->bind('master', $master)
                                                              ->bind('date', $date)
                                                              ->bind('all_clients', $all_clients);

  }
  public function action_zapicDelete()
  {

  }

} // End Admin
