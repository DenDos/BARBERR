<div id="zapic" tabindex="-1" role="dialog" aria-labelledby="zapicLabel" class="modal fade">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content clearfix">
      <button type="button" class="close visible-xs-block" data-dismiss="modal" aria-label="Close" style='margin:10px;'><span aria-hidden="true">&times;</span></button>
      <h3>Записаться на услугу</h3>
      <form action="" method="post" id="zapicModal">
        <div class="col-md-6 btnZap">
          <select class="selectpicker usluga" name="usluga" >
            <option value='' disabled selected style='display:none;'>Услуга</option>
            <option value='' disabled >Выберите услугу:</option>
            <? foreach($services as $service ):?>
              <option><?= $service->name?></option>
            <? endforeach;?>
          </select>
          <select class="selectpicker master" name="master"  >
            <option value='' disabled selected  style='display:none;'>Мастер</option>
            <option disabled >Выберите мастера:</option>
            <? foreach($masters as $master ):?>
              <option><?= $master->name?></option>
            <? endforeach;?>
          </select>
          <input type="text" placeholder="Дата" name="date" id='date' class='date' >
          <div class="time hour">
            Время:
            <select class="selectpicker hour" name="hour" >
              <option selected value = '' >00</option>
              <option  >09</option>
              <option>10</option>
              <option>11</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
            </select>
            -
            <select class="selectpicker hour minutes " name="minutes" >
              <option  selected >00</option>
              <option>15</option>
              <option>30</option>
              <option>45</option>
            </select>
          </div>

        </div>
        <div class="col-md-6 btnZap">
          <input type="text" placeholder="Имя" name="name" class = 'name' >
          <input type="text" placeholder="Телефон" id='phone' name="phone" class = 'phone' >
          <input type="text" placeholder="Комментарий" class="question-input comment" name="comment" id = 'comment'>
        </div>

        <div class= "clearfix col-md-12 btnZap">
          <p class='error'></p>
          <div class="loh">
            <button type = 'submit' class="button_zapic button button--ujarak button--border-thin button--text-thick" name="btn">Записаться</button>
          </div>
        </div>


      </form>
    </div>
  </div>
</div>
