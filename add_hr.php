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

<?php include "admin_title.php" ?>

</div>
<?php include "admin_menu.php" ?>
<center><table width="50%">
  <tr>

<td>

		<h2>Add HR </h2>
					<form action="add_hr_process.php" method="post" name="login" onsubmit='return formValidator();'>
					<table width="661">
						<?php
                              include_once "db_config.php";
                              $result = mysql_query("select * from hr order by (hr_id)desc limit 1");
                               while ($row = mysql_fetch_array($result)) {
                                      $num = $row['hr_id'];
                                      $n = (int) $num;
									  $hr_id = $n + 1;
                                      }
                         ?>
						 <tr><td colspan="2"><p><span class="style2">* Means All Fields are Mandatory</span></p></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>HR ID : </p></td>
							<td width="278"><input name="hr_id" type="text" id="a_id" maxlength="40" readonly value="<?php echo $hr_id ?>" /> </td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>User Type   :</td>
	<td><input type="text" readonly name="type" value="HR" ></td>
</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td height="61"><p><span class="style2">*</span>Password : </p></td>
							<td><input name="hr_pass" type="password" id="a_pass" maxlength="40"/></td>
						</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>Full Name   :</td>
	<td><input type=text name="hr_name" onKeyUp="CheckForAlphabets(this)" ></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="44"><span class="style2">*</span>Email ID   :</td>
	<td><input type="text" name="hr_email" onBlur="valid()" ></td>
</tr>

<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="40"><span class="style2">*</span>Contact No   :</td>
	<td><input type="text" name="hr_pno"  onKeyUp="contact(this)" onBlur="mob()"  ></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="40"><span class="style2">*</span>Qualification   :</td>
	<td> <select  id="txtqli"name="hr_qli" style="width: 190px">
                                                                    <option value="Select"> - - - -  Select- - - - -  </option>
                                                                    <option value="BE">BE</option>
                                                                    <option value="BTech">BTech</option>
                                                                    <option value="Bsc">Bsc</option>
																	<option value="MBA">MBA</option>
              </select>
      </td>
    </tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49"><span class="style2">*</span>Address   :</td>
	<td><textarea name="hr_address" ></textarea></td>
</tr>

<tr>
	<td colspan=2 align=center><input type="submit" name="register" value="Register" >
	
</tr>
					</table>
				</form>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


