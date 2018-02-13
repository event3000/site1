jQuery(document).ready(function () {
    'use strict';

    jQuery('form#reg_form').submit(
        function (event) {
            event.preventDefault(); // отменяет отправку формы

            // получаем значения из input'ов
            let userName = jQuery('#name').val();
            let login = jQuery('#login').val();
            let email = jQuery('#email').val();
            let pwd = jQuery('#password').val();

            //TODO: сделать проверку введенных данных

            // формируем ассоциативный массив
            let user_data = {
                userName: userName,
                login: login,
                email: email,
                pwd: pwd,
                state: 'user'
            };

            // формируем строку json с данными для отправки на сервер
            user_data = 'user_data=' + JSON.stringify(user_data);

            // ajax запрос
            jQuery.ajax({
                url: '/account/registration', // обработчик данных на сервере
                type: 'post', // метод, которым отправляем данные
                data: user_data, // отправляемые данные (строка json)
                success: function (response) {  // функция, которая будет обрабатывать ответ сервера
                    console.log("response", response);
                    if (response === 'user add') {
                        // window.location = "/";
                        jQuery("#regModal").modal('hide');
                        setTimeout(function () {
                            jQuery("#authModal").modal('show');
                        }, 400);
                    } else {
                        console.log("Пользователь не добавлен");
                    }
                },
                // функция, которая отработае, если не получится соедениться с сервером
                error: function (err) {
                    console.log("Error", err);
                }
            });
        }
    )

});