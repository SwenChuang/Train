<?php
    include 'sql.php';

    spl_autoload_register(function ($className) {
        require_once $className . '.php';
    });

    $myquery = new MyQuery($mysqli);
    $name = $myquery->getProductData(131, MyQuery::QUERY_NAME);
    $tel = $myquery->getProductData(131, MyQuery::QUERY_TEL);

    echo "{$name}:{$tel}<hr/>";

    $allAddr = $myquery->getAllAddress('city="苗栗縣"');
    foreach($allAddr as $addr){
        echo "{$addr->addr}<br/>";
    }
    
    echo '<hr/>';
    $allData = $myquery->getDataByKeyword();
    
    foreach($allData as $data){
        echo "{$data->name} : {$data->tel} : {$data->addr}<br />";
    }

?>
