 <div id="service" role="tabpanel" class="tab-pane">
  <!-- Tab title -->
  <div class="col-xs-12">
    <div class="col-xs-3">
      <span class="title">УСЛУГИ
      </span>
    </div>
    <div class="col-xs-9">
      <ul class="nav nav-pills">
        <li><a href="#" data-toggle="modal" data-target="#add_new_service">+ добавить услугу</a></li>
      </ul>
    </div>
  </div>
  <form name="add_new_service" id="create_service" class="form-inline" action="" method="">
    <div class="modal fade" id="add_new_service" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Новая услуга</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="col-xs-4">
                <label >Название услуги</label>
              </div>
              <div class="col-xs-8">
                <input type="text" class="form-control" name="name" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-4">
                <label >Цена</label>
              </div>
              <div class="col-xs-8">
                <input type="text" class="form-control price" name="price"> р.
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-4">
                <label >Описание</label>
              </div>
              <div class="col-xs-8">
                <textarea name="description" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-4">
                <label >Добавить фото</label>
              </div>
              <div class="col-xs-8">
                <span class="col-xs-2">
                  <input type="file" class="form-control">
                </span>
                <span class="col-xs-10">
                  <p class="desc">
                    размер загрудаемого изображения 305x305px
                    к одной услуге 1 изображение
                  </p>
                </span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-cofirm create_serv1ice" id = "">сохранить</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="col-xs-12">
    <table class="table service-header">
      <tr>
        <td width="90"></td>
        <td></td>
        <td width="140">Цена</td>
        <td width="140"></td>
        <td width="120"></td>
      </tr>
    </table>
    <?php foreach($services as $service): ?>
    <table class="table inner-tabs" id="service_item_id_<?= $service->id;?>">
      <tr>
        <td width="90"></td>
        <td><?= $service->name;?></td>
        <td width="140"><?= $service->price;?></td>
        <td width="140"><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#servis_edit_id_<?= $service->id;?>">редактировать</a></td>
        <td width="120"><a href="#" class="icon icon-remove delete_service" value="<?= $service->id;?>">удалить</a></td>
      </tr>
    </table>
    <? require('admin_modal/service_modal.php'); ?>
    <?php endforeach; ?>
  </div>
</div>
