<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Course inquiry form</title>
</head>
<body>
 <?php
 if(isset($_POST["submit"])){
  $firstname = $_PORT["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $date = $_POST["dateofbirth"];
  $gender = $POST["gender"];
  $cources = $_POST["courses"];
  $city = $_POST["city"];
  $message = $_POST["message"];

  include("connection.php");
  $sql="INSERT INTO inquiry(id,firstname,lastname,email,dateofbirth,gender,courses,city,message,status)
  VALUES('$firstname','$lastname','$email','$date','$gender','$cources','$city','$message',0)";

  $qry=mysqli_query($conn,$sql);
  if($qry){
   echo "Date Inserted";
  }
  else{
   echo "Something wrong";
  }
 }
 ?>

 <form action="form.php" method="POST" enctype="multipart/form-date" name="register">
  <fieldset>
   <legend>Course inquiry form</legend>

   <label>First Name</label>
   <input type="text" name="firstname" required><br>

   <label>Last Name</label>
   <input type="text" name="lastname" required><br>

   <label>E-mail</label>
   <input type="email" name="email" id="email"><br>

   <label>Date Of Birth</label>
   <input type="date" name="dateofbirth" id="date" required><br>

   <label>Gender</label>
   <input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="others">Others<br>

   <select name="city" id="city">
    <option value="kathmandu">Kathmandu</option>
    <option value="lalitpur">Lalitpur</option>
    <option value="bhaktapur">Bhaktapur</option>
    <option value="pokhara">Pokhara</option>
   </select><br>

   <label>Courses</label>
   <input type="checkbox" name="bca">BCA
   <input type="checkbox" name="bbs">BBS
   <input type="checkbox" name="mba">MBA
   <input type="checkbox" name="bsw">BSW<br>

   <label>Message</label>
   <input type="textarea" name="message" rows="5" column="50"><br>

   <input type="submit" name="submit" value="submit">
   <input type="reset" name="reset" value="reset">
  </fieldset>
 </form>
</body>
</html>