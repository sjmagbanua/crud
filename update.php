<?php 
    include 'connections/connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        echo "No 'id' parameter provided in the URL.";
        print_r($_GET);
        echo '</pre>';
    }
    $sql= "SELECT * FROM `students` WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $fname=$row['first_name'];
    $lname=$row['last_name'];
    $age=$row['age'];

    if(isset($_POST['update'])){
        // Get values from the form
        $age = $_POST['age'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        // Assuming $table is the correct table name
        $table = "students";

        // Update query
        $sql = "UPDATE $table SET id=$id, first_name='$fname', last_name='$lname', age='$age' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
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
        <h2>Edit Form</h2>
        <form action="" method="post">
            <!-- Add a hidden input field to store the id -->
            <input type="text" name="id" value="<?php echo $id; ?>">
            <label for="username">FirstName:</label>
            <input type="text" value="<?php echo $fname; ?>" id="fname" name="fname">
            
            <label for="username">LastName:</label>
            <input type="text" id="lname" name="lname"value="<?php echo $lname; ?>">

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="<?php echo $age; ?>">

            <button type="submit" name="update">Update</button>
        </form>
    </div>

</body>
</html>

<!-- 
$sql="SELECT id, todo, status, start_date, due_date FROM `task` WHERE id LIKE '%$search%' OR 
         todo LIKE '%$search' OR status LIKE '%$search' OR start_date LIKE '%$search%' OR due_date LIKE '%$search%'"; -->