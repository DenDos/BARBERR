
<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/add_style.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
</head>

<body>

  <div class="wrap container">
    <div class="header clearfix">
      <div class="col-md-4 col-xs-4 pull-left"><a href='/' class="logo"></a></div>

      <div class="col-md-3 col-xs-3 pull-right text_admin">
        <p>Первый Мужской «БАРБЕРШОП» © 2012
          Ростов- на- Дону, ул. Соколова, 39<br>
          (863) 2 261 756</p>
        <a href="auth/logout" class="btn-delete pull-right">Выйти</a>
      </div>
    </div>
    <div class="content clearfix">
      <div class="col-xs-3 menu">
        <nav>
          <ul role="tablist" class='ul_admin' >
            <li role="presentation" id="navigate-pils">
              <a href="#pips" aria-controls="profile" role="tab" data-toggle="tab" class=''>Запись</a>
              <!--
<ul role="presentation">
<li><a href="#pips_all" aria-controls="profile" role="tab" data-toggle="tab"><span class="br">&middot;</span>Общая</a></li>
<li><a href="#pips_master" aria-controls="profile" role="tab" data-toggle="tab"><span class="br">&middot;</span>Мастера</a></li>
</ul>
-->
            </li>
            <li class="after"><a href="#pips_all" aria-controls="profile" role="tab" data-toggle="tab" data-parrent="#navigate-pils"><span class="br">&middot;</span>Общая</a></li>
            <li class="after"><a href="#pips_master" aria-controls="profile" role="tab" data-toggle="tab" data-parrent="#navigate-pils"><span class="br">&middot;</span>Мастера</a></li>

            <li role="presentation">
              <a href="#service" aria-controls="profile" role="tab" data-toggle="tab" class=''>Услуги</a>
            </li>
            <li role="presentation">
              <a href="#salon" aria-controls="profile" role="tab" data-toggle="tab" class=''>Салон</a>
            </li>
            <li role="presentation">
              <a href="#news" aria-controls="profile" role="tab" data-toggle="tab" class=''>Новости</a>
            </li>
            <li role="presentation">
              <a href="#products" aria-controls="profile" role="tab" data-toggle="tab" class=''>Товары</a>
            </li>
            <li role="presentation">
              <a href="#questions" aria-controls="profile" role="tab" data-toggle="tab" class='active'>Вопрос/ответ</a>
            </li>
            <li role="presentation">
              <a href="#reviews" aria-controls="profile" role="tab" data-toggle="tab" class='active'>Отзывы</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-md-9 col-xs-9">
        <div class="tab-content" id="container">


          <?
          /********************PIPS*******************************************/
          require('admin_template/pips_tmp_admin.php');
          /***************************************************************/
          ?>

          <?
          /********************PIPS MASTER*******************************************/
          require('admin_template/pips_master_tmp_admin.php');
          /***************************************************************/
          ?>
          <?
          /********************PIPS ALL*******************************************/
          require('admin_template/pips_all_tmp_admin.php');
          /***************************************************************/
          ?>





          <!--услги start-->
          <?
          require('admin_template/service_tmp_admin.php');
          ?>
          <!--услги end-->



          <!--фото салона-->
          <div id="salon" role="tabpanel" class="tab-pane">
            <div class="col-xs-12">
              <div class="col-xs-3">
                <span class="title">ФОТО САЛОНА
                </span>
              </div>
              <div class="col-xs-9">
                <ul class="nav nav-pills">
                  <li><a href="#" data-toggle="modal" data-target="#add_new_photo_salon">+ добавить фото</a></li>
                </ul>

                <form name="add_new_photo_salon" class="form-inline" action="" method="">
                  <div class="modal fade" id="add_new_photo_salon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Салон новое фото</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Добавить фото маленькое</label>
                            </div>
                            <div class="col-xs-8">
                              <p class="desc">
                                <input type="file" class="form-control">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Добавить фото большое</label>
                            </div>
                            <div class="col-xs-8">
                              <p class="desc">
                                <input type="file" class="form-control">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-cofirm">сохранить</button>
                          <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-xs-12">

              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->

              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->
              <!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->				<!--inner item-->
              <form name="news_id_1234" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_1234">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->



              <!--inner item-->
              <form name="news_id_4321" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_4321">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 2</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#slaon_2">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="slaon_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 2</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->


              <!--inner item-->
              <form name="news_id_2211" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="news_id_2211">
                  <tr>
                    <td width="90"></td>
                    <td>Фото салона 3</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#salon_3">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="salon_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Фото салона 3</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->



            </div>
          </div>
          <!--end фото салона-->


          <!--news start-->
          <div id="news" role="tabpanel" class="tab-pane">
            <div class="col-xs-12">
              <div class="col-xs-3">
                <span class="title">ФОТО НОВОСТЕЙ
                </span>
              </div>
              <div class="col-xs-9">
                <ul class="nav nav-pills">
                  <li><a href="#" data-toggle="modal" data-target="#add_new_photo">+ добавить фото</a></li>
                </ul>

                <form id="upload-form" name="add_new_photo" class="form-inline" action="<?php echo URL::site('avatar/upload') ?>" method="post" enctype="multipart/form-data">
                  <div class="modal fade" id="add_new_photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Новости (добавление)</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Добавить фото маленькое</label>
                            </div>
                            <div class="col-xs-8">
                              <span class="col-xs-2">
                                <input type="file" class="form-control" name="avatar" id="avatar" />
                              </span>
                              <span class="col-xs-10">
                                <p class="desc">
                                  размер загрудаемого изображения 305x305px
                                </p>
                              </span>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-cofirm">сохранить</button>
                          <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-xs-12">

              <!--inner item-->
              <? require('admin_template/news_tmp_admin.php'); ?>
              <!--inner end-->






            </div>

          </div>
          <!--end news/-->


          <!--фото товар-->
          <div id="products" role="tabpanel" class="tab-pane">
            <div class="col-xs-12">
              <div class="col-xs-3">
                <span class="title">ТОВАРЫ
                </span>
              </div>
              <div class="col-xs-9">
                <ul class="nav nav-pills">
                  <li><a href="#" data-toggle="modal" data-target="#add_new_product">+ добавить товар</a></li>
                </ul>

                <form name="add_new_product" class="form-inline" action="" method="">
                  <div class="modal fade" id="add_new_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Добавление товара</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Название товара</label>
                            </div>
                            <div class="col-xs-8">
                              <p class="desc">
                                <input type="text" class="form-control">
                              </p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Добавить фото маленькое</label>
                            </div>
                            <div class="col-xs-8">
                              <span class="col-xs-2">
                                <input type="file" class="form-control">
                              </span>
                              <span class="col-xs-10">
                                <p class="desc">
                                  размер загрудаемого изображения 305x305px
                                </p>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Добавить фото большое</label>
                            </div>
                            <div class="col-xs-8">
                              <span class="col-xs-2">
                                <input type="file" class="form-control">
                              </span>
                              <span class="col-xs-10">
                                <p class="desc">
                                  размер загрудаемого изображения 990x660px
                                </p>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-xs-4">
                              <label >Описание</label>
                            </div>
                            <div class="col-xs-8">
                              <textarea name="textarea"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-cofirm">сохранить</button>
                          <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-xs-12">

              <!--inner item-->
              <form name="product_id_1" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="product_id_1">
                  <tr>
                    <td width="90"></td>
                    <td>Товар номер 1</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#product_1">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="product_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Товар 1</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Название товара</label>
                          </div>
                          <div class="col-xs-8">
                            <p class="desc">
                              <input type="text" class="form-control" value="Товар номер 1">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Описание</label>
                          </div>
                          <div class="col-xs-8">
                            <textarea name="textarea"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->




              <!--inner item-->
              <form name="product_id_2" class="form-inline" action="" method="">
                <table class="table inner-tabs" id="product_id_2">
                  <tr>
                    <td width="90"></td>
                    <td>Товар номер 2</td>
                    <td><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#product_2">редактировать</a></td>
                    <td><a href="#" class="icon icon-remove">удалить</a></td>
                  </tr>
                </table>

                <div class="modal fade" id="product_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Товар 2</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Название товара</label>
                          </div>
                          <div class="col-xs-8">
                            <p class="desc">
                              <input type="text" class="form-control" value="Товар номер 2">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото маленькое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 305x305px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Добавить фото большое</label>
                          </div>
                          <div class="col-xs-8">
                            <span class="col-xs-2">
                              <input type="file" class="form-control">
                            </span>
                            <span class="col-xs-10">
                              <p class="desc">
                                размер загрудаемого изображения 990x660px
                              </p>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-4">
                            <label >Описание</label>
                          </div>
                          <div class="col-xs-8">
                            <textarea name="textarea"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-cofirm">сохранить</button>
                        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--inner end-->



            </div>
          </div>
          <!--end товар-->


          <!--questions start-->
          <?
          require('admin_template/questions_tmp_admin.php');
          ?>
          <!--questions end-->


          <!--reviews start-->
          <?
          require('admin_template/reviews_tmp_admin.php');
          ?>
          <!--reviews end-->



        </div>
      </div>

    </div>
  </div>
  </div>
