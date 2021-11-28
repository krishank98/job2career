<?php
session_start();
$User_Name=$_SESSION['name'];
include('db_config.php');

if(isset($_POST['apply']))
{
$apply_id=$_POST['apply_id'];
$job_id=$_POST['job_id'];
$job_title=$_POST['job_title'];
$job_specification=$_POST['job_specification'];
$job_salary=$_POST['job_salary'];
$job_location=$_POST['job_location'];
$job_address=$_POST['job_address'];
$user_id=$_POST['user_id'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$address=$_POST['address'];

$file=$_FILES['data_file']['name'];
$target_path = "upload/".$file;
     
$sql="INSERT INTO job_apply(apply_id,job_id, job_title, job_specification, job_salary, job_location,job_address,user_id,fname,email,pno,address,up_file)VALUES ('$apply_id','$job_id','$job_title','$job_specification','$job_salary','$job_location','$job_address','$user_id','$fname','$email','$pno','$address','$target_path')";
$result=mysql_query($sql);

if($sql)
{
$run = move_uploaded_file($_FILES['data_file']['tmp_name'],$target_path);


echo "<script>alert('Job Applied successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user_home.php">';
}


}

?>


