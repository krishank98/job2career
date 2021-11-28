<?php
include('db_config.php');


if(isset($_POST['add']))
{
$job_id=$_POST['job_id'];
$job_title=$_POST['job_title'];
$job_specification=$_POST['job_specification'];
$job_salary=$_POST['job_salary'];
$job_location=$_POST['job_location'];
$job_address=$_POST['job_address'];

 
$sql="INSERT INTO job(job_id,job_title, job_specification, job_salary, job_location, job_address)VALUES ('$job_id','$job_title','$job_specification','$job_salary','$job_location','$job_address')";
$result=mysql_query($sql);

echo "<script>alert('Registered successfully')</script>";
echo '<script>window.location="admin_home.php"</script>';

}

?>

