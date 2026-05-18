<?php
session_start();
include "../config/db.php";

$emp=$_SESSION['id'];

$sql="SELECT * FROM leaves WHERE employee_id='$emp'";
$result=mysqli_query($conn,$sql);
?>

<h2>Your Leave Requests</h2>

<table border="1">

<tr>
<th>Type</th>
<th>Start</th>
<th>End</th>
<th>Reason</th>
<th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['leave_type']; ?></td>
<td><?php echo $row['start_date']; ?></td>
<td><?php echo $row['end_date']; ?></td>
<td><?php echo $row['reason']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>

<?php
}
?>

</table>

<br>

<a href="apply_leave.php">Apply Leave</a> |
<a href="../logout.php">Logout</a>