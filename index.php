<?php 
    // переадресация подкл-ем отдельно реквайр или инклюд
    // function hello ($name) {
    //     return "Привет {$name}";
    // }

    function redirect_to ($new_location) {
        header("Location: " . $new_location);
        exit;
    }
    /////////


    if ( isset($_POST["submit"]) ) { // если отправка тру
        // форма отправлена
        $username = $_POST["username"]; // доб в переменную знач из ПОСТ массива 
        $password = $_POST["password"];

        if ($username == "aaa" && $password == "zzz") {
            // успешный вход
            redirect_to("blog.php");
        } else {
            $message = "Произошли ошибки"; // ошибка входа
        }
        
    } else {
        // форма не отправлена
        $username ="";
        $message = "Введите ваш логин и пароль";
    }

    // var_dump( $_POST ); // можно оставить для проверки 
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная - Health and Eating</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="description" content="" >
    <meta name="keywords" content="" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>

<body>
    <div id="wrapper">
       
       <!-- HEADER -->
        <div id="header" class="row">
            <div class="col-12">
                <div class="header-in">
        
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" alt="Health and Eating" title="Перейти на главную"></a>
                        </div>
                       

                        <ul class="menu1">
                            <li>
                                <a class="act-menu1" href="index.php">Главная</a>
                            </li>
                            <li>
                                <a href="blog.php">Блог</a>
                            </li>
                            <li>
                                <a href="shop.php">Магазин</a>
                            </li>
                            <li>
                                <a href="contacts.php">Контакты</a>
                            </li>
                        </ul>
                    
                </div>
            </div>    
        </div>
        
        <!-- CONTENT FULL-->
        <div id="fullcontent" class="row">
            <!-- CONTENT LEFT -->
            <div class="col-9">
                <div class="cont-left-in">

                    <h1>Добро пожаловать !</h1>

                    <img class="img-left" src="img/pic01.jpg" alt="">

                    <p>Мы рады Вас приветствовать на сайте <strong>Health and Eating!</strong></p>

                    <p>Цель нашего проекта – помочь Вам разобраться в правильном и здоровом питании. На сайте Вы также сможете найти <a href="blog.php">статьи и материалы</a> которые посвященны диетам, полезным рецептам, лечебному питанию, характеристикам и совместимости пищевых продуктов, информацию по витаминам, минералам, биодобавкам.</p>

                    <p>Вы также можете посетить наш <a href="shop.php">онлайн интернет магазин</a> - где вы сможете приобрести витамины, биодобавки и другие сопутствующие товары!</p>

                    <div class="row"></div>

                    <h2>Зачем это нужно мне?</h2>

                    <img class="img-right" src="img/pic02.jpg" alt="">

                    <p>Все знают, что к составлению ежедневного рациона питания нужно подходить ответственно. Те продукты, которые мы употребляем, влияют на наше самочувствие, состояние здоровья и настроение.Здоровый образ жизни за последние годы приобрел множество поклонников. Мы стали больше заботиться о себе - поменяли свои жизненные привычки, в том числе и в питании.</p>

                    <p>Если Вы еще не решились на подобные шаги, то можете с легкостью это сделать найдя рекомендации на нашем сайте. Здоровье – это наше богатство, предлагаем не откладывать изменения в своей жизни на завтра, а сделать это сегодня!</p>

                    <p>Надеемся Вам здесь будет интересно!</p>

                    <p><em>С уважением -  Health and Eating</em></p>
                </div>
            </div>

            <!-- CONTENT RIGHT -->
            <div class="col-3" >
                <div class="cont-right-in">
                    <h2>Авторизация:</h2>
                    <hr>

                    <form action="index.php" method="post">
                        <fieldset>
                            <div>
                                <label for="name">Имя&nbsp;&nbsp;</label>
                                <input type="text" name="username" id="name" placeholder="Введите ваше имя" value="<?php echo htmlspecialchars($username);  ?>" >
                            </div>

                            <div>
                                <label for="password">Pass</label>
                                <input type="password" name="password" id="password" placeholder="Введите ваш пароль" >
                            </div>

                            <div><?php echo $message; ?></div>
                            <br>
                            <input class="btn" type="submit" name="form-reg" value="Отправить">
                        </fieldset>
                    </form>
                        <br><br>

                    <h2>Опрос:</h2>
                    <hr>
                    <p>Какие новые разделы блога вы хотели бы видеть на нашем сайте?</p>

                    <form action="#" method="post">
                        <fieldset>
                            <div>
                                <label><input type="checkbox">Спортивное питание</label>
                            </div>
                            <div>
                                <label><input type="checkbox">Правильное питание для детей</label>
                            </div>

                             <div>
                                 <label for="poll_mess">Свой вариант</label>
                                 <textarea rows="" class="right-textarea" id="textarea-poll"></textarea>
                             </div>
                            <br>
                            <input class="btn" type="submit" name="form-poll" value="Отправить">
                        </fieldset>
                    </form>
                    
                </div>
            </div>

        </div>
        
        <!-- FOOTER -->
        <div id="footer" class="row">
            <div class="col-12">
                <div class="footer-in">
                    <p>Health and Eating © 2017</p>
                </div>        
            </div>  
        </div>

    </div>
</body>

</html>