<meta charset="UTF-8"/>
<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');

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

        <?php
        while($memder = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$memder->account}</td>";
            echo "<td>{$memder->realname}</td>";
            echo '</tr>';
        }


        ?>

    </tr>
</table>
