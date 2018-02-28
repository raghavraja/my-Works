<?php
include('config.php');
extract($_POST);
if(isset($submit))
{
$query="insert into data values('$employee','$production','$value1','$value2', '$quality', '$value3', '$value4', '$certification',
'$value5', '$value6', '$training', '$value7', '$value8', '$analysis', '$value9', '$value10', '$attendance', '$value11', '$value12' )";
if($con->query($query))
{
echo "congrats data saved" ;
//header("Location:view.php");
}
else
{
echo "data not saved";
}
}
?>