<?php 
    include 'connections/connect.php';

    if(isset($_POST['register'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
    
        $sql = "INSERT INTO students (first_name,last_name,age) VALUES('$fname','$lname','$age')";
        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login Form</h2>
        <form action="login_form.php" method="post">
            
            <label for="username">FirstName:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="username">LastName:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>
           
            <!-- <label for="password">Password:</label>
            <input type="password" id="password" name="password" required> -->

            <button type="submit" name="register">Login</button>
        </form>
    </div>

</body>
</html>
