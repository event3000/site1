<!DOCTYPE html>
<html lang="ru">

<?php include("_head_meta.php");
      require_once("_validation.php");
 ?>


<body>
    <div id="wrapper">
       
    <?php include("_header.php") ?>

        <!-- CONTENT FULL-->
        <div id="fullcontent" class="row">
            <?php  require_once $view; ?>     
        </div>
        
            <?php include("_footer.php") ?>
    </div> 
</body>

</html>