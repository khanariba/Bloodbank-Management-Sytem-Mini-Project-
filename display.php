<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Your Registeration Info</title>
	<link rel="stylesheet" href="donordata.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



</head>
<body class="main">
	<!--Header-->
	<div class="header">
  		<h1>The Saviour</h1>
	</div>
		<!--Navigation bar-->
	<div>
		<nav>
		<ul>
  			<li><a class="active" href="home.html"> <i class="fas fa-home"></i> Home</a></li>
  			<li><a href="regis.php"> <i class="fas fa-user-plus"></i> Register</a></li>
  			<li><a href="bb.html"> <i class="fas fa-tint"></i> Why Donate Blood?</a></li>
  			<li><a href="b.html"> <i class="fas fa-tint"></i> Who Needs Blood?</a></li>
  			<li><a href="contact.html"> <i class="fas fa-phone"></i> Contact</a></li>
  			<li><a href="about.html">About</a></li>
  			<li style="float: right;"><a href="home.html">Log out</a></li>
		</ul>
	    </nav>
	</div>
	<br>

<?php
if(isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['upass'];
		$con=mysqli_connect('localhost','root','','project');
		if($con)
		{
			$query=mysqli_query($con,"SELECT username,password FROM register where username='$uname'");
			while ($row=mysqli_fetch_array($query))
			{
				$dbname=$row['username'];
				$dbpass=$row['password'];
			}

			if($dbname==$uname&&$dbpass==$pass)
			{
		
			$show=mysqli_query($con,"SELECT * FROM register WHERE username='$uname' and password='$pass'");
			
			while ($row=mysqli_fetch_array($show,MYSQLI_BOTH)) 
			{
				?>
				<div class="print">
				<table style="top: 0px;"> 
             
	              	<tr>
	              		<th  style="font-size: 25px;">Name:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['name'].'<br>');?></td>
	              	</tr> 
	              	<tr style="border: 1px solid;"><th style="font-size: 25px;">UserName:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['username'].'<br>');?></td>
	              	</tr> <br>
	              	<tr><th style="font-size: 25px;">Date of Birth:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['dob'].'<br>');?></td>
	              	</tr> <br>
	              	<tr><th style="font-size: 25px;">Gender:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['gender'].'<br>');?></td>
	              	</tr><br><br><br> 
	              	<tr><th style="font-size: 25px;">Blood Group:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['bg'].'<br>');?></td>
	              	</tr> <br>
	              	<tr><th style="font-size: 25px;">Weight:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['weight'].'<br>');?></td>
	              	</tr> <br>
	              	<tr><th style="font-size: 25px;">Contact:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['contact'].'<br>');?></td>
	              	</tr> <br>
	              	<tr><th style="font-size: 25px;">Email:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['email'].'<br>');?></td>
	              	</tr> <br>
	              	<tr><th style="font-size: 25px;">State:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['state'].'<br>');?></td>
	              	</tr><br>

	              	<tr><th style="font-size: 25px;">City:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['city'].'<br>');?></td>
	              	</tr><br>
	              	<tr><th style="font-size: 25px;">Area:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['area'].'<br>');?></td>
	              	</tr><br>

	              		<tr><td><a href="update.php"><input type="submit" name="update" value="Update" style="width:80%;height: 40px;
  text-align: center;background-color:Maroon; border-radius: 20px; color:white; font-size: 18px;margin-left: 123px; "></a></td></tr>
  				</div>
	            </table>
<?php  	
            }
        }
        else{
	function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '");window.location.replace("home.html");</script>';
		}
	phpAlert("Username is Wrong");
	}


}
}
?>
<footer class="footer">
    	<h4>Copyright © TheSaviour.com. 2018. All rights reserved.</h4>
    </footer>

</body>
</html>