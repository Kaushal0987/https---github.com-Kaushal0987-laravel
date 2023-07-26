<!-- edit data -->

<?php
//capturing the data
$id = $_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$role=$_POST['role'];
$status=$_POST['Status'];

//editing data
$sql = "UPDATE users SET username='$username', password='$password', email='$email', role='$role', status='$status'WHERE id='$id'";

include('connection.php');
$qry=mysqli_query($conn, $sql);

if($qry)
{
 header("Location: displayUser.php");
}
else
{
 echo "Something wrong";
}

?>