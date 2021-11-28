<html>
    <head>
 
    </head>
    <body >

        <div id="title1">
		
		<br/>
		<div><img src="images/1.png"   />		</div>
		<?php 
		include('db_cofig.php');
   		 $query = mysql_query("SELECT * from hr where email='$User_Name'");
		 while($row = mysql_fetch_array($query))
						   {
						   $a_name=$row['email'];
						 $fname=$row['fname'];
						   
						   ?>
	<br><p align="right" style="color:#FFFFFF; font-size: 36px">Welcome <?php echo "$fname";?> </p>
		<?php } ?>
    </body>
</html>
