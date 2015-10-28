
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Avatar extends Controller {

  public function action_index()
  {
    $view = View::factory('avatar/index');
    $this->response->body($view);
  }

  public function action_upload()
  {
    $view = View::factory('avatar/upload');
    $error_message = NULL;
    $filename = NULL;
    $img = new Model_Imgnew();
    if ($this->request->method() == Request::POST)
    {
      if (isset($_FILES['avatar']))
      {
        $filename = $this->_save_image($_FILES['avatar']);
      }
    }

    if ( ! $filename)
    {
      $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
    }
    $view->uploaded_file = $filename;
    $view->error_message = $error_message;
    //$this->response->body($view);
    echo json_encode(array("result"=>true,"msg"=>"Вы записаны на прием"));
  }

  protected function _save_image($image)
  {
    $img = new Model_Imgnew();
    if (
      ! Upload::valid($image) OR
      ! Upload::not_empty($image) OR
      ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
    {
      return FALSE;
    }

    $directory = 'img/';

    if ($file = Upload::save($image, NULL, $directory))
    {
      $filename = strtolower(Text::random('alnum', 20)).'.jpg';
      $img->src = $filename;
      $img->save();

      Image::factory($file)
        ->resize(305, 305, Image::AUTO)
        ->save($directory.$filename);

      // Delete the temporary file
      unlink($file);

      return $filename;
    }

    return FALSE;
  }

}
