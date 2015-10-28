<form action="" method="post" id="master<?= $master->id;?>">
  <input type="text" name="id" class="hidden" value="<?= $master->id;?>" placeholder="">
  <table class="table inner-tabs">
    <tr>
      <td width="50"><?= $master->id;?></td>
      <td><?= $master->name;?></td>
      <td></td>
      <td width="140">
        <a href="#" class="edit" data-toggle="modal" data-target="#pips_master_list_id_if_need_<?= $master->id;?>">редактировать</a>
        <a href="#" class="remove master_remove" value = '<?= $master->id;?>'>удалить</a>
      </td>
    </tr>
  </table>
  <? require('masters_modal.php'); ?>
</form>
