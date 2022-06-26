<?php

    require './DataBase/config.php';

 
    $staf_id = $_GET['staf_id'];

    $deleteinfo = "UPDATE all_staf SET status=0 WHERE id = '{$staf_id}'";
    
    $stafinfosubmit= mysqli_query($dbCannaction , $deleteinfo );


    if($stafinfosubmit == true){
        $massege = "Delete Staf Sucess";
    }else{
        $massege = "Delete Staf Fail";
    }
    
    header("location: staf_table.php?msg={$massege}");


?>