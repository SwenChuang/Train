<meta charset="UTF-8"/>
<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');

    $cname ='Patrica'; $tel ='9487'; $birthday = '1999-05-04';

    $id = 2;
    $sql = "UPDATE csut SET cname = ?, tel = ?, birthday = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    //var_dump($stmt);
    $stmt->bind_param('sssi',$cname ,$tel ,$birthday, $id);
    $stmt->execute();


?>