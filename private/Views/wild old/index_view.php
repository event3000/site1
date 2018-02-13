<?php include "header.php";?>
<div id="wild_slider" class="carousel slide" data-ride="carousel">
    <!--&lt;!&ndash; Indicators &ndash;&gt;-->
    <!--<ol class="carousel-indicators">-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
    <!--</ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
        <div class="item active wild-slider">
            <img src="..." alt="...">
            <div class="carousel-caption">
                <a href="#">Подробнее</a>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#wild_slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#wild_slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="wild-container">
    <div class="row">
        <? foreach ($shows as $show): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 afisha">
                <div>
                    <!--                <img src="/static/img/--><?// echo $show['image']?><!--.jpg">-->
                    <span><? echo $show['date']?></span>
                    <span><? echo $show['place']?></span>
                    <span><? echo $show['title']?></span>
                    <span><? echo $show['country']?></span>
                    <span><? echo $show['genre']?></span>
                    <a href="/show/<? echo $show['image']?>">Подробнее</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

<div class="row info">
    <div class="col-lg-5 col-md-5 future"></div>
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 past"></div>

</div>
<?php include "footer.php";?>