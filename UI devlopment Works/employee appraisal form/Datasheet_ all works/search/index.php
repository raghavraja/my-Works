 <?php

$dsn = 'mysql:host=localhost;dbname=qms2';
$username = 'root';
$password = '';

try{
    
    $con = new PDO($dsn,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
    
    echo 'Not Connected '.$ex->getMessage();
    
}

$employee = '';
$production = '';
$value1 = '';
$value2 = '';
$quality = '';
$value3 = '';
$value4 = '';
$certification = '';
$value5 = '';
$value6 = '';
$training = '';
$value7 = '';
$value8 = '';
$analysis = '';
$value9 = '';
$value10 = '';
$attendance = '';
$value11 = '';
$value12 = '';

function getPosts()
{
    $posts = array();
    
    $posts[0] = $_POST['employee'];
    $posts[1] = $_POST['production'];
    $posts[2] = $_POST['value1'];
    $posts[3] = $_POST['value2'];
	$posts[4] = $_POST['quality'];
	$posts[5] = $_POST['value3'];
	$posts[6] = $_POST['value4'];
	$posts[7] = $_POST['certification'];
	$posts[8] = $_POST['value5'];
	$posts[9] = $_POST['value6'];
	$posts[10] = $_POST['training'];
	$posts[11] = $_POST['value7'];
	$posts[12] = $_POST['value8'];
	$posts[13] = $_POST['analysis'];
	$posts[14] = $_POST['value9'];
	$posts[15] = $_POST['value10'];
	$posts[16] = $_POST['attendance'];
	$posts[17] = $_POST['value11'];
	$posts[18] = $_POST['value12'];

	
    
    return $posts;
}

//Search And Display Data 

if(isset($_POST['search']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
    }  else {
        
        $searchStmt = $con->prepare('SELECT * FROM data WHERE employee = :employee');
        $searchStmt->execute(array(
                    ':employee'=> $data[0]
        ));
        
        if($searchStmt)
        {
            $user = $searchStmt->fetch();
            if(empty($user))
            {
                echo 'No Data For This Id';
            }
            
            $employee       = $user[0];
            $production     = $user[1];
            $value1         = $user[2];
            $value2         = $user[3];
			$quality        = $user[4];
			$value3         = $user[5];
			$value4         = $user[6];
			$certification  = $user[7];
			$value5         = $user[8];
			$value6         = $user[9];
			$training       = $user[10];
			$value7         = $user[11];
			$value8         = $user[12];
			$analysis       = $user[13];
			$value9         = $user[14];
			$value10        = $user[15];
			$attendance     = $user[16];
			$value11        = $user[17];
			$value12        = $user[18];
        }
        
    }
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Search and Dispaly</title>
<link rel="stylesheet" type="text/css" href="datastylesheet.css" />
<script src="source.js"></script>
<script>
</script>
</head>

<body>
<div id="wrapper">
<div class="header">
<div class="qms">
<h3>QMS Team</h3>
</div>
<div class="kra">
<h4>KRAs </h4>
</div>
<div class="apprisal">
<div class="para">
<p>Parameters</p>
</div>
<div class="disc">
<p>Parameters</p>
</div>
<div class="rating">
<p>Parameters</p>
</div>
<div class="quality">
<div class="box1">
<p>QMS Team</p>
</div>
<div class="box2">
<div class="min">
<p>min</p>
</div>
<div class="max">
<p>max</p>
</div>
<div class="Weightage">
<p>Weightage</p>
</div>
</div>
</div>
</div>
<!--fist set start-->
<div class="cont">
<div class="cn1">
<p>Process Improvement</p>
</div>
<div class="cn2">
<p>Project to be picked in any cluster Scope : Can be quality improvement Can be Production improvement, seat utilization, efficiency, technical solution , technology etc.</p>
</div>
<div class="cn3">
<table>
<tr>
<td>Outstanding</td>
</tr>
<tr>
<td>Exceeds Expectations</td>
</tr>
<tr>
<td>Meets Expectations</td>
</tr>
<tr>
<td>Mostly Meets Expectations</td>
</tr>
<tr>
<td class="ark">Does not Meet Expectations</td>
</tr>
</table>
</div>
<div class="cn4">
<div class="cn5">
<table class="score">
<tr>
<td colspan="2">>5</td>
</tr>
<tr>
<td>4</td>
<td>5</td>
</tr>
<tr>
<td>2</td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>2</td>
</tr>
<tr>
<td class="ark" colspan="2">
<1</td>
</tr>
</table>
</div>
<div class="cn6">
<div class="hrw">
<p>35%</p>
</div>
</div>
</div>
<div class="message">
<form name="fname" method="post" action="index.php">

<div class="num">
<input type="text" name="employee" id="employee" autocomplete="off" value="<?php echo $employee;?>" placeholder="Employee Id">
<input type="text" class="rbm" name="production" value="<?php echo $production;?>" autocomplete="off" id="parameters">
</div>
<div class="mark">
<input type="text" id="score" autocomplete="off" value="<?php echo $value1;?>" name="value1">
</div>
<div class="dis" id="description">
<input type="text" class="area" autocomplete="off" value="<?php echo $value2;?>" name="value2">
</div>
</div>
</div>
<div class="spc">
</div>
<!--first set End-->
<!--second star-->
<div class="second">
<div class="cont">
<div class="cn1">
<p>Accurate &#38; Timely Reporting
<br> *1. QA Dashboard -Productivity /Quality
<br> 2. Certification reports and follow ups
<br> 3. Other Process relevant reports
<br> and follow up.</p>
</div>
<div class="cn2">
<p>Reports and update log to be sent on
<br> every month before 8th</p>
</div>
<div class="cn3">
<table>
<tr>
<td>Outstanding</td>
</tr>
<tr>
<td>Exceeds Expectations</td>
</tr>
<tr>
<td>Meets Expectations</td>
</tr>
<tr>
<td>Mostly Meets Expectations</td>
</tr>
<tr>
<td class="ark">Does not Meet Expectations</td>
</tr>
</table>
</div>
<div class="cn4">
<div class="cn5">
<table class="score">
<tr>
<td colspan="2">>99.01</td>
</tr>
<tr>
<td>99.01%</td>
<td>99.5%</td>
</tr>
<tr>
<td>98.01%</td>
<td>99%</td>
</tr>
<tr>
<td>97.01%</td>
<td>98%</td>
</tr>
<tr>
<td class="ark" colspan="2">Below 97.00</td>
</tr>
</table>
</div>
<div class="cn6">
<div class="hrw">
<p>10%</p>
</div>
</div>
</div>
<div class="message">
<div class="num">
<input type="text" class="rbm" name="quality" value="<?php echo $quality;?>" autocomplete="off" id="ark" onkeyup=gama();>
</div>
<div class="mark">
<input type="text" name="value3" value="<?php echo $value3;?>" autocomplete="off" id="ssm">
</div>
<div class="dis" id="max">
<input type="text" name="value4" value="<?php echo $value4;?>" autocomplete="off" class="area">
</div>
</div>
</div>
</div>
<div class="spc">
</div>
<!--end-->
<div class="second">
<div class="cont">
<div class="cn1">
<p>On Time Process
<br> * Assigned task on certification Process to be completed quarter on quarter.</p>
</div>
<div class="cn2">
<p>Quarterly certification for QA's to be completed on every quarter before 7th of that month Compliance Check Certification to be completed at least by 4 cluster per</p>
</div>
<div class="cn3">
<table>
<tr>
<td>Outstanding</td>
</tr>
<tr>
<td>Exceeds Expectations</td>
</tr>
<tr>
<td>Meets Expectations</td>
</tr>
<tr>
<td>Mostly Meets Expectations</td>
</tr>
<tr>
<td class="ark">Does not Meet Expectations</td>
</tr>
</table>
</div>
<div class="cn4">
<div class="cn5">
<table class="score">
<tr>
<td>4 Certification</td>
</tr>
<tr>
<td>3</td>
</tr>
<tr>
<td>1</td>
</tr>
<tr>
<td>1</td>
</tr>
<tr>
<td class="ark">No Certification</td>
</tr>
</table>
</div>
<div class="cn6">
<div class="hrw">
<p>15%</p>
</div>
</div>
</div>
<div class="message">
<div class="num">
<input type="text" class="rbm" name="certification" value="<?php echo $certification;?>" autocomplete="off" id="before" onkeyup=sky();>
</div>
<div class="mark">
<input type="text" name="value5" value="<?php echo $value5;?>" autocomplete="off" id="alpha">
</div>
<div class="dis" id="marks">
<input type="text" class="area" name="value6" value="<?php echo $value6;?>" autocomplete="off" >
</div>
</div>
</div>
</div>
<div class="spc">
</div>
<div class="cont">
<div class="cn1">
<p>Training and Certification on quality Toolst</p>
</div>
<div class="cn2">
<p>Training to be provided on quality tools
<br> and their usage for Pl/Ql/Production
<br> team with support of Managers /QMS Manager</p>
</div>
<div class="cn3">
<table>
<tr>
<td>Outstanding</td>
</tr>
<tr>
<td>Exceeds Expectations</td>
</tr>
<tr>
<td>Meets Expectations</td>
</tr>
<tr>
<td>Mostly Meets Expectations</td>
</tr>
<tr>
<td class="ark">Does not Meet Expectations</td>
</tr>
</table>
</div>
<div class="cn4">
<div class="cn5">
<table class="score">
<tr>
<td>4 Cluster have been</td>
</tr>
<tr>
<td>3 Cluster have been</td>
</tr>
<tr>
<td>2 Cluster have been</td>
</tr>
<tr>
<td>1 Cluster have been</td>
</tr>
<tr>
<td class="ark">No Training been</td>
</tr>
</table>
</div>
<div class="cn6">
<div class="hrw">
<p>10%</p>
</div>
</div>
</div>
<div class="message">
<div class="num">
<input type="text" class="rbm" name="training" value="<?php echo $training;?>" autocomplete="off" id="ball" onkeyup=beta();>
</div>
<div class="mark">
<input type="text" name="value7" value="<?php echo $value7;?>" id="king" autocomplete="off">

</div>
<div class="dis" id="mrc">
<input type="text" class="area" name="value8" value="<?php echo $value8;?>" autocomplete="off">
</div>
</div>
</div>
<div class="spc">
</div>
<!--first set End-->
<!--second star-->
<div class="second">
<div class="cont">
<div class="cn1">
<p>Audits On QA Revision analysis</p>
</div>
<div class="cn2">
<p>7% of Audit checks on Revision analysis to be completed on daily basis and feedbacks provided effectively to improve his/her skills</p>
</div>
<div class="cn3">
<table>
<tr>
<td>Outstanding</td>
</tr>
<tr>
<td>Exceeds Expectations</td>
</tr>
<tr>
<td>Meets Expectations</td>
</tr>
<tr>
<td>Mostly Meets Expectations</td>
</tr>
<tr>
<td class="ark">Does not Meet Expectations</td>
</tr>
</table>
</div>
<div class="cn4">
<div class="cn5">
<table class="score">
<tr>
<td colspan="2">>11.00%</td>
</tr>
<tr>
<td>9.00%</td>
<td>10.00%</td>
</tr>
<tr>
<td>27.00%</td>
<td>8.00%</td>
</tr>
<tr>
<td colspan="2">6.00%</td>
</tr>
<tr>
<td colspan="2">Below 5.00%</td>
</tr>
</table>
</div>
<div class="cn6">
<div class="hrw">
<p>20%</p>
</div>
</div>
</div>
<div class="message">
<div class="num">
<input type="text" class="rbm" name="analysis" value="<?php echo $analysis;?>" id="blank" autocomplete="off" onkeyup=ray();>
</div>
<div class="mark">
<input type="text" name="value9" value="<?php echo $value9;?>" autocomplete="off" id="fit">
</div>
<div class="dis" id="shine">
<input type="text" class="area" autocomplete="off" name="value10" value="<?php echo $value10;?>">
</div>
</div>
</div>
</div>
<div class="spc">
</div>
<!--end-->
<div class="second">
<div class="cont">
<div class="cn1">
<p>Attendance</p>
</div>
<div class="cn2">
<p></p>
</div>
<div class="cn3">
<table>
<tr>
<td>Outstanding</td>
</tr>
<tr>
<td>Exceeds Expectations</td>
</tr>
<tr>
<td>Meets Expectations</td>
</tr>
<tr>
<td>Mostly Meets Expectations</td>
</tr>
<tr>
<td class="ark">Does not Meet Expectations</td>
</tr>
</table>
</div>
<div class="cn4">
<div class="cn5">
<table class="score">
<tr>
<td>0 Instance</td>
</tr>
<tr>
<td>1 Instance</td>
</tr>
<tr>
<td>2 Instance</td>
</tr>
<tr>
<td>3 Instance</td>
</tr>
<tr>
<td class="ark">> 3 Instance</td>
</tr>
</table>
</div>
</div>
<div class="cn6">
<div class="hrw">
</div>
</div>
</div>
<div class="message">
<div class="num">
<input type="text" class="rbm" autocomplete="off" name="attendance" value="<?php echo $attendance;?>" id="rwb" onkeyup=micro();>
</div>
<div class="mark">
<input type="text" autocomplete="off" name="value11" value="<?php echo $value11;?>" id="sibe">
</div>
<div class="dis" id="local">
<input type="text" class="area" autocomplete="off" name="value12" value="<?php echo $value12;?>">
</div>
</div>
</div>
</div>
<div class="foot">
<div class="final">
<p> Total%<span class="dino"> 100%</span></p>
</div>
<div class="give">
<input type="submit" autocomplete="off" name="search" value="search" id="save">
</div>
</div>
</div>
</body>

</html>
