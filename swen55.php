<meta charset="utf-8"/>
<?php
    include('sql.php');

    if(isset($_GET['editid'])){
        //撈原資料
        $editid=$_GET['editid'];
        $sql = "SELECT * FROM memder WHERE id= {$editid}";
        $result = $mysqli->query($sql);
        $member = $result->fetch_object();
        
    }

    if(isset($_POST['updateid'])){
        $updateid = $_POST['updateid'];
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        $realname = $_POST['realname'];
        
        if(strlen(trim($passwd))==0){
            $sql = "UPDATE  memder SET account='{$account}', realname='{$realname}' WHERE id={$updateid}";
        }else{
            $passwd = password_hash($passwd, PASSWORD_DEFAULT);
            $sql = "UPDATE  memder SET account='{$account}', passwd='{$passwd}' , realname='{$realname}'  WHERE id={$updateid}";
        }
        if($mysqli->query($sql)){
            header("Location:swen53.php");
        }else{

        }

    }
    
?>
<h1>Edit Profile</h1><hr/>
<form method="POST">
    <input type="hidden" name="updateid" value="<?php echo $member->id; ?>" /><br/>
    <input type="text" name="account" value="<?php echo $member->account; ?>" /><br/>
    <input type="password" name="passwd"/><br/>
    <input type="text" name="realname" value="<?php echo $member->realname; ?>" /><br/>
    <input type="submit" value="Update"/>
</form>