<?php
    include('sql.php');

    spl_autoload_register(function($className){
        require_once $className . '.php';
    }); //自動載類別 *************************************

    session_start();

    if(isset($_REQUEST['account'])) header("Location:login.php");

    $account = $_REQUEST['account']; $passwd = $_REQUEST['passwd'];
    $sql = "SELECT * FROM memder WHERE account = ?";
    
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s',$account);
    $stmt->execute();


    


    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $member = $result->fetch_object();
        if(password_verify($passwd,$member->passwd)){
            $_SESSION['member']=$member;
            $_SESSION['cart'] = new Cart();
            header("Location:main.php");
        }else{
            header("Location:login.php");
        }
    }else{
        header("Location:login.php");
    }
