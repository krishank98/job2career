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
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/contain.css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>
<script type="text/JavaScript" src="scw.js"></script>
<script type="text/javascript" src="javascript/validation.js"></script>
<style type="text/css">
.style2 {color: #FF0000}
</style>
<script type="text/javascript">

			
            function CheckForAlphabets(elem)
            {
                var alphaExp = /^[a-z A-Z]+$/;
                if(elem.value.match(alphaExp)){
                    return true;
                }else{
                    alert("give alphabatic name ");
                    return false;
                }
            }
            
			
</script>

</head>

<body>
<div id="main">
<?php include "admin_title.php" ?>

</div>
<?php include "admin_menu.php" ?>
<center><table width="50%">
  <tr>

<td>

		<h2>Add Job </h2>
					<form action="add_job_process.php" method="post" name="addcase" onsubmit='return formValidator();'>
					<table width="671">
						<?php
                              include_once "db_config.php";
                              $result = mysql_query("select * from job order by (job_id)desc limit 1");
                               while ($row = mysql_fetch_array($result)) {
                                      $num = $row['job_id'];
                                      $n = (int) $num;
									  $job_id = $n + 1;
                                      }
                         ?>
						 <tr><td colspan="2"><p><span class="style2">* Means All Fields are Mandatory</span></p></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job ID : </p></td>
							<td width="278"><input name="job_id" type="text" id="job_id" maxlength="40" readonly value="<?php echo $job_id ?>" /> </td>
						</tr>
						
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>Job Title   :</td>
	<td><input type=text name="job_title" onKeyUp="CheckForAlphabets(this)" ></td>
</tr>

<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49"><span class="style2">*</span>Job Specification   :</td>
	<td><textarea name="job_specification" cols="22" rows="5" ></textarea></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>Job Salary   :</td>
	<td><input type=text name="job_salary" ></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>Location   :</td>
	<td><input type=text name="job_location" ></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49"><span class="style2">*</span>Address   :</td>
	<td><textarea name="job_address" cols="22" rows="5" ></textarea></td>
</tr>
<tr>
	<td colspan=2 align=center><input type="submit" name="add" value="Assign Job" >
	
</tr>
					</table>
				</form>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


