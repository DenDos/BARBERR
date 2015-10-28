
<div id="pips" role="tabpanel" class="tab-pane active">
  <form action="" class="admin_pips_day">
    <div class="col-xs-5">
      <div class="row">
        <div class="col-xs-3">
          <span class="title padd">УСЛУГА
          </span>
        </div>
        <div class="col-xs-9">
          <select class="select admin_select" name="service" >
            <option value='' disabled selected style='display:none;'><?= empty($service) ? "Услуга" : $service ;?></option>
            <option value='' disabled >Выберите услугу:</option>
            <? foreach($services as $service ):?>
            <option><?= $service->name?></option>
            <? endforeach;?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="title padd">МАСТЕР
          </span>
        </div>
        <div class="col-xs-9">
          <select class="select admin_select" name="master" >
            <option value='' disabled selected style='display:none;'><?= empty($master) ? "Мастер" : $master ;?></option>
            <option value='' disabled >Выберите услугу:</option>
            <? foreach($masters as $master ):?>
            <option><?= $master->name?></option>
            <? endforeach;?>
          </select>
        </div>
      </div>
    </div>
    <div class="col-xs-7">
      <div class="row">
        <div class="col-xs-3">
          <span class="title padd">Дата
          </span>
        </div>
        <div class="col-xs-9">
          <select name="status" id="dropdown_select_master" class="rselect hidden">
            <option value="0" selected>1 октября</option>
            <option value="1">2 октября</option>
            <option value="2">3 октября</option>
          </select>
          <input type="text" placeholder="<?= empty($date) ? "Дата" : $date ;?>" name="date" id='date' class='date' >
        </div>
      </div>
      <div class="col-xs-12">
        <button type="submit" class="btn btn-cofirm pull-right find_pips"><a href="/admin" class='btn-delete'>Сбросить</a></button>
        <button type="submit" class="btn btn-cofirm pull-right find_pips">Показать записи</button>
      </div>
      <!--
<div class="row">
<div class="col-xs-12">
<ul role="tablist" class="nav pull-right nav-tabs wekenddayly">
<li role="presentation" class="active"><a href="#tab-day" aria-controls="home" role="tab" data-toggle="tab">День</a></li>
<li role="presentation"><a href="#tab-week" aria-controls="home" role="tab" data-toggle="tab">Неделя</a></li>
</ul>
</div>
</div>
-->
    </div>
  </form>


  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab-day">
      <table class="table table-day">
        <?
$i = 9;
$client_time = array();
$client_name = array();
$client_phone = array();
$client_comment = array();
$flag=0;
foreach ($clients as $client) {
  $c = explode(":", $client->time);
  $client_time[(int)$c[0]][$c[0]] = $c[0];
  $client_time[(int)$c[0]][0] = $c[1];
  $client_name[(int)$c[0]] = $client->name;
  $client_phone[(int)$c[0]] = $client->phone;
  $client_comment[(int)$c[0]] = $client->comment;
  $client_id[(int)$c[0]] = $client->id;
  require('admin_modal/pips_modal.php');
}
        ?>

        <?php while ($i <= 20): ?>
        <? $k=0; ?>
        <tbody>
          <?php while ($k <= 3): ?>
          <tr>
            <?
