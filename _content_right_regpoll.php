            <!-- CONTENT RIGHT -->
            <div class="col-3" >
                <div class="cont-right-in">
                    <h2>Авторизация:</h2>
                    <hr>

            
        
                    <form action="index.php" method="post">
                        <fieldset>
                    <?php echo $message; ?>
                    <?php echo form_errors($errors); ?>
    
    
                            <div>
                                <br>
                                <label for="name">Имя&nbsp;&nbsp;</label>
                                <input type="text" name="username" placeholder="Введите ваше имя" value="<?php echo htmlspecialchars($username); ?>" />
                            </div>

                            <div>
                                <label for="password">Pass</label>
                                <input type="password" name="password" value="" placeholder="Введите ваш пароль" />
                            </div><br>

                            <input class="btn" type="submit" name="submit" value="Отправить" />
                        <fieldset>
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