
<form action="" method="post" class='review_admin_form' id="review<?= $review->id; ?>">
  <div class="modal fade" id="review_modal_<?= $review->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Отзыв от  -  <?= $review->name; ?></h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <div class="col-xs-4"><label >Номер записи:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $review->id; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Имя:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $review->name; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Телефон:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $review->phone; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Почта:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $review->email; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Дата:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $review->date; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Отзыв:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $review->review; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Статус:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= ($review->status == 0) ? "Не опубликовано" : "Опубликовано" ?></i></p></div>
          </div>

          <input type="text" class='rid hidden' name="id" value="<?= $review->id; ?>" placeholder="">

        </div>
        <div class="modal-footer">
          <select name="status" id="dropdown_review_id_<?= $review->id; ?>" class="rselect hidden">
            <option value="0" selected>Снять с публикации</option>
            <option value="1">Опубликовать</option>
          </select>

          <dl class="dropdown" data-target-select="#dropdown_review_id_<?= $review->id; ?>">
            <dt><a><span>Снять с публикации</span></a></dt>
            <dd>
              <ul>
                <li><a class="default" value="0">Снять с публикации</a></li>
                <li><a value="1">Опубликовать</a></li>
              </ul>
            </dd>
          </dl>


          <button type="button" class="btn btn-cofirm update_review" value = "<?= $review->id; ?>">сохранить</button>
          <button type="button" class="btn btn-delete delete_review" value = "<?= $review->id; ?>" data-dismiss="modal">удалить</button>

        </div>
      </div>
    </div>
  </div>
</form>
