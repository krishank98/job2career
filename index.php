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
<script type="text/javascript">

function lengthRestrictionpassword(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Password Field");
		elem.focus();
		return false;
	}
}
</script>
</head>

<body>

<div id="main">
<?php include "title.php" ?>

</div>
<?php include "home_menu.php" ?>
       
<table><tr>
<td width="12"></td>
<td width="517">
					
					
					
					<p align="justify"><img src="images/3.jpg" width="558" />  </p>

</td>
 <td width="455" valign="top">
    
<form action="user_Authentication.php" method="post" name="login">
  <table width="431" align="center">
  <tr><td colspan="3" valign="top"><h2> <center>LOGIN HERE<br /><br /></center></h2></td></tr>
    <tr>
      <td width="124" height="36" align="right"><b>Select user type </b></td>
      <td width="5"><b>:</b></td>
  
      <td>
          <select  id="txtlogin"name="txtlogin" style="width: 190px">
                                                                    <option value="Select"> - - - -  Select- - - - -  </option>
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="HR">HR</option>
                                                                    <option value="User">User</option>
              </select>
      </td>
    </tr>
    <tr>
      <td width="124" height="37" align="right"><div align="right"><b>User Id</b></div></td>
      <td width="5"><b>:</b></td>
      <td width="266"><input name="txtusername" type="text" id="uname" maxlength="40" />
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="39" align="right"><b>Password</b></td>
      <td><b>:</b></td>
      <td><input name="txtpwd" type="password" id="pass" maxlength="40"/>
          <span class="style2">*</span></td>
    </tr>
    <tr>
	
      <td align="right"></td>
      <td><input type="submit" id="mysubmit" name="sub"  value="SUBMIT" /></td>
	  <td><a href="register.php">New user Register Here</a></td>
    </tr>
	
  </table>
 
 </form>
</td></tr></table>
<?php include "footer.php" ?>
</div>
</body>

</html>


