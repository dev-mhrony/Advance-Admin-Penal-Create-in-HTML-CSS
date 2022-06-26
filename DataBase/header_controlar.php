<?php

// Update Header Section
if(isset($_POST['updatheader'])){


$header_id = $_POST['header_id'];
$title = $_POST["title"];
$sub_title = $_POST["sub_title"];
$button_link = $_POST["button_link"];
$img_file = $_POST["img_file"];


if(empty($title) || empty($sub_title) || empty($button_link) || empty($img_file){

    $massege= "All Field are Requeard";

}else{

    $updateheader = "UPDATE all_staf SET title ='{$title}', sub_title ='{$sub_title}', button_link ='{$button_link}', img_file ='{$img_file}' WHERE id = '{$header_id}'";

    $headerupdate= mysqli_query($dbCannaction , $updateheader );

}

if($headerupdate == true){
    
    $massege = "Update Sucess";
    
}else{
    
    $massege = "Update Fail";
}

    header("location: ../update_header.php?header_id={$header_id}&msg={$massege}");


}

?>