<? $time = explode(":",$client->time);$i=9;?>
<form action="" method="post" id="modal_table_day_form">
  <div class="modal fade" id="modal_table_day<?= $client->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Редактирование услуги</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="col-xs-4"><label style="margin-top: 20px;">Название услуги:</label></div>
            <div class="col-xs-8">
              <select class="select admin_select" name="service" >
                <option selected style='display:none;'><?= $client->usluga;?></option>
                <option value='' disabled >Выберите услугу:</option>
                <? foreach($services as $service ):?>
                <option><?= $service->name?></option>
                <? endforeach;?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label style="margin-top: 20px;" >Выбор мастера:</label></div>
            <div class="col-xs-8">
              <select class="select admin_select" name="master" >
                <option selected style='display:none;'><?= $client->master;?></option>
                <option value='' disabled >Выберите услугу:</option>
                <? foreach($masters as $master ):?>
                <option><?= $master->name?></option>
                <? endforeach;?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label style="margin-top: 20px;">Время:</label></div>
            <div class="col-xs-8">
              <dl class="dropdown time select-3" name="hour" data-target-select="#dropdown_time_from_id_11">
                <select class="select hour" name="hour" >
                  <option <?= $time[0]=='09' ?  'selected' : '';?> >09</option>
                  <option <?= $time[0]=='10' ?  'selected' : '';?>>10</option>
                  <option <?= $time[0]=='11' ?  'selected' : '';?>>11</option>
                  <option <?= $time[0]=='12' ?  'selected' : '';?>>12</option>
                  <option <?= $time[0]=='13' ?  'selected' : '';?>>13</option>
                  <option <?= $time[0]=='14' ?  'selected' : '';?>>14</option>
                  <option <?= $time[0]=='15' ?  'selected' : '';?>>15</option>
                  <option <?= $time[0]=='16' ?  'selected' : '';?>>16</option>
                  <option <?= $time[0]=='17' ?  'selected' : '';?>>17</option>
                  <option <?= $time[0]=='18' ?  'selected' : '';?>>18</option>
                  <option <?= $time[0]=='19' ?  'selected' : '';?>>19</option>
                  <option <?= $time[0]=='20' ?  'selected' : '';?>>20</option>
                </select>
                -
                <select class="select hour minutes " name="minutes" >
                  <option <?= $time[1]=='00' ?  'selected' : '';?>>00</option>
                  <option <?= $time[1]=='15' ?  'selected' : '';?>>15</option>
                  <option <?= $time[1]=='30' ?  'selected' : '';?>>30</option>
                  <option <?= $time[1]=='45' ?  'selected' : '';?>>45</option>
                </select>
                </div>
            </div>
            <div class="form-group">
              <div class="col-xs-4"><label >Дата:</label></div>
              <div class="col-xs-8"><input type="text" placeholder="2015-10-28" value='2015-10-28' name="date" id="date1" class="date"></div>
            </div>
            <div class="form-group">
              <div class="col-xs-4"><label >Клиент:</label></div>
              <div class="col-xs-8"><input name="name" type="text" class="form-control" value="<?= $client->name;?>"></div>
            </div>
            <div class="form-group">
              <div class="col-xs-4"><label >Телефон:</label></div>
              <div class="col-xs-8"><input name="phone" type="text" class="form-control" value="<?= $client->phone;?>"></div>
            </div>
            <div class="form-group">
              <div class="col-xs-4"><label >Комментарий:</label></div>
              <div class="col-xs-8"><textarea name="comment" class="form-control" value='<?= $client->comment;?>' ><?= $client->comment;?></textarea></div>
            </div>

            <input type="text" name="id" class="Qid hidden" value="<?= $client->id;?>" placeholder="">

          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-cofirm update_pip" value="<?= $client->id;?>">сохранить</button>
            <button type="button" class="btn btn-delete delete_pip" data-dismiss="modal" value="<?= $client->id;?>">удалить</button>

          </div>
        </div>
      </div>
    </div>
    </form>
