<html>
<head>
<title>View Records and Delete</title>
<style>
.dream
{
	font-size:10px;
}
</style>
</head>
<body>
<?php
include('config.php');

$result= mysqli_query($con,"Select * FROM data") or die(mysqli_error());

echo "<font size='7' face='Arial'>";

echo "<table class='dream' border='1' cellpadding='8'>";

echo "<tr>
<th><font color='Red'>employee</font></th>
<th><font color='Red'>production</font></th>
<th><font color='Red'>value1</font></th>
<th><font color='Red'>value2</font></th>
<th><font color='Red'>quality</font></th>
<th><font color='Red'>value3</></th>
<th><font color='Red '>value4</></th>
<th><font color='Red'>certification</></th>
<th><font color='Red'>value5</></th>
<th><font color='Red'>value6</></th>
<th><font color='Red'>training</></th>
<th><font color='Red'>value7</></th>
<th><font color='Red'>value8</></th>
<th><font color='Red'>analysis</></th>
<th><font color='Red'>value9</></th>
<th><font color='Red'>value10</></th>
<th><font color='Red'>attendance</></th>
<th><font color='Red'>value11</></th>
<th><font color='Red'>value12</></th>
<th><font color='Red'>Delete</></th>
</tr>";

while($row=mysqli_fetch_array($result))
{

echo"<tr>";
echo'<td><b><font color="green">' . $row['employee'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['production'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value1']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value2']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['quality'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value3'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value4']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['certification']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value5'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value6'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['training']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value7']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value8']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['analysis'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value9'].'</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value10']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['attendance']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value11']. '</font></b></td>';
echo'<td><b><font color="blue">'  . $row['value12']. '</font></b></td>';
echo'<td  bgcolor="#ff3737"><b><font color="blue"><a href="delete.php? employee=' . $row['employee'] . '">Delete</a></font></b></td>';
echo "</tr>";
}
echo"</table>";
?>
</body>
</html>