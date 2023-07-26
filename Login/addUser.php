<?php
 if(isset($_POST["submit"])){
  //collecting data
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $role = $_POST["role"];
  $status = 0;

  //include the connection
  include('connection.php');

  //insert data from the user table
  $sql="INSERT INTO users(username,password,email,role,status)
  VALUES('$username','$password','$email','$role','$status')";

  $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));

  //checking the connection
  if($qry){
   header ("Location: displayUser.php");
  }
  else{
   echo "Something wrong";
  }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>add user</title>
</head>

<body>
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
   <input type="radio" name="role" value="admin" required>admin
   <input type="radio" name="role" value="user" required>User
   <input type="radio" name="role" value="guest" required>Guest<br><br>

   <input type="submit" name="submit" value="submit">
   <input type="reset" name="reset" value="cancel">
  </fieldset>
 </form>
</body>
</html>