<meta charset="UTF-8"/>
<?php
    include('sql.php');

    if(isset($_GET['delid'])){
        $delid = $_GET['delid'];
        $sql ="DELETE FROM memder WHERE id={$delid}";
        $result = $mysqli->query($sql);
    }

    $sql ="SELECT * FROM memder";
    $result = $mysqli->query($sql);

?>
<h1>Swen Big Company</h1>
<hr/>
<a href="swen54.php">Add New Member</a><br/>
<table border="1" width="100%">
    <tr>
        <th>Account</th>
        <th>RealName</th>
        <th>Delete</th>
        <th>Edit</th>


        <?php
        while($memder = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$memder->account}</td>";
            echo "<td>{$memder->realname}</td>";
            echo "<td><a href='?delid={$memder->id}' onclick='return deleteConfirm(\"{$memder->realname}\");' >Del</a></td>";
            echo "<td><a href='swen55.php?editid={$memder->id}'>Edit</a></td>";
            echo '</tr>';
        }


        ?>

    </tr>
</table>
<script>

    function deleteConfirm(name){
        return confirm('Delete:  ' + name +'?');
    };

</script>