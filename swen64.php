<?php
    spl_autoload_register(function ($className) {
        require_once $className . '.php';
    });
    session_start();

    $cart = $_SESSION['cart'];
    $list = $cart->getList();

?>

Page3
<hr />
MemberId : <?php echo $cart->getMemberId(); ?><br/>
List :
<br />
<?php
foreach ($list as $pid => $qty) {
    echo "{$pid}:{$qty}<br/>";
}
?>
<hr />