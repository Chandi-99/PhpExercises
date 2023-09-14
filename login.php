<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form method="post" action="bill.php">
<label for=“firstName”><b>Username&nbsp;</b></label>
<input type="text" name="username"  placeholder="user1"><br>
<br>
<label for=“lastName”><b>Password&nbsp;</b></label>
<input type="password" name="password"  placeholder="user123"><br>
<br>
<input type="submit" value="Submit">

</form>
<?php

$username = $_POST["username"];
$password = $_POST["password"];

if(isset($_POST['submit'])){
    if($username ="user1" && $password="user123" ){

        echo "Access granted!";

    }
    else{
        echo "<h2>Invalid Username or Password</h2>";
    }
}


?>
</body>
</html>

