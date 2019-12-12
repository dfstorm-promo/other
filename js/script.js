$(function(){
    $('.contact__button').on('click', function(e){
        e.preventDefault();
        let check = true;
        $('input, textarea').each(function(){
            if(!$(this).hasClass('not_error')){
                check = false;
            }
        });
        if(check){
            add_comment();
        }else{
            $('input, textarea').each(check_inputs);
            return false;
        }
    });

    $('input, textarea').on('blur', check_inputs);

});

function add_comment(){
    let name = $('input[name="contact_name"]').val();
    let mail = $('input[name="contact_mail"]').val();
    let text = $('textarea[name="contact_text"]').val();
    let box = "<div class=\"col-xl-4 comments__block\">\n" +
        "<div class=\"comments__head d-flex align-items-center justify-content-center\"><p>"+ name + "</p></div>\n" +
        "<div class=\"comments__body\">\n" +
        "<div class=\"comments__mail\">" + mail + "</div>\n" +
        "<div class=\"comments__text\">\n" + text + "</div>\n" +
        "</div>\n" +
        "</div>";
    $.ajax({
        url: 'index.php',
        type: 'post',
        data: {'name': name, 'mail': mail, 'text': text},
        success: function(id){
            console.log(id);
            $('.comments__box').append(box);
            $('input, textarea').each(function(){
                $(this).val('');
                $(this).removeClass('not_error');
            });
        },
        error: function(){
            console.log('Error');
        }
    });
}

function check_inputs(){
    let type = $(this).attr('type');
    let val = $(this).val();
    if(type == 'text'){
        if (val.length >= 3){
            $(this).removeClass('error').addClass('not_error');
            $(this).next('.error-box').html('');
        }else{
            $(this).removeClass('not_error').addClass('error');
            $(this).next('.error-box').html('Имя должно содержать не меньше 3 символов!');
        }
    }
    if(type == 'email'){
        let email_mask = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        if (val !== '' && email_mask.test(val)){
            $(this).removeClass('error').addClass('not_error');
            $(this).next('.error-box').html('');
        }else{
            $(this).removeClass('not_error').addClass('error');
            $(this).next('.error-box').html('Введите корректный email!');
        }
    }
    if(!type){
        if (val.length >= 5){
            $(this).removeClass('error').addClass('not_error');
            $(this).next('.error-box').html('');
        }else{
            $(this).removeClass('not_error').addClass('error');
            $(this).next('.error-box').html('Комментарий должен содержать не меньше 5 символов!');
        }
    }
}