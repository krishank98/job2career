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
#mysubmit { background-color:#6699FF; font-size: 70%; 
color:#FFFFFF;padding:10px;
    font-weight: bold; }

#stud
{
float:left;
margin-left:30px;
}
.style3 {color: #FFFFFF}
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
       
<br />
 <table align="center" style="border: thin solid #4E9CE9; width: 718px; height: 416px; background-color: #EBEBEB;">
   <tr>
   <td valign="top"><h2 align="center" class="style19 style3" 
           style="background-color: #4E9CE9">
                                            <strong>CONTACT US</strong></h2></td>
   </tr>
   <tr><td valign="top"><img src="images/Picture2.jpg" alt="FAQ" 
           title="FAQ" style="width: 707px; height: 151px" /></td></tr>
  <tr> <td align="left" valign="top">

<p>Welcome to Job2career  <br /><br /><br />

Manav Rachna International Institute of Research and Studies<br />
Sector – 43, Aravalli Hills,<br />
Delhi – Surajkund Road,<br />
Faridabad – 121004, Haryana<br />
Registrar’s Office Phone:– 0129-4268587 / 0129-4268585<br />
Fax:– +91 129 4198211<br />
Email Id: admissions@mru.edu.in</p>

</td></tr></table>


<?php include "footer.php" ?>
</div>
</body>

</html>


