<?php
    $sql = "SELECT * FROM users ORDER BY id DESC";
    include('connection.php');
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>display user</title>
</head>

<body>
<h2>We have <?php echo $count ;?> Records <br>
<input type="button" value="Add record " onclick="location='addUser.php'" />
</h2>
 <tabel>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Passworh</th>
    <th>E-mail</th>
    <th>role</th>
    <th>status</th>
    <th>created-at</th>
    <th>updated-at</th>
    <th>Function</th><br>
  </tr>
  <?php
  while($row = mysqli_fetch_array($qry))
  {
    $iid=$row["id"];
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["role"]."</td>";
    echo "<td>".$row["status"]."</td>";
    echo "<td>".$row["created-at"]."</td>";
    echo "<td>".$row["updated-at"]."</td>";
    echo "<td> <a href ='editdeleteUser.php?iid=$iid&action=edit'>EDIT</a>

    <a href ='editdeleteUser.php?iid=$iid&action=delete'>DELETE</a>
 
    </td>";
    echo "<br>";
    echo "</tr>";
  }
  ?>
</tabel> 
</body>
</html>