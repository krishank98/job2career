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

			function contact(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');

                }
            }
			function digit(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');
					return true;

                }
				else{
                    alert("only numeric ");
                    return false;
                }
            }
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
            function mob()
            {
                var rl=document.getElementById("pno").value;
                if(rl.toString().length<10||rl.toString().length>10)
                {
                    alert("Contact No. should be of ten digits");
                    return false;
                }

            }
			
</script>
<script type="text/javascript">
            function valid() {
                //alert('calling');
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                // var address = document.forms[form_id].elements[txtemail_id].value;
                var address = document.getElementById('email').value;
                if(reg.test(address) == false) {
                    alert('Invalid Email Address');
                    return false;
                }
            }
        </script>
</head>

<body>
<div id="main">
<?php include "user_title.php" ?>

</div>
<?php include "user_menu.php" ?>
<center><table width="50%">

  <tr>

<td>

		<h2>Apply Job</h2>
		 <fieldset><legend> Personal Information</legend>
					<form action="job_apply_form_process.php" method="post" name="login" enctype="multipart/form-data">
					<table width="651">
						
						 <tr><td colspan="2"><p><span class="style2">* Means All Fields are Mandatory</span></p></td></tr>
						 	<?php
                              include_once "db_config.php";
                              $result = mysql_query("select * from job_apply order by (apply_id)desc limit 1");
                               while ($row = mysql_fetch_array($result)) {
                                      $num = $row['apply_id'];
                                      $n = (int) $num;
									  $ap_id = $n + 1;
                                      }
                         ?>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Apply ID : </p></td>
							<td width="278"><input name="apply_id" type="text" id="r_id" maxlength="40" readonly value="<?php echo $ap_id ?>"  /> </td>
						</tr> 
<?php
include_once "db_config.php";
						   $job_id=$_GET['jid'];
						   $result= mysql_query("SELECT * FROM job WHERE job_id='$job_id'");
						   while($row = mysql_fetch_array($result))
						   {
						   $id=$row['job_id'];

?>


<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job ID : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="job_id" size="25" id="c_id" value="'.$row['job_id'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job Title : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="job_title" size="25" id="c_id" value="'.$row['job_title'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>						
						
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job Specification : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="job_specification" size="25" id="c_id" value="'.$row['job_specification'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>	
						
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job Salary : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="job_salary" size="25" id="c_id" value="'.$row['job_salary'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>					
						
					<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job Location : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="job_location" size="25" id="c_id" value="'.$row['job_location'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>	
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Job Address : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="job_address" size="25" id="c_id" value="'.$row['job_address'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>
						<?php } ?>
						<?php
						   include_once "db_config.php";
						   $result= mysql_query("SELECT * FROM user WHERE email='$User_Name'");
						   while($row = mysql_fetch_array($result))
						   {
						   $id=$row['user_id'];
						   ?>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>User ID : </p></td>
							<td width="278"><?php echo'<input type="text" readonly name="user_id" size="25" id="c_id" value="'.$row['user_id'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?> </td>
						</tr>
						
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Full Name : </p></td>
							<td><?php echo'<input type="text" readonly onKeyUp="CheckForAlphabets(this)" name="fname" size="25" id="r_type" value="'.$row['fname'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Email ID : </p></td>
							<td>
							<?php echo'<input type="text" name="email" readonly id="ch_email" maxlength="40"  size="25" value="'.$row['email'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Contact no. : </p></td>
							<td>
							<?php echo'<input type="text" readonly name="pno" id="c_pno" maxlength="40" onKeyUp="digit(this)" onKeyUp="contact(this)" onBlur="mob()"  size="25" value="'.$row['pno'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Address : </p></td>
							<td>
							<?php echo'<input type="text" name="address" readonly id="c_address" maxlength="40" size="25" value="'.$row['address'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Choose a report to upload: </p></td>
							<td>
						<input id="file" type="file" name="data_file"   /></td>
</tr>
						
<tr>
	<td colspan=2 align=center><input type="submit" name="apply" value="Apply Job" >
	
</tr><?php } ?>
					</table>
				</form></fieldset>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


