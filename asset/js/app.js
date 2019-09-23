$(function () {

    var form = $("#add-form"),
        input = form.find('#text');

    input.val('').focus();
    form.on('submit', function (e) {

       e.preventDefault();

       var req = $.ajax({
           url: form.attr('action'),
           type: "POST",
           data: form.serialize()
       });
        req.done(function (data) {
           if (data === 'success'){
              var li = $('<li class="list-group-item">'+ input.val() +'</li>');


              li.appendTo('.list-group').css({backgroundColor: '#00bc8c'}).delay(200).animate({backgroundColor: '#ffffff'});
          }
       });
    });


    input.on('keypress', function (e) {
       if(e.which===13){
           form.submit();
           return false;
       }
    });

});