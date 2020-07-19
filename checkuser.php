<?php

$connect=mysqli_connect('localhost','root','','project');


if($connect)
{
	if($_POST)
	{
		$user=$_POST['user'];
		$query="SELECT * from register where username='$user'";
		$result= mysqli_query($connect,$query);
		if(mysqli_num_rows($result)==0)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}

}
?>