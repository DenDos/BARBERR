<form name="service_edit_id" class="form-inline" id="service_edit_id_<?= $service->id;?>" action="" method="">
  <div class="modal fade" id="servis_edit_id_<?= $service->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Редактирование<?= $service->id;?></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="col-xs-4">
              <label >Название услуги</label>
            </div>
            <div class="col-xs-8">
              <input type="name" class="form-control" name="name" value="<?= $service->name;?>">
              <input type="text" class="form-control" name="id" style="display:none;" value="<?= $service->id;?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-4">
              <label >Цена</label>
            </div>
            <div class="col-xs-8">
              <input type="price" class="form-control price" name="price" value ="<?= $service->price;?>"> р.
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-4">
              <label >Описание</label>
            </div>
            <div class="col-xs-8">
              <textarea name="description" class="form-control"><?= $service->description;?></textarea>
            </div>
          </div>
<!--
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
-->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-cofirm update_service" value="<?= $service->id;?>">сохранить</button>
          <button type="button" class="btn btn-delete delete_service" value="<?= $service->id;?>" data-dismiss="modal">удалить</button>
        </div>
      </div>
    </div>
  </div>
</form>


