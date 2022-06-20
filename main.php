<?php
include('sql.php');

spl_autoload_register(function ($className) {
    require_once $className . '.php';
});


session_start();

if (!$_SESSION['member']) header("Location:login.php");  //記住登入者,無SESSION資料踢出.`

$member = $_SESSION['member'];  
$cart = $_SESSION['cart'];

$icon = base64_encode($member->icon);

$sql = "SELECT count(*) as `sum` FROM food ";
$result = $mysqli->query($sql);
$data = $result->fetch_object();
$total = $data->sum;

define('RPP',10);

$page = 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}


$prev = $page ==1?1:$page -1; //上頁

$totalPages = ceil($total/RPP); //下頁
// $totalPages= $total%RPP==0?(int)($total/10):(int)($total/10 +1);

$next = $page ==$totalPages?$page : $page+1;


$start = ($page-1)*RPP;

$sql = "SELECT * FROM food ORDER BY id LIMIT {$start}," . RPP;  // 資料傳遞量少, 伺服器比較穩定。

$result = $mysqli->query($sql);

?>

Welcome, <?php echo  $member->realname; ?>
<img src="data:image/jpeg;base64,<?php echo $icon; ?>">
<hr />
<a href="logout.php">登出</a>
<hr />
<a href="?page=<?php echo $prev; ?>">Prev</a> | <a href="?page=<?php echo $next; ?>">Next</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tel</th>
        <th>City</th>
        <th>Town</th>
        <th>Image</th>
    </tr>
    <?php
        while($food = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$food->id}</td>";
            echo "<td>{$food->name}</td>";
            echo "<td>{$food->tel}</td>";
            echo "<td>{$food->city}</td>";
            echo "<td>{$food->town}</td>";
            echo "<td><img src='{$food->pic}' height='100px'</td>";
            echo "<tr/>";
        }





    ?>

</table>