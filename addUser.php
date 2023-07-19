<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>add user</title>
</head>

<body>

<?php
 if(isset($_POST["submit"])){
  $username = $_PORT["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $role = $_POST["role"];

  include("connection.php");
  $sql="INSERT INTO users(id,username,password,email,role,status)
  VALUES('$username','$password','$email','$role',0)";

  $qry=mysqli_query($conn,$sql);
  if($qry){
   header ("Location: displayUser.php");
  }
  else{
   echo "Something wrong";
  }
 }
 ?>

<form action="" method="POST" enctype="multipart/form-date" name="register">
  <fieldset>
   <legend>Sign in</legend>

   <label>Username</label>
   <input type="text" name="username" required><br><br>

   <label>Password</label>
   <input type="password" name="password" required><br><br>

   <label>E-mail</label>
   <input type="email" name="email" id="email"><br><br>

   <label>Role</label>
   <input type="text" name="role" required><br><br>

   <input type="submit" name="submit" value="submit">
   <input type="reset" name="reset" value="cancel">
  </fieldset>
 </form>
</body>
</html>