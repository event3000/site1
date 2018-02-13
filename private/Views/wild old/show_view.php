<?php include "header.php";?>

<div class="show">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-3 show-info">
            <span><? echo $show['date']; ?></span>
            <span><? echo $show['place']; ?></span>
            <span><? echo $show['title']; ?></span>
            <span><? echo $show['country']; ?></span>
            <span><? echo $show['genre']; ?></span>
        </div>
        <div class="col-lg-offset-3 col-lg-3 show-buy">
            <a href="#">Купить билет</a>
        </div>
    </div>
</div>

<?php include "footer.php";?>
