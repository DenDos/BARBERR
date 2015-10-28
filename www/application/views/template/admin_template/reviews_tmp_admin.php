<div id="reviews" role="tabpanel" class="tab-pane">
  <!-- Title-->
  <div class="col-xs-12">
    <div class="col-xs-3">
      <span class="title">ОТЗЫВЫ
      </span>
    </div>
  </div>
  <!-- Title end-->

  <div class="col-xs-12 reviews">
    <!--row start--->
    <?php foreach($reviews as $review): ?>
    <table class="table inner-tabs <? if($review->status == 0) echo "new"; ?>" id="review_id_<?= $review->id; ?>">
      <tr>
        <td width="90"><span class="new">NEW</span></td>
        <td>Отзыв от - <?= $review->name; ?></td>
        <td width="140"><a href="#" class="icon icon-edit" data-toggle="modal" data-target="#review_modal_<?= $review->id; ?>">редактировать</a></td>
        <td width="120"><a href="#" class="icon icon-remove delete_review" value = '<?= $review->id; ?>'>удалить</a></td>
      </tr>
    </table>
    <? require('admin_modal/review_modal.php'); ?>
    <?php endforeach; ?>
    <!--row end--->

  </div>
</div>
