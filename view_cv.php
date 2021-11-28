<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="Css/style.css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>

<script language="JavaScript" src="javascript/form_validator.js" type="text/javascript"></script>
<style type="text/css">
.style1 {color:#000000;}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
}
#mysubmit { background-color:#6699FF; font-size: 70%; 
color:#FFFFFF;padding:10px;
    font-weight: bold; }

#stud
{
float:left;
margin-left:30px;
}
</style>

</head>

<body>

<div id="main">
<?php include "hr_title.php" ?>

</div>
<?php include "hr_menu.php" ?>
       
<table align="left"><tr>

<td width="678">
					
<form id="job_info" name="job_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table border="1" align="center" bgcolor="#FFFFFF">
	<?php

echo "<tr><th>Apply ID</th><th>Job Title</th><th>Name </th><th>Email</th><th>Pno</th><th>Address</th><th>Download CV</th></tr>";
include('db_cofig.php');
$mail_id=$_GET['id'];
$result= mysql_query("SELECT * FROM job_apply");

while($row = mysql_fetch_array($result))
{

echo "<tr><td>". $row['apply_id'] ."</td><td>". $row['job_title']. "</td><td>". $row['fname']. "</td><td>". $row['email']. "</td><td>". $row['pno']. "</td><td>". $row['address']. "</td><td><a href='download.php?id=".$row['up_file'] ."'>Download File</a></td></tr>";
}

?>
</table></form>

</td>

 </tr></table>
<?php include "footer.php" ?>
</div>
</body>

</html>


