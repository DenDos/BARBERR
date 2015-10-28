$(document).ready(function () {
  //////////////////////////////////////////////////////////////////////////////
  jQuery('#zapicModal').on('submit', function () {
    var select;
    var input;
    select = input_validate(".selectpicker",'#zapicModal');
    input =input_validate("input",'#zapicModal');
    input_validate("#date",'#zapicModal');

    if(select){
      error(select,$(this));
      return false;
    }
    else if(input){
      error(input,$(this));
      return false;
    }

    $('.zapicbtn').attr("disabled", "true").css('border',"3px solid rgba(0, 0, 0, 0.29)");
    $(this).find('.error').text('Идет запись...').css('color', 'inherit');

    ajax('#zapicModal','/ajax/ajaxZapic');
    return false;
  })

  //////////////МАСТЕРА/////////////////////////////////////////
  $('.add_master').unbind('submit').on('submit', function () {//Удалить отзыв
    ajax($(this),'/master/ajaxAddMaster');
    location.reload();
    return false;
  });
  $('.master_remove').on('click ', function () {//Удалить отзыв
    ajax('#master'+$(this).attr('value'),'/master/ajaxDelete', $(this).attr('value'));
    $('.modal-dialog').close();
    return false;
  });
  $('.update_service').on('click ', function () {//Удалить отзыв
    ajax_service_update('#service_edit_id_'+$(this).attr('value'),'/service/ajaxUpdate', $(this).attr('value'));
    location.reload();
    return false;
  });
  /////////////////////////////////////////////////////////////
  //////////////УСЛУГИ/////////////////////////////////////////
  $('.create_serv1ice').unbind('click').click(function () {//Удалить отзыв
    ajax('#create_service','/service/ajaxAddService');
    location.reload();
    return false;
  });
  $('.delete_service').on('click ', function () {//Удалить отзыв
    ajax('#service_edit_id_'+$(this).attr('value'),'/service/ajaxDelete', $(this).attr('value'));
    $('.modal-dialog').close();
    return false;
  });
  $('.update_service').on('click ', function () {//Удалить отзыв
    ajax_service_update('#service_edit_id_'+$(this).attr('value'),'/service/ajaxUpdate', $(this).attr('value'));
    location.reload();
    return false;
  });
  /////////////////////////////////////////////////////////////
  ////////////////Валидация формы вопрос/ответ////////////////////

  $('#question_form').on('submit', function () {
    var input =input_validate("input",'#question_form');
    if(input){
      error(input,'#question_form');
      return false;
    }
    $('#qBtn').attr("disabled", "true").css('color',"rgba(0, 0, 0, 0.29)");
    $(this).find('.msg_quest').text('Идет отправка данных...').css('color', 'inherit');
    ajax('#question_form','/question/ajaxZapic');
    return false;
  });

  $('#question_form').keyup(function(){
    input_validate("input",$(this));
  })

  //////////////////////////////////////////////////////////////

  //////////////AJAX C ВОПРОСАМИ//////////////////////

  $('.update').click(function(){//Обновление вопроса
    var form = $(this).parent(".adminQuestion");
    var id = $(this).attr('value');
    var select = $("#dropdown_question_id_" + $(this).attr('value')).val();
    var answer = $('.answer').val();
    ajax_question_update(form,select,id,answer);
//    location.reload();
    return false;
  })

  $('.delete').on('click', function () {
    ajax('#adminQuestion'+$(this).attr('value'),'/question/ajaxDelete', $(this).attr('value'));//Удаление вопроса
    $('.modal-dialog').close();
    return false;
  });


  ///////////////// AJAX C ОТЗЫВАМИ ////////////////
  $('.update_review').click(function(){//Опубликовать отзыв
    //debugger;
    var id = $(this).attr('value');
    var select = $("#dropdown_review_id_" + $(this).attr('value')).val();
    ajax_review_update(select,id);
    location.reload();
    return false;
  })
  $('.delete_review').on('click ', function () {//Удалить отзыв
    ajax('#review'+$(this).attr('value'),'/review/ajaxDelete', $(this).attr('value'));
    $('.modal-dialog').close();
    return false;
  });

  $('.review_form').on('submit', function () {//Добавить отзыв
    var input = input_validate("input",'.review_form')
    if(input ) {
      error(input,'.review_form');
      return false;
    }
    $(this).find('.error').text('Идет отправка данных...').css('color', 'inherit');
    ajax($(this),'/review/ajaxZapic');
    return false;
  });

  $('.reviewUpdate').click(function(){//Больше отзывов
    var jqxhr = $.getJSON("/review/ajaxMore")
    .success(function(data) {
      $('.firstReview').find('.name').text(data.msg[0].name);
      $('.firstReview').find('.date').text(data.msg[0].date);
      $('.firstReview').find('.text').text(data.msg[0].review);

      $('.secondReview').find('.name').text(data.msg[1].name);
      $('.secondReview').find('.date').text(data.msg[1].date);
      $('.secondReview').find('.text').text(data.msg[1].review);

      $('.thirdReview').find('.name').text(data.msg[2].name);
      $('.thirdReview').find('.date').text(data.msg[2].date);
      $('.thirdReview').find('.text').text(data.msg[2].review);
    })
    .error(function() {
      alert("Ошибка выполнения");
    })
    .complete(function() {
    });
    return false;
  })
  ////////////////////////////////////////////////
  /////////////////////////////////////УДАЛЕНИЕ ЗАПИСЕЙ//////////////
  $('.delete_pip').on('click', function () {//Удаление записей
    ajax('#modal_table_day_form','/ajax/ajaxDelete');
    location.reload();
    return false;
  });
  $('.remove_pips_all').on('click', function () {//Удаление записей
    ajax('#pips_all_form_id_if_need_' + $(this).attr('value'),'/ajax/ajaxDelete', $(this).attr('value'));
    return false;
  });

  $('.update_pip').click(function(){
    ajax('#modal_table_day_form','/ajax/ajaxUpdate');
    location.reload();
    return false;
  })

  ////////////////////////////////////
  $('.more').click(function(){//Больше вопросов
    var jqxhr = $.getJSON("/question/ajaxMore")
    .success(function(data) {
      $('.firstAnswer').find('.answer').text(data.msg[0].answer);
      $('.firstAnswer').find('.question').text(data.msg[0].question);
      $('.secondAnswer').find('.answer').text(data.msg[1].answer);
      $('.secondAnswer').find('.question').text(data.msg[1].question);
    })
    .error(function() {
      alert("Ошибка выполнения");
    })
    .complete(function() {
    });
    return false;
  })
  ////////////////////////////////////
  myConf();
  //////////////////////////////////////////////////

  $(".bootstrap-select").click(function(){
    input_validate('select','#zapicModal');
  });
  $("input").keyup(function(){
    input_validate('input','#zapicModal');
  });
  $("#date").change(function(){
    input_validate('#date','#zapicModal');
  });
});
