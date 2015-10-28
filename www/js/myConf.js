function myConf(){
  var date = new Date();
  date.setDate(date.getDate());
  ////////////////////////////////////////////////////////
  if ($(window).width() <= '1024') {
    $('#date').attr('type', 'date' );
  }
  else{
    $('#date').datepicker({
      format: "yyyy-mm-dd",
      language: "ru",
      autoclose: true,
      startDate: date
    });
    $('#date1').datepicker({
      format: "yyyy-mm-dd",
      language: "ru",
      autoclose: true,
      startDate: date
    });
  }
  $("#phone").mask("+7(999) 999-9999");
  $(".Qphone").mask("+7(999) 999-9999");
  $(".Rphone").mask("+7(999) 999-9999");
  //$('.collapse').dropdown()
}
