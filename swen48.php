<meta charset="UTF-8"/>
<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    
    // if($mysqli){   確認是否連接
    //     echo 'OK';
    // }else{
    //     echo 'XX';
    // }
    
    $mysqli->set_charset('utf8');

    
    // 會被隱碼攻擊

    // $sql = "INSERT INTO csut(cname,tel,birthday) VALUES ('Swen','123','2000-01-02')";
    // $result = $mysqli->query($sql);
    // if($result){
    //     echo 'Success';
    // }else{
    //     echo 'Failure';
    // }

    $cname ='Swen'; $tel ='9876'; $birthday = '1999-03-04';
    $sql = "INSERT INTO csut(cname,tel,birthday) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    //var_dump($stmt);
    $stmt->bind_param('sss',$cname ,$tel ,$birthday);
    $stmt->execute();


?>