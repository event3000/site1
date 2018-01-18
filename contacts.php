<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Контакты - Health and Eating</title>
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
                            <a href="index.php">Главная</a>
                        </li>
                        <li>
                            <a href="blog.php">Блог</a>
                        </li>
                        <li>
                            <a href="shop.php">Магазин</a>
                        </li>
                        <li>
                            <a class="act-menu1" href="contacts.php">Контакты</a>
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

                    <h1>Контакты</h1>

                    <p><strong>Если у вас есть какие либо вопросы, Вы всегда сможете с нами связаться через контактную форму обратной связи:</strong></p>

                    <form action="#" method="post">
                        <fieldset class="fieldset-contact">
                            <div>
                                <label for="name">Имя&nbsp;&nbsp;</label>
                                <input type="text" name="" id="name-cnt" placeholder="Введите ваше имя" required>
                            </div>

                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="" id="email-cnt" placeholder="Введите ваш email" required>
                            </div>
                            <br>
                             <div>
                                 <label for="text_area">Ваше сообщение</label><br>
                                 <textarea class="right-textarea" rows="6" id="textarea-cnt"></textarea>
                             </div>


                            <br>
                            <input class="btn" type="submit" name="" value="Отправить">
                        </fieldset>
                    </form>
                    
                </div>
            </div>

            <!-- CONTENT RIGHT -->
            <div class="col-3" >
                <div class="cont-right-in">
                    <h2>Регистрация:</h2>
                    <hr>

                    <form action="#" method="post">
                        <fieldset>
                            <div>
                                <label for="name">Имя&nbsp;&nbsp;</label>
                                <input type="text" name="" id="name" placeholder="Введите ваше имя" required>
                            </div>

                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="" id="email" placeholder="Введите ваш email" required>
                            </div>
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