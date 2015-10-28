<div id="pips_master" role="tabpanel" class="tab-pane">
  <div class="col-xs-12">

    <div class="col-xs-6"></div>


    <div class="col-xs-12">
      <div class="col-xs-12">
        <span class="col-xs-6 text-center col-title">Мастера</span>
      </div>
      <div class="col-md-12">


        <!-- row start -->

        <?
foreach ($masters as $master){
  require('pips_sub_tmp/pips_all_masters_tmp.php');
}
        ?>
        <!-- row end -->


        <!-- row start adding -->

        <dl class="table inner-tabs btn">
          <dt><a data-toggle="modal" data-target="#pips_master_add_new"><span>Добавить мастера</span></a></dt>
        </dl>
        <form action="" method="post" class = "add_master">
          <div class="modal fade" id="pips_master_add_new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Новый мастер</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <div class="col-xs-4">
                      <label >Имя мастера</label>
                    </div>
                    <div class="col-xs-8">
                      <input type="name" class="form-control" name="name" placeholder="Ввелите имя мастера">
                    </div>
                  </div>
                  <input type="text" name="id" class="Qid hidden" value="2" placeholder="">

                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-cofirm">сохранить</button>
                  <button type="button" class="btn btn-delete" data-dismiss="modal">удалить</button>

                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- row end -->
      </div>
    </div>
  </div>
</div>
