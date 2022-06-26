<?php

require 'config.php';

// insert / add staf 
if(isset($_POST['addstaf'])){
    
    $fast_name = $_POST["fast_name"];
    $last_name = $_POST["last_name"];
    $position = $_POST["position"];
    $age = $_POST["age"];
    $join_date = $_POST["join_date"];
    $selory = $_POST["selory"];
    $email = $_POST["email"];

    if(empty($fast_name) || empty($last_name) || empty($position) ||empty($age) || empty($join_date) ||empty($selory) ||empty($email)){
       
        $massege= "All Field are Requeard";
        
    }else{
        
        $insart_qry = "INSERT INTO `all_staf`(`fast_name`, `last_name`, `position`, `age`, `join_date`, `salary`, `email`) VALUES ('$fast_name','$last_name','$position','$age','$join_date','$selory','$email')";
        $staf_info_submit= mysqli_query($dbCannaction , $insart_qry);

    }
    if($staf_info_submit== true){
        $massege = "Add Staf Info Sucess";
    }else{
        $massege = "Fail";
    }
    header("location: ../add_staf.php?msg={$massege}");


 }



//  update staf info
 

if(isset($_POST['updatestaf'])){
    
    
    $staf_id = $_POST['staf_id'];
    $fast_name = $_POST["fast_name"];
    $last_name = $_POST["last_name"];
    $position = $_POST["position"];
    $age = $_POST["age"];
    $join_date = $_POST["join_date"];
    $selory = $_POST["salary"];
    $email = $_POST["email"];
    $img = $_POST["imag"];

    if(empty($fast_name) || empty($last_name) || empty($position) ||empty($age) || empty($join_date) ||empty($selory) ||empty($email)){

        $massege= "All Field are Requeard";

    }else{

        $updateinfo = "UPDATE all_staf SET fast_name='{$fast_name}', last_name ='{$last_name}', position ='{$position}', age ='{$age}', join_date ='{$join_date}', salary ='{$selory}', email ='{$email}' , img ='{$img}' WHERE id = '{$staf_id}'";
    
        $stafinfosubmit= mysqli_query($dbCannaction , $updateinfo );

    }
    if($stafinfosubmit == true){
        $massege = "Update Sucess";
    }else{
        $massege = "Update Fail";
    }
    
    header("location: ../update_staf.php?staf_id={$staf_id}&msg={$massege}");


}




?>