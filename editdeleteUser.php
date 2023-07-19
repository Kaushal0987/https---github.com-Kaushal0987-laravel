<?php
$iid=$_GET['iid'];
$action=$_GET['action'];

switch($action)
{
 case 'edit':
  {
   echo "Editing data";
   break;
  }
 case 'delete':
  {
   $sql="DELETE from users WHERE id=$iid";
   include("connection.php");
   $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
   if($qry){
    header (Location: displayUser.php);
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