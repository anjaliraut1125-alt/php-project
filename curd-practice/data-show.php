<?php

include "../includes/config.php";

$sql = "SELECT * FROM curd";

$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="2" >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Message</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)){

        ?>

        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['city']?></td>
            <td><?php echo $row['message']?></td>
        </tr>
        <?php
        }

        ?>
    </table>
</body>

</html>