<?php

$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['username']))
{
	$user=strtolower($_POST['username']);
	$sql="SELECT * FROM register where username='$user'";
	$result=mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)==0)
	{
		echo '<span class="text-danger">Username not available</span>';
	}
	else
	{
		echo '<span class="text-success">Username available</span>';
	}
}
?>