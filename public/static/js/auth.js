jQuery(document).ready(function () {
     'use strict';

    jQuery('form#auth_form').submit(
        function (event) {
            event.preventDefault(); // отменяет отправку формы

            // получаем значения из input'ов
            let login = jQuery('#auth_login').val();
            let pwd = jQuery('#auth_password').val();

            //TODO: сделать проверку введенных данных

            // формируем ассоциативный массив
            let auth_data = {
                login: login,
                pwd: pwd
            };

            // формируем строку json с данными для отправки на сервер
            auth_data = 'auth_data=' + JSON.stringify(auth_data);

            jQuery.ajax({
                url: '/account/login',
                type: 'post',
                data: auth_data,
                success: function (response) {
                    console.log("response", response);
                    switch (response) {
                        case 'pwd is wrong':
                            document.getElementById('response').innerHTML = 'pwd is wrong';
                            break;
                        case 'user not found':
                            document.getElementById('response').innerHTML = 'user not found';
                            break;
                        case 'user auth':
                            window.location = "/account";
                            break;
                    }},
                error: function (err) {
                    console.log("err", err);
                }
            });
        })
     });