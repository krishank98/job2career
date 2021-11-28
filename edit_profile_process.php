
<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{

$u_id=$_POST['u_id'];
$password=$_POST['password'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$address=$_POST['address'];
$fname=$_POST['fname'];


     
$sql = "UPDATE user SET pno='$pno',address='$address',password='$password' WHERE user_id='$u_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Profile Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user_home.php">';
}
else
{
echo "<script>alert('Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user_home.php">';
}
}
?>