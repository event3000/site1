<?php
session_start();

if (isset($_SESSION['auth'])): ?>
<?php include "header.php" ?>

    <p>Hello, <?php echo $_SESSION['login'];?></p>
    <p><a href="../Controllers/auth_user.php?logout=true">Выйти</a></p>

<?php include "footer.php" ?>
<?php else: header("Location:/"); ?>
<?php endif;?>
