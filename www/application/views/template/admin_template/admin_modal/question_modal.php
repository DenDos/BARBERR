<form action="" method="post" class="adminQuestion" id="adminQuestion<?= $question->id;?>">
  <div class="modal fade" id="quest_<?= $question->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Вопрос от  -  <?= $question->name; ?></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="col-xs-4"><label >Номер записи:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $question->id;?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Телефон:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $question->phone; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Имя:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $question->name; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >E-mail:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $question->email; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Вопрос:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= $question->question; ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Статус:</label></div>
            <div class="col-xs-8"><p class="desc"><i><?= ($question->status == 0) ? "Не опубликовано" : "Опубликовано" ?></i></p></div>
          </div>
          <div class="form-group">
            <div class="col-xs-4"><label >Ваш ответ:</label></div>
            <div class="col-xs-8"><textarea name="answer" class = "answer"><?= $question->answer; ?></textarea></div>
          </div>

          <input type="text" name="id" class="Qid hidden" value="<?= $question->id;?>" placeholder="">

        </div>
        <div class="modal-footer">
          <select name="status" id="dropdown_question_id_<?= $question->id;?>"  class="rselect hidden">
            <option value="0" selected>Снять с публикации</option>
            <option value="1">Опубликовать</option>
          </select>

          <dl class="dropdown" data-target-select="#dropdown_question_id_<?= $question->id;?>">
            <dt><a><span>Снять с публикации</span></a></dt>
            <dd>
              <ul>
                <li><a class="default" value="0">Снять с публикации</a></li>
                <li><a value="1">Опубликовать</a></li>
              </ul>
            </dd>
          </dl>

          <button type="button" class="btn btn-cofirm update" value = "<?= $question->id;?>">сохранить</button>
          <button  value = "<?= $question->id;?>" type="button" class="btn btn-delete delete" data-dismiss="modal">удалить</button>

        </div>
      </div>
    </div>
  </div>
</form>
