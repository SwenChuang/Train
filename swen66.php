<?php
    $cont = file_get_contents('https://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml');
    $xml = simplexml_load_string($cont);
    // var_dump($xml);
    // echo '<hr/>';

    $name = $xml->Infos->Info;

    foreach($name as $k=>$v){
        echo "{$k} : {$v->Name} <br/>";
    }


    // echo '<hr/>';
    // foreach($xml as $book){
    //     echo $book->getName() . ':' . gettype($book) . '<br/>';
    // }
    // echo '<hr/>';
    // $attrs = $xml->book[0]->attributes();
    // foreach($attrs as $k => $v){
    //     echo "{$k} : {$v} <br/>";
    // }
    // echo '<hr/>';
    // echo $xml->book[1]['price'];

    // echo '<hr/>';
    // $b0 = $xml->book[0]->children();
    // foreach($b0 as $k => $v){
    //     echo "{$k} : {$v} <br/>";
    // }

    // echo '<hr/>';
    // $a0 = $xml->book[0]->authors->author;
    // foreach($a0 as $k => $v){
    //     echo "{$k} : {$v} <br/>";
    // }

    

?>