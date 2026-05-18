<?php
session_start();
include "config/db.php";

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM employees 
WHERE email='$email' AND password='$password'";

$result=mysqli_query($conn,$sql);
$user=mysqli_fetch_assoc($result);

if($user)
{
$_SESSION['id']=$user['id'];
$_SESSION['role']=$user['role'];

if($user['role']=="admin")
{
header("Location: admin/dashboard.php");
}
else
{
header("Location: employee/apply_leave.php");
}
}
else
{
echo "Invalid Login";
}
}
?>

<h2>Login</h2>

<form method="POST">

Email:<br>
<input type="email" name="email"><br>

Password:<br>
<input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>

<a href="register.php">Register</a>