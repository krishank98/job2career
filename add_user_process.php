<?php
include('db_config.php');


if(isset($_POST['register']))
{
$u_id=$_POST['u_id'];
$type=$_POST['type'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$address=$_POST['address'];

 
$sql="INSERT INTO user(user_id,type,password, fname, email, pno, address)VALUES ('$u_id','$type','$password','$fname','$email','$pno','$address')";
$result=mysql_query($sql);

echo "<script>alert('Registered successfully')</script>";
echo '<script>window.location="index.php"</script>';

}

?>

