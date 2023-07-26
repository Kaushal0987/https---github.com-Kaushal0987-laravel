<?php
$iid=$_GET['iid'];
$action=$_GET['action'];

switch($action)
{
 case "edit":
  {
    $sql = "SELECT * from users WHERE id=$iid";
    include('connection.php');
    $qry = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($qry))
    {
      $id = $row['id'];
      $username = $row['username'];
      $password = $row['password'];
      $email = $row['email'];
      $role = $row['role'];
      $status = $row['status'];

      echo "<form method=post action=editUserprocess.php>";
      echo "<input type=hidden name=id value=$id";
      echo "<input type=text name=username value=$username";
      echo "<input type=text name=password value=$password";
      echo "<input type=text name=email value=$email";
      echo "<input type=text name=role value=$role";
      echo "<input type=text name=status value=$status";
      echo "<input type=submit name=submit value=Edit";
      echo "</form>";
    }
    break;
  }
 case "delete":
  {
   $sql="DELETE from users WHERE id=$iid";
   include('connection.php');
   $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
   if($qry){
    header ("Location: displayUser.php");
   }
   break;
  }
  default:
  {
   echo "Unable to process the command";
   break;
  }
}
?>