$time = $k*15;
if ($k == 0) $time = '00';
            ?>
            <? if($k == 0): ?>
            <td class="big" valign="top" width="30"><?= $i; ?></td>
            <? else:?>
            <td></td>
            <? endif;?>
            <td width="30"><?= $time; ?></td>
            <? foreach ($clients as $client) :?>
            <? $c = explode(":", $client->time); ?>
            <? if($c[0] == $i && $c[1] == $time):?>
            <td data-write="edit" class="pipsA" data-hour="<?= $i?>" data-time="0" data-id="id12">
              <table class="table table-absolute">
                <thead><tr><td><a href="#" class="link" data-toggle="modal" data-target="#modal_table_day<?= $client->id;?>" style="color:black;"><?= $client->name;?></a></td></tr></thead>

                <tbody>
                  <tr><td>имя - <?= $client->name;?></td></tr>
                  <tr><td>комментарий - <?= $client->comment;?></td></tr>
                  <tr><td>телефон: <?= $client->phone;?></td></tr>
                </tbody>
              </table>
            </td>
            <? $flag=1; ?>
            <? break; ?>
            <? else: ?>
            <? $flag=0; ?>
            <? endif; ?>
            <? endforeach; ?>

            <? if($flag==0): ?>
            <td data-write="empty"  class="pipsA" data-hour="10" data-time="15"><span></span></td>
            <? endif; ?>

            <? if($k == 0): ?>
            <td class="big" valign="top" width="30"><?= $i; ?></td>
            <? else:?>
            <td></td>
            <? endif;?>
            <td width="30"><?= $time; ?></td>
          </tr>
          <? $k++; ?>
          <?php endwhile; ?>
        </tbody>
        <? $i++; ?>
        <?php endwhile; ?>
      </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="tab-week">
      <table class="table table-day">
        <thead>
          <tr>
            <td class="nobg"></td>
            <td class="nobg"></td>
            <td><span></span></td>
            <td><span></span></td>
            <td><span></span></td>
            <td><span></span></td>
            <td><span></span></td>
            <td><span></span></td>
            <td><span></span></td>
            <td class="nobg"></td>
            <td class="nobg"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="big" valign="top" width="30">9</td>
            <td width="30">00</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="0"><span></span></td>
            <td class="big" valign="top" width="30">9</td>
            <td width="30">00</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">15</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="15"><span></span></td>
            <td></td>
            <td width="30">15</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">30</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="30"><span></span></td>
            <td></td>
            <td width="30">30</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">45</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="9" data-time="45"><span></span></td>
            <td></td>
            <td width="30">45</td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <td class="big" valign="top" width="30">10</td>
            <td width="30">00</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="edit" data-hour="10" data-time="0" data-id="res id">
              <span></span>
              <table class="table table-absolute">
                <thead><tr><td>10 00 - 11 00</td></tr></thead>
                <tbody>
                  <tr><td>имя - Иван</td></tr>
                  <tr><td>комментарий - все супер</td></tr>
                  <tr><td>телефон: +7 123 123 12 23</td></tr>
                </tbody>
              </table>
            </td>
            <td data-write="empty" data-hour="10" data-time="00"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="00"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="00"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="00"><span></span></td>
            <td class="big" valign="top" width="30">10</td>
            <td width="30">00</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">15</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="15"><span></span></td>
            <td></td>
            <td width="30">15</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">30</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="30"><span></span></td>
            <td></td>
            <td width="30">30</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">45</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="10" data-time="45"><span></span></td>
            <td></td>
            <td width="30">45</td>
          </tr>
        </tbody>



        <tbody>
          <tr>
            <td class="big" valign="top" width="30">11</td>
            <td width="30">00</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="0"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="0"><span></span></td>
            <td class="big" valign="top" width="30">11</td>
            <td width="30">00</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">15</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="15"><span></span></td>
            <td data-write="edit" data-hour="11" data-time="15">
              <span></span>
              <table class="table table-absolute">
                <thead><tr><td>11 15 - 12 15</td></tr></thead>
                <tbody>
                  <tr><td>имя - Иван</td></tr>
                  <tr><td>комментарий - все супер</td></tr>
                  <tr><td>телефон: +7 123 123 12 23</td></tr>
                </tbody>
              </table>
            </td>
            <td data-write="empty" data-hour="11" data-time="15"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="15"><span></span></td>
            <td></td>
            <td width="30">15</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">30</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="30"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="30"><span></span></td>
            <td></td>
            <td width="30">30</td>
          </tr>
          <tr>
            <td></td>
            <td width="30">45</td>
            <td class="blank"><span></span></td>
            <td class="blank"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="45"><span></span></td>
            <td data-write="empty" data-hour="11" data-time="45"><span></span></td>
            <td></td>
            <td width="30">45</td>
          </tr>
        </tbody>


      </table>
    </div>
  </div>
</div>


