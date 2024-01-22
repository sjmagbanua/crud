<?php 

include 'connections/connect.php';

if(isset($_POST['submit'])){
    $image = $_FILES['image'];


    $sql = "INSERT INTO student_list (image) VALUES('$image')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
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
        <form action="file.php" method="post" enctype="multipart/form-data">
            <label for="file">Choose a file:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
            <br> 
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>
</body>
</html>
