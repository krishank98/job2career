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
 <table align="center" style="border: thin solid #4E9CE9; width: 718px; height: 284px; background-color: #EBEBEB;">
<tr>
<td valign="top" class="style25"><h2 align="center" class="style19 style3" 
           style="background-color: #4E9CE9">
                                            <strong>SERVICES</strong></h2></td>
</tr>
<tr><td valign="top" class="style26"><img src="images/pic.jpg" width="700" height="200" alt="" /></td></tr>
<tr><td valign="top" align="left">


			<p align="justify">
				The online portal Jobs 2 Career.com has been developed where a job seeker who is either a fresher or a person who is intending to change the current job for enhancing their career path in a better way. Thus they can search for vacant positions of their own choice and apply for the same. This portal aims for assisting both the organization as well as the job seeker who are looking for their suitable skills to fit in the company. 
			</p>
</td></tr>


</table>


<?php include "footer.php" ?>
</div>
</body>

</html>


