<?php
$con=new mysqli('localhost','root','','qms2') or die(mysqli_error());


if(!$con)
{
	
	echo "not connected";
}
else
{
	
	echo "";
}
?>