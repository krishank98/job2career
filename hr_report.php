<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from hr");
while ($row = mysql_fetch_assoc($sql))
{
$hr_id=$row['hr_id'];
$type=$row['type'];
$fname=$row['fname'];
$password=$row['password'];

$email=$row['email'];
$pno=$row['pno'];
$qli=$row['qli'];
$address=$row['address'];

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

<?php include "admin_title.php" ?>

</div>
<?php include "admin_menu.php" ?>
<center><table>
  <tr>

<td width="80%">

		<h2>HR Report </h2>
					<form id="a_info" name="a_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table cellpadding="0" cellspacing="0" border="1" width="661">
<?php
echo "<tr><th>HR ID</th><th>Name</th><th>Mobile no.</th><th>Email ID</th><th>Address</th><th>Qualification</th></tr>";

include('db_cofig.php');
$result= mysql_query("SELECT * FROM hr");

while($row = mysql_fetch_array($result))
{

echo "<tr><td>". $row['hr_id'] ."</td><td>". $row['fname']. "</td><td>". $row['pno']. "</td><td>" . $row['email'] . "</td><td>" . $row['address']. "</td><td>". $row['qli']. "</td></tr>";
}

?>

</table>
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


