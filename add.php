<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Your Registeration Info</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style type="text/css">
	
.blood{

	margin-top: 150px;
	padding-top: 20px;
	margin-left: 300px;
	margin-bottom: 20px;

}

#submit{
	margin-top: 50%
	margin-bottom: 100%;
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
		<nav >
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
	<div class="blood">
	<h3 style="font-family: 'Amita';">Add Blood</h3>
	<label>
		<h3>Blood Group </h3>
		<input type="text" width="100px" height="50px"s>
	</label>
<label>
		<h3>Quantity</h3>
		<input type="text" width="100px" height="50px" >
	</label>
</div>
	<a href="find.php">  <input type="submit" name="submit" value="Add" style="width:10%;height: 40px;
   text-align: center;background-color:Maroon; border-radius: 20px; color:white; font-size: 18px; opacity:0.8; margin-left: 300px;"   id="submit"></a>	
</body>
</html>