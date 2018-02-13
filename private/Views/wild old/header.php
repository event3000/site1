<div class="social">
    <div class="row">
        <div class="col-xs-9 col-sm-12">
            <p>WildEnergy Concert</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-sm-1">
            <img src="/static/img/fb_icon-icons.com_65434(1).png">
        </div>
        <div class="col-xs-3 col-sm-1">
            <img src="/static/img/instagram_icon-icons.com_65435.png">
        </div>
        <div class="col-xs-3 col-sm-1 col-sm-offset-8 col-md-offset-0">
            <img src="/static/img/twitter_icon-icons.com_65436.png">
        </div>
        <div class="col-xs-3 col-sm-1">
            <img src="/static/img/google_icon-icons.com_65440.png">
        </div>
    </div>
</div>

<div class="row">
    <ul class="menu">
        <li class="col-lg-offset-3 col-lg-1 col-md-offset-3 col-md-1 col-sm-offset-0 col-sm-2">
            <a href="/">Главная</a>
        </li>
        <li class="col-lg-1 col-md-1 col-sm-2"><a href="/shows">Афиша</a></li>
        <li class="col-lg-1 col-md-1 col-sm-2"><a href="#">Галерея</a></li>
        <li class="col-lg-1 col-md-1 col-sm-2"><a href="/pastshows">Архив</a></li>
        <li class="col-lg-1 col-md-1 col-sm-2"><a href="#">Контакты</a></li>
        <li class="col-lg-1 col-md-1 col-sm-2"><a data-toggle="modal" data-target="#authModal">Аккаунт</a></li>
    </ul>
</div>


<!-- Modal -->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center" id="regModalLabel">Регистрация</h4>
            </div>
            <div class="modal-body custom-modal-body">
                <form id="reg_form" class="form-horizontal" method="post">

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Ваше имя</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user fa" aria-hidden="true"></i>
                                    </span>
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Введите Ваше имя"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Ваш Email</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Введите Ваш Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Логин</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="login" id="login"  placeholder="Введите имя логин"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Пароль</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Введите пароль"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Подтвердите пароль</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Подтвердите пароль еще раз"/>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <div>
                    У Вас уже есть аккаунт? <a id="auth_modal">Войти</a>
                </div>
            </div>
            <div class="modal-footer">
                <button id="reg_btn" form="reg_form" type="submit" class="btn btn-primary custom-btn-primary">Зарегистрироваться</button>
                <button form="reg_form" type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
            </div>
        </div>
    </div>
</div>


<!--авторизация-->
<div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center" id="authModalLabel">Авторизация</h4>
                <p id="response"></p>
            </div>
            <div class="modal-body custom-modal-body">
                <form id="auth_form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="auth_login" class="cols-sm-2 control-label">Логин</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="login" id="auth_login"  placeholder="Введите логин"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="auth_password" class="cols-sm-2 control-label">Пароль</label>
                        <div class="cols-sm-10 off">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="auth_password"  placeholder="Введите пароль"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me">
                        <label class="form-check-label" for="remember_me">Запомнить меня</label>
                    </div>
                </form>
                <br>
                <div>
                    У Вас еще нет аккаунта? <a id="reg_modal">Регистрация</a>
                </div>
            </div>
            <div class="modal-footer">
                <button id="auth_btn" form="auth_form" type="submit" class="btn btn-primary custom-btn-primary">Войти</button>
                <button form="auth_form" type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
            </div>
        </div>
    </div>
</div>