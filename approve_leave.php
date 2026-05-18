<?php
include "../config/db.php";

$id=$_GET['id'];
$action=$_GET['action'];

if($action=="approve")
{
$status="Approved";
}
else
{
$status="Rejected";
}

$sql="UPDATE leaves SET status='$status'
WHERE leave_id='$id'";

mysqli_query($conn,$sql);

header("Location: dashboard.php");
?>