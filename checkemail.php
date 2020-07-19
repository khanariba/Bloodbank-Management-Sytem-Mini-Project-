<?php

$connect=mysqli_connect('localhost','root','','project');


if($connect)
{
	if($_POST)
	{
		$email=$_POST['email'];
		$query="SELECT * from register WHERE email='$email'";
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