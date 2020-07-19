<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Your Updated Info</title>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style type="text/css">
.main{    background-color: Beige;

}

.header{
    background-color: black;
    color:Tomato;
    font-size:12px;
    font-family: 'Aclonica';
    text-align:center;
    margin-top: 0px;
    position: fixed;
    top: 0;
    width: 100%;
    height: 50px;
    left: 0;
}
ul {
    list-style-type: none;
    margin-top: 30px;
    margin-bottom: 30%;
    position: fixed;
    left: 0;
    width: 100%;
    padding: 0;
    overflow: hidden;
    background-color: #800000;   <!--- maroon -->
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: 'Amita';
}

li a:hover {
    background-color:Tomato;
}
.footer{
    
    width: 100%;
    bottom: 0;
    left: 0;
    position: fixed;
    height:10%;
    text-align: center;
    padding:1px;
    background-color: #800000;
    color:white;
}



	

</style>

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
		</ul>
	    </nav>
	</div>

<div class="print" style="margin-top: 10px;">
<?php
if(isset($_POST['submit']))
{
	$pass=$_POST['new'];
	$username=$_POST['username'];
			$con=mysqli_connect('localhost','root','','project');
		if($con)
		$sql="UPDATE register 
				SET password='$pass' WHERE username='$username'";
		$query=mysqli_query($con,$sql);
		if($query)
		{
			echo '<br><center><h3 style="margin-top:140px; margin-bottom:40px;""> Your Password has been changed Sucessfully</h3><center';
			echo '<center><a href="home.html"><input type="submit" name="submit" value="Login" style="width:20%;height: 40px;
  text-align: center;background-color:Maroon; border-radius: 20px; color:white; font-size: 18px; margin-top:40px; "   id="submit"></a></center>		';
			
		}

		else
		{
			echo "unsuccess";
		}
}
?>
<footer class="footer">
    	<h4>Copyright © TheSaviour.com. 2018. All rights reserved.</h4>
    </footer>


</body>
</html>