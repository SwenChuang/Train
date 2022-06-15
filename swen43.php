<?php
    $filename = $_POST['filename'];
    $upload = $_FILES['Upload'];
    // echo gettype($upload);

    if($upload['error'] == 0){
        if(move_uploaded_file($upload['tmp_name'],"upload/{$filename}")){   // copy 也可以
            echo "Upload Success";
        }else{
            echo "Move Failure";
        }
        
    }else{
        echo 'Upload Failure';
    }

    
?>