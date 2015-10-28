<div id="questions" role="tabpanel" class="tab-pane">
  <!-- Tab title -->
  <div class="col-xs-12">
    <div class="col-xs-3">
      <span class="title">ВОПРОСЫ
      </span>
    </div>
  </div>
  <div class="col-xs-12 questions">
    <?php foreach($questions as $question): ?>
    <!-- row start -->
    <table class="table inner-tabs <? if($question->status == 0) echo "new"; ?>" id="question<?= $question->id;?>">
      <tr>
        <td width="90"><span class="new">NEW</span></td>
        <td>Вопрос от  -  <?= $question->name; ?></td>
        <td width="140"><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#quest_<?= $question->id;?>">ответить</a></td>
        <td width="120"><a href="#" class="icon icon-remove delete" value = "<?= $question->id;?>">удалить</a></td>
      </tr>
    </table>
    <!-- row end -->
    <? require('admin_modal/question_modal.php'); ?>
    <?php endforeach; ?>
  </div>
</div>
