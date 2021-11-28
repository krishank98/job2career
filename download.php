<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];


ob_start();
include_once "db_config.php";

				
					if(isset($_GET['id'])) {
					$mail_file    = $_GET['id'];
					
    
					header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($mail_file).'"'); 
header('Content-Length: ' . filesize($mail_file));
readfile($mail_file);
					}
		 
		 
?>
		
		 