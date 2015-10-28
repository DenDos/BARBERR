<div class="modal fade" id="pips_master_list_id_if_need_<?= $master->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Редактирование мастера <?= $master->id;?></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-xs-4"><label>Имя Фамилия Мастера:</label></div>
          <div class="col-xs-8">
            <input type="text" name = 'name' value="<?= $master->name;?>" style=' text-transform: uppercase;height: 40px;' >
          </div>
        </div>
<!--
        <div class="form-group">
          <div class="col-xs-4"><label>Выбор услуги:</label></div>
          <div class="col-xs-8">
            <select name="master_select" id="dropdown_services_type2_id_<?= $master->id;?>" class="rselect hidden">
              <option value="0" selected>Услуга 0</option>
              <option value="1">Услуга 1</option>
              <option value="2">Услуга 2</option>
              <option value="3">Услуга 3</option>
              <option value="4">И так далее...</option>
            </select>

            <dl class="dropdown full-width select-2" data-target-select="#dropdown_services_type2_id_<?= $master->id;?>">
              <dt><a><span>Выбор услуги</span></a></dt>
              <dd>
                <ul>
                  <li><a class="default" value="0">Услуга 0</a></li>
                  <li><a value="1">Услуга 1</a></li>
                  <li><a value="2">Услуга 2</a></li>
                  <li><a value="3">Услуга 3</a></li>
                  <li><a value="4">Услуга 4</a></li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
-->
<!--
        <div class="form-group">
          <div class="col-xs-4"><label>Даты приема:</label></div>
          <div class="col-xs-8">
            <select name="master_select" id="dropdown_date_priem2_id_<?= $master->id;?>" class="rselect hidden">
              <option value="10" selected>10.22.1111</option>
              <option value="11">11.22.1111</option>
              <option value="12">12.22.1111</option>
              <option value="13">13.22.1111</option>
              <option value="14">14.22.1111</option>
            </select>
            <dl class="dropdown full-width select-3" data-target-select="#dropdown_date_priem2_id_<?= $master->id;?>">
              <dt><a><span>Дата приема</span></a></dt>
              <dd>
                <ul>
                  <li><a class="default" value="10">11.22.1111</a></li>
                  <li><a value="11">11.22.1111</a></li>
                  <li><a value="12">12.22.1111</a></li>
                  <li><a value="13">13.22.1111</a></li>
                  <li><a value="14">14.22.1111</a></li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
-->
        <input type="text" name="id" class="Qid hidden" value="<?= $master->id;?>" placeholder="">

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-cofirm">сохранить</button>
        <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>

      </div>
    </div>
  </div>
</div>
