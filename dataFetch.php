<?php
    $sql = "SELECT * FROM inquiry ORDER BY id DESC";
    include('connection.php');
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>docFetch</title>
</head>
<body>
    <h2>We have <?php echo $count ;?>Records</h2>
    <table>
        <tr>
            <td>ID</td>
            <td>Full name</td>
            <td>email</td>
            <td>DOB</td>
            <td>Gender</td>
            <td>Course</td>
            <td>City</td>
            <td>Message</td>
            <td>status</td>
            <td>Created-at</td>
            <td>Updated-at</td>
        </tr>

        <?php
            while($row = mysqli_fetch_array($qry))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['course']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "<td>".$row['message']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>".$row['created-at']."</td>";
                echo "<td>".$row['updated-at']."</td>";
                echo "<td> <a href =editdelete.php?iid=$iid&action=edit>EDIT</a>

                <a href ='editdelete.php?iid=$iid&action=delete'>DELETE</a>
              
               </td>";
            }
        ?>
    </table>
</body>
</html>