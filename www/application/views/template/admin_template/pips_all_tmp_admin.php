
<div id="pips_all" role="tabpanel" class="tab-pane">
  <div class="col-xs-12">
    <table class="table table-header">
      <tr>
        <td width="50"></td>
        <td width="90">Имя</td>
        <td width="130">Телефон</td>
        <td width="240">Услуга</td>
        <td width="110">Мастер</td>
        <td width="90">Дата</td>
        <td width="10">Время</td>
        <td>
        </td>
      </tr>
    </table>
  </div>

  <div class="col-xs-12">

<? foreach($all_clients as $client): ?>
   <? require('admin_modal/pips_modal_all.php'); ?>
    <!-- row start -->
    <form action="" method="post" id="pips_all_form_id_if_need_<?= $client->id;?>">
      <table class="table inner-tabs" id="pips_all_id_is_1">
        <tr>
          <td width="50"><?= $client->id;?></td>
          <td width="100"><?= $client->name;?></td>
          <td width="150"><?= $client->phone;?></td>
          <td width="240"><?= $client->usluga;?></td>
          <td width="110"><?= $client->master;?></td>
          <td width="90"><?= $client->date;?></td>
          <td  width="100"><?= $client->time;?></td>
          <td>
            <input type="text" name="id" class="Qid hidden" value="<?= $client->id;?>" placeholder="">
            <a href="#" class="edit" data-toggle="modal" data-target="#modal_table_all_<?= $client->id;?>">редактировать</a><br>
            <a href="#" class="remove remove_pips_all" value = '<?= $client->id;?>'>удалить</a>
          </td>
        </tr>
      </table>
    </form>
    <? endforeach; ?>
    <!-- row end -->




  </div>
</div>
