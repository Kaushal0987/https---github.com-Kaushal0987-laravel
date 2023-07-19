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
<h2>We have <?php echo $count ;?>Records</h2>
 <tabel>
  <tr>
   <td>Username</td>
   <td>Password</td>
   <td>E-mail</td>
   <td>role</td>
   <td>status</td>
   <td>created-at</td>
   <td>updated-at</td>
   <td>Function</td>
  </tr>

  <?php
  while($row=mysqli_fetch_array($qry))
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
   echo "<td>".$row["updated-at"]."</td>";\
   echo "<td>EDIT
   <a href='editdeleteUser.php?iid=$iid&action=delete'>DELETE<a/>
   </td>";
  }
  ?>
</tabel> 
</body>
</html>