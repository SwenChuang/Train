<?php

    // 要先引用Class 才可以 session_start, 否則讀取不到。
    spl_autoload_register(function ($className) {
        require_once $className . '.php';
    });

    session_start();


    $cart = new Cart('007');
    $_SESSION['cart'] = $cart;

    $cart->addProduct(12, 100);
    $cart->addProduct(23,47);
    $list = $cart->getList();

?>


Page1<hr/>
MemberId : <?php echo $cart->getMemberId(); ?>
<br/>
<?php
    foreach($list as $pid => $qty){
        echo "{$pid}:{$qty}<br/>";
    }
?>
<hr/>
<a href="swen63.php">Next</a>