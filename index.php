<?php
include 'connections/connect.php';
    

    // Assuming $students is the correct table name
    $table = "students";

    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }

    // Close the connection
    mysqli_close($conn);
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
            <div class="search-container">
                <form action="search.php" method="get">
                    <input type="text" name="search"> 
                    <button type="submit">Search</button>
                </form>
                <a href="appointment.php"><button>Book</button></a>
            </div>
        <table >
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
            include 'connections/connect.php';

            // Assuming $students is the correct table name
            $table = "students";

            $sql = "SELECT * FROM $table";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die('Query failed: ' . mysqli_error($conn));
            }

            // Fetch data and display in a table
            while ($row = mysqli_fetch_assoc($result)) {
                if (isset($row['id'])) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['first_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['age']}</td>
                            <td><a href='update.php?id={$row['id']}'>Edit</a></td>
                            <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
                        </tr>";
                } else {
                    echo "ID not found in the row. Row data: ";
                }
            }

            // Close the connection
            mysqli_close($conn);
            ?>
        </table>
    </div>
</body>
</html>
