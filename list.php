<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	
table{
	width: 70%;
	text-align: center;
	border-color: white;
	color: white;


}

p{
	align-content: center;
}


h1{
	color: white;
}

a{
	color: white;
	text-align: center;

}

body{
 
  background-image: url(https://image.shutterstock.com/image-photo/bright-spring-view-cameo-island-260nw-1048185397.jpg);
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


</style>
</head>
<body>
<h1 align="center" >To Do List</h1>

<?php

$i=1;
require "init.php";

echo "<table align=center border= 2px;> ";
echo "<tr><th>ToDo</th><th>Dead Line</th><td>Action</th></tr>";
while ($i <= 1000) {
	
$sql_query="SELECT * FROM list WHERE id = $i;";

$result= mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0)
{
	$row= mysqli_fetch_assoc($result);

    $to_do=$row["to_do"];
    $date = $row["date"];


    	echo "<tr>";
    			
		echo "<td>$to_do</td>";
			echo "<td>$date</td>";
			echo "<td><a href ='delete.php?id=$row[id]'>Delete</a></td>";
		echo "</tr>";

    }

$i++;
}

?><br><br><br><br><br>
</table><br><br><br><br><br><br><p align="center">
<a href = "insert.php"> Add ToDo</a></p>
</body>
</html>