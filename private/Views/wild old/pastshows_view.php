<?php include "header.php";?>

<div class="wild-container">
    <div class="row past">
        <? foreach ($shows as $show): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 afisha">
                <div>
                    <!--                <img src="/static/img/--><?// echo $show['image']?><!--.jpg">-->
                    <span><? echo $show['date']?></span>
                    <span><? echo $show['place']?></span>
                    <span><? echo $show['title']?></span>
                    <span><? echo $show['country']?></span>
                    <span><? echo $show['genre']?></span>
<!--                    ссылка на галерею-->
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

<?php include "footer.php";?>
