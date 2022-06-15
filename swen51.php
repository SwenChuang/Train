<meta charset="UTF-8"/>
<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');



    // $sql = "SELECT * FROM csut";
    // $result = $mysqli->query($sql);
    //var_dump($result);

    // echo $result->num_rows . '<br/>';

    //物件//////////////////////////////////////////////////////////////////

    // while( $row = $result->fetch_object()){
    //     echo "{$row->id}:{$row->cname}:{$row->tel}:{$row->birthday}<br/>";
    // }

    // 陣列/////////////////////////////////////////////////////////////////

    // while($row = $result->fetch_array()){
    //     echo "{$row['id']}:{$row['cname']}:{$row['tel']}:{$row['birthday'] } <br/>";
    // }

    $sql = "SELECT id,cname,tel,birthday FROM csut"; //需要綁定,要把資料欄位寫出來。  如果有別名要用別名


    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();

    echo $stmt->num_rows() .'<br/>';

    $stmt->bind_result($id,$cname,$tel,$birthday);
    while($stmt->fetch()){
        echo "{$id}:{$cname}:{$tel}:{$birthday}<br/>";
    }

    $stmt->free_result();
    $stmt->close();



?>