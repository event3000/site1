       <!-- HEADER -->
        <div id="header" class="row">
            <div class="col-12">
                <div class="header-in">
        
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" alt="Health and Eating" title="Перейти на главную"></a>
                        </div>
                       

                        <ul class="menu1">
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/index.php" ) {echo "class='act-menu1'";} ?> href="index.php">Главная</a>
                            </li>
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/blog.php" ) {echo "class='act-menu1'";} ?> href="blog.php">Блог</a>
                            </li>
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/shop.php" ) {echo "class='act-menu1'";} ?> href="shop.php">Магазин</a>
                            </li>
                            <li>
                                <a <?php if ( $_SERVER['REQUEST_URI'] === "/contacts.php" ) {echo "class='act-menu1'";} ?> href="contacts.php">Контакты</a>
                            </li>
                        </ul>


                    
                </div>
            </div>    
        </div>

        