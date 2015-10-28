function ajax_service_update(form,adress, id){
  jQuery.ajax({
    type: "POST",
    url: "/index.php"+adress,
    dataType: "json",
    data: jQuery(form).serialize(),
    success: function (data) {
    },
    error: function (xhr, str) {
      alert("Возникла ошибка!");
    }
  });
}
function ajax(form,adress, id){
  jQuery.ajax({
    type: "POST",
    url: "/index.php"+adress,
    dataType: "json",
    data: jQuery(form).serialize(),
    success: function (data) {
      $("#question" + id).fadeOut('slow');
      $("#adminQuestion" + id).fadeOut('slow');
      $("#review_id_" + id).fadeOut('slow');
      $("#service_item_id_" + id).fadeOut('slow');
      $("#master" + id).fadeOut('slow');
      $("#pips_all_form_id_if_need_" + id).fadeOut('slow');
      if (data.result) {
        $(form).find('.error').css('color', '#b0cd49');
        $(form).find('.msg_quest').css('color', '#b0cd49');
        $(form).find('.time').css('border-color','#c2c4c2');
      }
      else
      {
        $(form).find('.error').css('color', 'red');
        $(form).find('.msg_quest').css('color', 'red');
        $(form).find('.time').css('border-color','red');
      }
      $(form).find('.error').text(data.msg);
      $(form).find('.msg_quest').text(data.msg);
      $('.zapicbtn').removeAttr("disabled").css('border',"3px solid rgb(0, 0, 0)");
      $('#qBtn').removeAttr("disabled").css('color',"black");
    },
    error: function (xhr, str) {
      alert("Возникла ошибка!");
    }
  });
}

function ajax_question_update(data1,status,id,answer){
  jQuery.ajax({
    type: "POST",
    url: "/index.php/question/ajaxUpdate",
    dataType: "json",
    data:{"status":status,"id":id,"answer":answer},
    cache: false,
    success: function (data) {
      data1.parent('.questions').find('.Sanswer').text(answer);
      data1.parent('.questions').find('.status').text(status);
      location.reload();
    },
    error: function (xhr, str) {
      alert("Возникла ошибка!");
    }
  });
}
function ajax_review_update(status,id){
  jQuery.ajax({
    type: "POST",
    url: "/index.php/review/ajaxUpdate",
    dataType: "json",
    data:{"status":status,"id":id},
    cache: false,
    success: function (data) {
      return true;
    },
    error: function (xhr, str) {
      alert("Возникла ошибка!");
    }
  });
}
////////////////////////////////////////////////////////////////////////
function error(data,form){
  $(form).find('.'+data).css('border-color', 'red');
  $(form).find('.error').text('Заполните пожалйуста все необходимые поля').css('color', 'red');
}


function input_validate(validate,form){
  var empty;
  $(form).find(validate).each(function() {
    if (!$(this).val()) {
      if ($(this).attr('name') =='comment') return ;
      empty = $(this).attr('name');
      $('.'+$(this).attr('name')).css('border-color', 'red');
    }
    else{
      $('.'+$(this).attr('name')).css('border-color', '#b0cd49');
    }
  })
  return empty;
}
