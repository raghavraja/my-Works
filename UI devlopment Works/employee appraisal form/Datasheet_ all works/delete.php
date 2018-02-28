<?php

include("config.php");

if (isset($_GET['employee']) && is_numeric($_GET['employee']))
{
$employee = $_GET['employee'];
$result = mysqli_query($con,"DELETE FROM data WHERE employee = $employee") or die(mysqli_error);
header("Location: view.php");
}
else
{
header("Location: view.php");
}
?>