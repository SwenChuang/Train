<?php   // *****程式寫完要測試
    if(!isset( $_GET['account'])) echo -1;  //die(); //exit()
    
    include('sql.php');

    $account = $_GET['account'];
    // $account = '123';
    $sql = "SELECT account FROM memder WHERE account='{$account}' ";
    $result = $mysqli->query($sql);

    echo $result-> num_rows;

?>