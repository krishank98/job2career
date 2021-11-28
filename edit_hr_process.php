<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{
$hr_id=$_POST['hr_id'];
$pno=$_POST['pno'];
$address=$_POST['address'];


     
$sql = "UPDATE hr SET pno='$pno',address='$address' WHERE hr_id='$hr_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Record Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_home.php">';
}
else
{
echo "<script>alert('Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_home.php">';
}
}
?>
<?php
include('db_config.php');
if(isset($_POST['delete']))
{

$hr_id=$_POST['id'];

$sql ="delete from hr where hr_id='$hr_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;

if($res==1)
{
echo "<script>alert('Record Deleted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_home.php">';
}
else
{
echo "<script>alert('Record is not Deleted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_home.php">';
}
}
?>


