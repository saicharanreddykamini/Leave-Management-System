<?php
include "config/db.php";

if(isset($_POST['register']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$role="employee";

$sql="INSERT INTO employees(name,email,password,role)
VALUES('$name','$email','$password','$role')";

mysqli_query($conn,$sql);

echo "Registration Successful";
}
?>

<h2>Employee Register</h2>

<form method="POST">
Name:<br>
<input type="text" name="name" required><br>

Email:<br>
<input type="email" name="email" required><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button name="register">Register</button>
</form>

<a href="login.php">Login</a>