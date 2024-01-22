<?php 

include 'connections/connect.php';

function register($fname, $lname, $username)
{
    $sql = "INSERT INTO students (first_name,last_name,age,) VALUES('$fname','$lname','$username')";
    mysqli_query($conn, $sql)

    // if ($result == TRUE) {
    //     login($username, $password);
    // } else {
    //     die('ERROR: ' . $conn->error);
    // }
}

?>