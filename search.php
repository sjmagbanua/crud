<?php include 'connections/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- <div class="search-container">
            <input type="text" name="search">
            <button >Search</button>
        </div> -->
        <tr >
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <table >
            <tbody>
            <?php 
              $search =  $_GET['search'];
              $sql="SELECT id, first_name, last_name, age FROM `students` WHERE id LIKE '%$search%' OR 
              first_name LIKE '%$search' OR last_name LIKE '%$search' OR age LIKE '%$search%'"; 
              $result=mysqli_query($conn, $sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $fname=$row['first_name'];
                  $lname=$row['last_name'];
                  $age=$row['age'];
                  echo ' <tr>
                  <th scope="row">'.$id.'</th>
                  <td>'.$fname.'</td>
                  <td>'.$lname.'</td>
                  <td>'.$age.'</td>
                  <td>
                  <button class="btn btn-info text-light rounded-pill border border-white">
                    <a href="update.php?updateid='.$id.'"class="text-decoration-none text-light">Update</a>
                  </button>
                  </td>
                  <td>
                  <button class="btn btn-danger text-light rounded-pill border border-white">
                    <a href="delete.php?deleteid='.$id.'"class="text-decoration-none text-light">Delete</a>
                  </button>
                  </td>
              
                </tr>';
                
                }
              }
               
          ?>
            </tbody>
        </table>
    </div>
</body>
</html>