<script src="libs/jquery/jquery-2.1.3.min.js"></script>
<script src="javascripts/vendor.js"></script>
<script src="js/common.js"></script>
<script src="js/parallax.js"></script>
<script src="js/admin.js"></script>
<script src="javascripts/app.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>  $('.select').selectpicker();</script>
<script src="js/myConf.js"></script>
<script src="js/myFunc.js"></script>
<script src="js/modal.js"></script>
<script>
  require('initialize');

</script>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="js/bootstrap-datepicker.js"></script>


<!-- modal start -->



<script>
  function changevaluesinmodal(target,value)
  {
    var h = weekModal.find("[name="+target+"]");
    var el = h.attr("data-target-select");
    $(el).find("option").attr("selected",false);
    $(el).find("option[value="+value+"]").attr("selected",true);

    h.find("li a").removeClass("default");
    h.find("li a").each(function(){
      if($(this).attr("value") == value)
      {
        $(this).addClass("default");
        h.find("dt a span").html($(this).text());
      }
    });

  }

  //data-write="edit" data-hour="10" data-time="0" data-id="
  var weekModal = $("#modal_table_day1");
  var tab = $(".table-day");
  tab.find("tr td").each(function(){
    if(!($(this).attr("data-write") == 'empty'))
    {
      $(this).click(function(){
        var hour = $(this).attr("data-hour");
        var time = $(this).attr("data-time");
        weekModal.find("h4.modal-title").html("Новая запись");


        changevaluesinmodal('hour',hour);
        changevaluesinmodal('time',time);

        weekModal.modal('show');



      });
    }

    if($(this).attr("data-write") == 'edit')
    {
      $(this).click(function(){
        //получаем данные через ajax и обновляем если требуется.
        var hour = $(this).attr("data-hour");
        var time = $(this).attr("data-time");


        weekModal.find("h4.modal-title").html("Редактировать запись");

        changevaluesinmodal('hour',hour);
        changevaluesinmodal('time',time);

        weekModal.modal('show');


      });
    }

  })




