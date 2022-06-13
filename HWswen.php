<!-- 找出 1~100 裡的質數  -->
<!-- 如果質數 bgcolor 等於 黃色 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css">

</head>

<body class="container">
    <h1>找出1~100裡的質數</h1>
    <h1>如果質數背景等於黃色</h1>
    <hr />

    <table class="table table-bordered">

        <?php
        for ($j = 0; $j < 10; $j++) {
            echo " <tr>";
            for ($i = $j * 10 + 1; $i <= $j * 10 + 10; $i++) {
                for ($x = 1; $x <= (int)(sqrt(($i))); $x++) {
                    if ($i % $x == 0) {
                    } else {
                        echo $i;
                    }
                }
                if ($i == 2) {
                    echo " <td class='bg-warning'> {$i} ";
                } else {
                    echo " <td> {$i} ";
                }
            }
        }


        ?>
    </table>

    <!-- (int)(sqrt($i)) -->
    <!-- 
    for ($i = 1; $i <= 100; $i++) {
            for ($j = 2; $J < (int)(sqrt(($i))); $j++) {
                if($i%$j != 0){
                    echo "<td class='bg-warning'> {$i}  ";
                }
            }

            if ($i % 10 == 1) {
                echo "<tr> <td> {$i} ";
            } elseif ($i == 2) {
                echo "<td class='bg-warning'> {$i}  ";
            } else {
                echo "<td> {$i}  ";
            }
        } -->

</body>

</html>