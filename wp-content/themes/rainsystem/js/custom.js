jQuery(function ($) {
    var inheight = document.getElementById("container-width").offsetWidth;
    var paddT = $('#container-width').innerWidth() - $('#container-width').width();
    var trueheight = inheight - paddT;
    document.getElementById('line-fix').setAttribute("style", "width:" + trueheight + "px");
    window.onresize = function (event) {
        var inheight = document.getElementById("container-width").offsetWidth;
        var paddT = $('#container-width').innerWidth() - $('#container-width').width();
        var trueheight = inheight - paddT;
        document.getElementById('line-fix').setAttribute("style", "width:" + trueheight + "px");
    };

    // вешаем маску на телефон
    $('input[name="phone"]').inputmask({
        mask: '+38(099)999-99-99',
        showMaskOnHover: false,
    });


    $(".uk-form").submit(function (e) {
        e.preventDefault();
        let form_data = $(this).serializeArray();
        let name;
        try { // statements to try
            name = form_data[1].value; // function could throw exception
        }
        catch (e) {
            name = "не указано";
        }
        $.ajax({
            type: 'POST',
            url: window.wp_data.ajax_url,
            dataType: 'text', // Add datatype
            data: { // передаем параметры отправляемого запроса
                action: 'myaction', // вызываем хук который обработает наш ajax запрос
                name: name,
                tel: form_data[0].value,
            },
        }).done(function (data) {
            $("#tel").css({"display": "none"});
            UIkit.modal('#result-form').show();
            // $("#result-form").css({"display": "block"});
            $(".modal-dg__title").html("Ваши данные успешно отправлены! Мы свяжемся с вами в ближайшее время.");
        }).fail(function (data) {
            $(".modal-dg__title").html("К сожалению, что-то пошло не так, ваши данные не отправлены. Попробуйте связаться с нами.");
        });
    });



});