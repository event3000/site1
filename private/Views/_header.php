       <!-- HEADER -->
        <div id="header" class="row">
            <div class="col-12">
                <div class="header-in">
        
                        <div class="logo">
                            <a href="/"><img src="../static/img/logo.png" alt="Health and Eating" title="Перейти на главную"></a>
                        </div>
                       

                        <ul class="menu1">
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/" ) {echo "class='act-menu1'";} ?> href="/">Главная</a>
                            </li>
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/blog" ) {echo "class='act-menu1'";} ?> href="blog">Блог</a>
                            </li>
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/shop" ) {echo "class='act-menu1'";} ?> href="shop">Магазин</a>
                            </li>
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/contacts" ) {echo "class='act-menu1'";} ?> href="contacts">Контакты</a>
                            </li>
                        </ul>


                    
                </div>
            </div>    
        </div>

        