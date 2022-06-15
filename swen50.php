<meta charset="UTF-8"/>
<?php
    // 刪除
    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');


    $id = 4;
    $sql = "DELETE FROM csut WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    //var_dump($stmt);
    $stmt->bind_param('i', $id);
    $stmt->execute();


?>