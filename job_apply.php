<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from job");
while ($row = mysql_fetch_assoc($sql))
{

$job_id=$row['job_id'];
$job_title=$row['job_title'];
$job_specification=$row['job_specification'];
$job_salary=$row['job_salary'];
$job_location=$row['job_location'];
$job_address=$row['job_address'];

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/contain.css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
</head>

<body>
<div id="main">
<?php include "user_title.php" ?>

</div>
<?php include "user_menu.php" ?>
<center><table>
  <tr>

<td width="80%">

		<h2>Job List </h2>
					<form id="job_info" name="job_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table cellpadding="0" cellspacing="0" border="1" width="650">
<?php
echo "<tr><th>Job ID</th><th>Job Title</th><th>Job Specification</th><th>Salary</th><th>Location</th><th>Address</th><th>Apply</th></tr>";

include('db_cofig.php');
$result= mysql_query("SELECT * FROM job");

while($row = mysql_fetch_array($result))
{

$jid = $row['job_id'];
echo "<tr><td>". $jid ."</td><td>". $row['job_title']. "</td><td>". $row['job_specification']. "</td><td>" . $row['job_salary'] . "</td><td>" . $row['job_location']. "</td><td>" . $row['job_address'] . "</td><td><a href='job_apply_form.php?jid=".$row['job_id'] ."'>Apply Job</a></td></tr>";
}

?>

</table>
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


