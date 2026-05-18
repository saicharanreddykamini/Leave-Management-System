<?php
session_start();
include "../config/db.php";

$sql="SELECT leaves.*, employees.name 
FROM leaves
JOIN employees
ON leaves.employee_id = employees.id";

$result=mysqli_query($conn,$sql);
?>

<h2>Admin Dashboard</h2>

<table border="1">

<tr>
<th>Employee</th>
<th>Leave Type</th>
<th>Start</th>
<th>End</th>
<th>Reason</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['leave_type']; ?></td>
<td><?php echo $row['start_date']; ?></td>
<td><?php echo $row['end_date']; ?></td>
<td><?php echo $row['reason']; ?></td>
<td><?php echo $row['status']; ?></td>

<td>
<a href="approve_leave.php?id=<?php echo $row['leave_id']; ?>&action=approve">Approve</a>

<a href="approve_leave.php?id=<?php echo $row['leave_id']; ?>&action=reject">Reject</a>
</td>

</tr>

<?php
}
?>

</table>

<br>

<a href="../logout.php">Logout</a>