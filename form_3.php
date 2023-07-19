<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kaushal Joshi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //checking the form is submitted or not
    if(isset($_POST["submit"])){
        //collecting the data
        $username = $_POST["username"];
        $password = $_POST["password"];
        //checking the user and password is valid or not
        if($username=="admin" && $password=="password"){
            echo "<h2>Login success</h2>";
            echo "<p>Username = $username <br> Password = $password";
        }
        else{
            echo "<h2>Login failed</h2>";
        }
    }
    ?>
    <form method="POST" name="register" enctype="multipart/form-data" action="form.php">
        <fieldset>
            <legend>User registration</legend>
            <label>Username</label>
            <input type="text" name="username" required><br>
            <label>password</label>
            <input type="password" name="password" required><br><br>
            <label>agree to the tearm and services</label>
            <input type="checkbox" name="remember" value="remember"><br><br>
            <input type="submit" name="submit" value="login">
        </fieldset>            
    </form>
</body>
</html>