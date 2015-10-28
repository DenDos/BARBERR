</div>
<div class="container container-table">
  <div class="row vertical-center-row">
    <div class="text-center col-md-4 col-md-offset-4">
      <? if(isset($err)): ?>
        <div class="alert alert-danger" role="alert"><?=$message?></div>
      <? else: ?>
        <div class="alert alert-success" role="alert"><?=$message?></div>
      <? endif; ?>
      <form action="" method="post">
        <input type="text" name="login"  id=""   value ="" placeholder="логин" >
        <input type="password" name="password"  id=""   value ="" placeholder="пароль" >
        <button class="btn btn-default center" style="margin-top:20px;" type="submit">Войти</button>
      </form>
    </div>
  </div>
</div>