</script>






<script>
  /// выпадющий select на dl td
  var dropdowns = $(".dropdown");

  // Onclick on a dropdown, toggle visibility
  dropdowns.find("dt").click(function(){
    dropdowns.find("dd ul").hide();
    $(this).next().children().toggle();
  });

  // Clic handler for dropdown
  dropdowns.find("dd ul li a").click(function(){
    var leSpan = $(this).parents(".dropdown").find("dt a span");

    // Remove selected class
    $(this).parents(".dropdown").find('dd a').each(function(){
      $(this).removeClass('selected');
    });

    // Update selected value
    leSpan.html($(this).html());

    // If back to default, remove selected class else addclass on right element
    if($(this).hasClass('default')){
      leSpan.removeClass('selected')
    }
    else{
      leSpan.addClass('selected');
      $(this).addClass('selected');
    }

    // Close dropdown
    $(this).parents("ul").hide();
  });

  // Close all dropdown onclick on another element
  $(document).bind('click', function(e){
    if (! $(e.target).parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
  });

  dropdowns.each(function(){
    var tr = $(this);
    var el = $($(this).attr("data-target-select"));
    tr.find("li a").click(function(){
      el.find("option[value="+$(this).attr("value")+"]").attr("selected",true);
    });
  });



  //console.log(e);

</script>

<script>
  $("body").css("height",$(window).height()+"px")
  $("#container").css("height",$(window).height()-150+"px");
</script>

<script>
  $(window).on("resize",function(){
    $("body").css("height",$(window).height()+"px")
    $("#container").css("height",$(window).height()-150+"px");

  });
</script>
<script>
  ymaps.ready(init);
  var myMap,
      myPlacemark;

  function init() {

    myMap = new ymaps.Map('map', {
      center: [47.22707180, 39.71939650],
      zoom: 15,
      controls: []
    });
    myPlacemark = new ymaps.Placemark([47.22707180, 39.71939650], {}, {
      iconLayout: 'default#image',
      iconImageHref: 'images/placemark-1.png',
      iconImageSize: [25, 37],
      iconImageOffset: [-10, -27],
      controls: ['']
    });
    myMap.geoObjects.add(myPlacemark);
  }
</script>
<script src="js/masked.js"></script>
</body>
