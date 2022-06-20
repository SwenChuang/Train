<?php
    session_start();
    // unset($_SESSION['var']); 需要代入每個值

    session_destroy(); //全部刪掉
    header("Location:login.php")
?>