<?php 
include 'init.php';
error_reporting(0);

$id=$_GET['id'];
$query = "DELETE FROM LIST WHERE ID = '$id'";

$data = mysqli_query($con,$query);

if($data)
{
	echo "<font color = 'green'>Record deleted";
}
else

{
	echo "<font color= 'red'>Not Deleted";
}



?><br><br><br><br><p align="center">
<a  href = "list.php"><font color= 'red'>To Do List</a>

<style>
	
	text{
		text-align: center;
	}

	
</style>