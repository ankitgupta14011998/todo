<?php
$host="localhost";
$username="root";
$password="";
$database="ankit";


$con=mysqli_connect($host,$username,$password,$database);
if(@!con){

	echo "Sorry for inconvenience";
}

else {
	echo "";
}

?>