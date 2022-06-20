<meta charset="utf-8" />
<form action="" method="GET" enctype="multipart/form-data">
    Account: <input type="text" name="account" id="account" onchange="checkNewAccount()" />
    <span id="mesg"></span> <br />
    Password: <input type="password" name="passwd" /> <br />
    Realname: <input type="text" name="realname" /> <br />
    Icon: <input type="file" name="icon" /> <br />
    <input type="submit" value="Register" /><br />

</form>

<script>
    var xhttp = new XMLHttpRequest();





    function checkNewAccount() {

        var account = document.getElementById('account').value;

        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {

                // alert(account);
                // alert(xhttp.responseText);
                if (xhttp.responseText != 0) { //後端 callback
                    // 帳號重複
                    document.getElementById('mesg').innerHTML = "帳號重複";
                } else {
                    document.getElementById('mesg').innerHTML = "帳號可以";
                }

            }
        };

        xhttp.open("GET", "isNewAccount.php?account=" + account, true); // 對後端發出請求,
        xhttp.send();
    }
</script>

<?php

include('sql.php');

if (isset($_REQUEST["account"])) {
    $account = $_REQUEST['account'];
    $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT); // 檢查密碼有無空白;
    $realname = $_REQUEST['realname'];

    // if(strlen($passwd) != 0 ) 檢查密碼有無空白
    $icon = null;
    if ($_FILES['icon']['error'] == 0) {
        $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));   //***addslashes 
    }

    $sql = "INSERT INTO memder (account,passwd,realname,icon) VALUES ('{$account}','{$passwd}','{$realname}','{$icon}')";
    if ($mysqli->query($sql)) {
        header("Location:login.php");
    } else {
        echo "ERROR: " . $sql; //測試階段echo 
    }
}

?>