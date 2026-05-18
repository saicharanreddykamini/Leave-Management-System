<?php
session_start();
include "../config/db.php";

if(isset($_POST['apply']))
{
$type=$_POST['leave_type'];
$start=$_POST['start_date'];
$end=$_POST['end_date'];
$reason=$_POST['reason'];
$emp=$_SESSION['id'];

$sql="INSERT INTO leaves(employee_id,leave_type,start_date,end_date,reason)
VALUES('$emp','$type','$start','$end','$reason')";

mysqli_query($conn,$sql);

echo "Leave Applied Successfully";
}
?>

<h2>Apply Leave</h2>

<form method="POST">

Leave Type:<br>
<input type="text" name="leave_type"><br>

Start Date:<br>
<input type="date" name="start_date"><br>

End Date:<br>
<input type="date" name="end_date"><br>

Reason:<br>
<textarea name="reason"></textarea><br><br>

<button name="apply">Apply Leave</button>

</form>

<br>

<a href="leave_status.php">Check Leave Status</a> |
<a href="../logout.php">Logout</a>