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
<?php include "hr_title.php" ?>

</div>
<?php include "hr_menu.php" ?>
<center><table width="50%">
  <tr>

<td>

		<h2>Edit Profile </h2>
					<form action="edit_profile_process_hr.php" method="post" name="login" onsubmit='return formValidator();'>
					<table width="681">
						<?php
						   
						   $result= mysql_query("SELECT * FROM hr WHERE email='$User_Name'");
						   while($row = mysql_fetch_array($result))
						   {
						   $id=$row['hr_id'];
						   ?>
						 <tr><td colspan="2"><p><span class="style2">* Means All Fields are Mandatory</span></p></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>User ID : </p></td>
							<td width="278"><input name="u_id" type="text" id="a_id" maxlength="40" readonly value="<?php echo "$id";?>" /> </td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td height="61"><p><span class="style2">*</span>Password : </p></td>
							<td><?php echo'<input type="password" name="password" value="'.$row['password'].'" ';?></td>
						</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38">Full Name   :</td>
	<td><?php echo'<input type="text" name="fname" readonly  value="'.$row['fname'].'" ';?></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="44">Email ID   :</td>
	<td><?php echo'<input type="text" name="email" onBlur="valid()" readonly value="'.$row['email'].'" ';?></td>
</tr>

<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="40"><span class="style2">*</span>Contact No   :</td>
	<td><?php echo'<input type="text" name="pno" onKeyUp="contact(this)" onBlur="mob()" value="'.$row['pno'].'" ';?></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49"><span class="style2">*</span>Address   :</td>
	<td><?php echo'<input type="text" name="address" value="'.$row['address'].'" ';?></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49">Qualification   :</td>
	<td><?php echo'<input type="text" readonly name="qli" value="'.$row['qli'].'" ';?></td>
</tr>

<tr>
	<td colspan=2 align=center><input type="submit" name="update" value="Update" >
	
</tr><?php } 
?>
					</table>
				</form>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


