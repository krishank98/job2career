<?php
include('db_config.php');


if(isset($_POST['register']))
{
$hr_id=$_POST['hr_id'];
$type=$_POST['type'];
$hr_pass=$_POST['hr_pass'];
$hr_name=$_POST['hr_name'];
$hr_email=$_POST['hr_email'];
$hr_pno=$_POST['hr_pno'];
$hr_qli=$_POST['hr_qli'];
$hr_address=$_POST['hr_address'];

 
$sql="INSERT INTO hr(hr_id,type,password, fname, email, pno,qli,address)VALUES ('$hr_id','$type','$hr_pass','$hr_name','$hr_email','$hr_pno','$hr_qli','$hr_address')";
$result=mysql_query($sql);

echo "<script>alert('Registered successfully')</script>";
echo '<script>window.location="admin_home.php"</script>';

}

?>

