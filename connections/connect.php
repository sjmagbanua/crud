<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_system";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Not connected: ' . mysqli_connect_error());
    } else {
        // echo "Connected successfully";
    }



    // session_start();

    // function connect(){
    //     return $conn = new mysqli('localhost','root', '', 'student_system');
    
    // }
    


?>