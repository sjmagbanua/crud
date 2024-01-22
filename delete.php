<?php

include 'connections/connect.php';

if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql="DELETE FROM `students` WHERE id=$id";
    $result=mysqli_query($conn, $sql);  
    // if($result){
    //     header('location: main.php');
    // }
}