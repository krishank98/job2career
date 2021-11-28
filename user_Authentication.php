<?php

ob_start();

include('db_config.php');
session_start();

$Usertype = mysql_real_escape_string($_POST['txtlogin']);
$User_Name = mysql_real_escape_string($_POST['txtusername']);
$Password = mysql_real_escape_string($_POST['txtpwd']);


if ($Usertype == "Admin") 
{

    $result = mysql_query("select * from admin where email='$User_Name' and password='$Password'");

    if ($row == mysql_fetch_array($result)) {
	

        header("location:index.php");
    } else  {
        $_SESSION['name'] = $User_Name;
        header("location:admin_home.php");
    }
	
}
 if ($Usertype == "User") 
{

    $result = mysql_query("select * from user where email='$User_Name' and password='$Password'");

    if ($row == mysql_fetch_array($result)) {
	

        
    } else  {
	
        $_SESSION['name'] = $User_Name;
        header("location:user_home.php");
    }
	
}
 if ($Usertype == "HR") 
{

    $result = mysql_query("select * from hr where email='$User_Name' and password='$Password'");

    if ($row == mysql_fetch_array($result)) {
	

        header("location:index.php");
    } else  {
        $_SESSION['name'] = $User_Name;
        header("location:hr_home.php");
    }
	
}

else 
{
echo $password;
   echo '<script>alert("Wrong Username or Password")</script>'; 
  // echo '<script>window.location="index.php"</script>';
}

?>