<!-- 讀取快塞地圖 -->
<table border="1" width="100%">

    <?php
        $content = file("dir2/Fstdata.csv");
        foreach($content as $i => $line){
            $date = explode(',',$line);  // 以逗號為分隔把字串打散為Array
            echo '<tr>';
            if($i==0){
                echo "<th>{$date[1]}</th>";
                echo "<th>{$date[2]}</th>";
                echo "<th>{$date[5]}</th>";
                echo "<th>{$date[7]}</th>";
            }else{
                echo "<td>{$date[1]}</td>";
                echo "<td>{$date[2]}</td>";
                echo "<td>{$date[5]}</td>";
                echo "<td>{$date[7]}</td>";
            }
            echo '<tr/>';
        }   

    ?>
    
</table>