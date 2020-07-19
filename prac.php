<?php

if(isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['upass'];


$con=mysqli_connect('localhost','root','','project');
		if($con)
		{
			$query=mysqli_query($con,"SELECT username,password FROM receptionist where username='$uname'");
			while ($row=mysqli_fetch_array($query))
			{
				$dbname=$row['username'];
				$dbpass=$row['password'];
			}

			if($dbname==$uname&&$dbpass==$pass)
			{
				
						
			}
							

			
else{
	function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '");window.location.replace("receptionist.html");</script>';
		}
	phpAlert("Username is Wrong");
	}
}
	           } ?>

	           

	        


