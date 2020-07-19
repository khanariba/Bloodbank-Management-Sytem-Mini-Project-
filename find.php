<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Contact Donor</title>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="find.css">
	<style type="text/css">
.tableprint{
	display:block;
	width: 35%;
	height: 40%;
    text-align: left;
    border: 3px solid black;
    background-color: #000018;
    color: Tomato;
    margin-top: 10%;
    border-radius: 40px;
    margin-left: 30px;  
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;   
}
.footer{
    
    width: 100%;
    bottom: 0;
    left: 0;
    position: fixed;
    height:10%;
    text-align: center;
    font-size: 1.5vw;
    padding:1px;
    background-color: #800000;
    color:white;
    max-width: 100%
}



</style>
</head>
<body class="main">
	<Header>
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
<?php
if(isset($_POST['submit']))
{
	$state=$_POST['State'];
	$city=$_POST['City'];
	$bg=$_POST['BG'];
		$con=mysqli_connect('localhost','root','','project');
		if($con)
		{
			$query=mysqli_query($con,"SELECT city,bg,state FROM register where city='$city' and state='$state' and bg='$bg'");
			
			while ($row=mysqli_fetch_array($query))
			{
				$cityy=$row['city'];
				$statee=$row['state'];
				$bgg=$row['bg'];
			}
			if($cityy==$city && $statee==$state && $bgg==$bg)
			{
				$show=mysqli_query($con,"SELECT * FROM register WHERE city='$city' and bg='$bg' and State='$state' ");
				while ($row=mysqli_fetch_array($show,MYSQLI_BOTH)) 
				{
				?>
				<div class="print">

				<table class="tableprint" > 
	              	<tr>
	              		<th  style="font-size: 25px;">Name:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['name'].'<br>');?></td>
	              	</tr> 
	              	<!--tr style="border: 1px solid;"><th style="font-size: 25px;">UserName:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['username'].'<br>');?></td>
	              	</tr> <br-->
	              	<!--tr><th style="font-size: 25px;">Date of Birth:</th>
	              		<td style="font-size: 25px;"><?php echo(''.$row['dob'].'<br>');?></td>
	              	</tr> <br-->
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
	              	</tr>

	            </table>
	        </div>
	            
<?php  			
            }
        } 
        else
        {
	function phpAlert($msg)
	 {
    echo '<script type="text/javascript">alert("' . $msg . '");window.location.replace("home.html");</script>';
		}
	phpAlert("No Donor Found for this location");
	}
         
}


}
?>
<footer class="footer">
    	<h4>Copyright © TheSaviour.com. 2018. All rights reserved.</h4>
    </footer>

</body>
</html>