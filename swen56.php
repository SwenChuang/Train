<meta charset="utf-8"/>
<?php
    // https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    include('sql.php');

    $json = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
    $data = json_decode($json, false);



    $sql = "INSERT INTO food(`name`,addr,tel,city,town,pic,lat,lng)" .
            "VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    //var_dump($stmt);
    

    foreach($data as $row){
        $stmt->bind_param('ssssssss',$row->Name,$row->Address,$row->Tel,$row->City,$row->Town,$row->PicURL,$row->Latitude,$row->Longitude);
        $stmt->execute();
    }

?>