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
<?php include "admin_title.php" ?>

</div>
<?php include "admin_menu.php" ?>
       
<table align="left"><tr>

<td width="628">
					<h2>WELCOME ADMIN   </h2>
					
					
					<p align="left"><img src="images/2.jpg" width="684" />  </p>

</td>

 </tr></table>
<?php include "footer.php" ?>
</div>
</body>

</html>


