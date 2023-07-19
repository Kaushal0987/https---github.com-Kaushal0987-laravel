<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course inquiry form</title>
</head>
<body>
<?php
    //checking the form is submitted or not
    if(isset($_POST["submit"])){
    //collecting the data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $date = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $city = $_POST["city"];    
    $message = $_POST["message"];
    $status = 0;

    include("connection.php");
    $sql="INSERT INTO inquiry(firstname,lastname,email,date,gender,course,city,message,status)VALUES('$firstname','$lastname','$email','$date','$gender','$course','$city','$message','$status)";

    $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($qry){
        echo "Data Inserted";
    }
    else{
        echo "something wrong";
    }
    }
?>
    <form method="POST" name="register" enctype="multipart/form-data" action="form_1.php">
        <fieldset>
            <legend>Course inquiry form</legend>
            <label>First Name</label>
            <input type="text" name="firstname" required><br>
            <label>Last Name</label>
            <input type="text" name="lastname" required><br>
            <label>E-mail</label>
            <input type="email" id="email" name="email" required><br>
            <label>Date of Birth</label>
            <input type="date" id="date" name="dateofbirth" required><br>
            <label>Gender</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="others"                                                                                                                                                                         >others<br>
            <select name="city" id="city">
                <option value="kathmandu">kathmandu</option>
                <option value="pokhara">Pokhara</option>
                <option value="lalitpur">Lalitpur</option>
            </select><br>
            <label>Course</label>
            <input type="checkbox" name="course" value="bca">BCA<br>
            <label>Message</label>
            <input type="textarea" name="message" rows="5" column="50" required><br>
            <input type="submit" name="submit" value="register">
            <input type="reset" name="reset" value="cancel">
        </fieldset>
    </form>
</body>
</html>