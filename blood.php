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
<style>
.button {
  border-radius: 4px;
  background-color: Maroon;
  color: white;
  font-size:20px;
  text-align: center;
  
  padding: 10px;
  width: 250px;
  height: 50px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-bottom: 100px;
  margin-left: 480px;
  margin-top: 50px;

}



table,th,td {
	margin-left: 450px;
	padding-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    border: 1px solid black;
    background-color:Maroon; 
    color: white;
    border-color: white;
    border-radius: 10px;
    }
th,td{
	font-size: 16pt;
	width: 149px;
}

td{
	width: 130px;
	padding: 10px;
}
.infooo{
	margin-top: 100px;

	
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
  			<li style="float: right;"><a href="home.html">Log out</a></li>
		</ul>
	    </nav>
	</div>
	<br>

	
	<?php
	require_once('connect.php');
     $query1=mysqli_query($con,"SELECT * FROM bloodgroup2");
						
			?>
							

			<div class="infooo">
				<table> 
	              			
	            <?php
				while ($row1=mysqli_fetch_array($query1)) {
				?>
					<tr><td>Blood Group</td> <label for="BG"></label>
                        <td>Quantity in ml</td></tr>
				<tr><td>A-</td><td style="font-size: 25px;"><?php echo(''.$row1['Anegative'].'<br>');?></td></tr>
	             <tr><td>A+</td><td style="font-size: 25px;"><?php echo(''.$row1['Apositive'].'');?></td></tr>
	             <tr><td>B+</td><td style="font-size: 25px;"><?php echo(''.$row1['Bpositive'].'');?></td></tr>
	             <tr><td>B-</td><td style="font-size: 25px;"><?php echo(''.$row1['Bnegative'].'');?></td></tr>
	             <tr><td>AB+</td><td style="font-size: 25px;"><?php echo(''.$row1['ABpositive'].'');?></td></tr>
	              <tr><td>AB-</td><td style="font-size: 25px;"><?php echo(''.$row1['ABnegative'].'');?></td></tr>
	               <tr><td>O+</td><td style="font-size: 25px;"><?php echo(''.$row1['Opositive'].'');?></td></tr>
	              <tr><td>O-</td><td style="font-size: 25px;"><?php echo(''.$row1['Onegative'].'');?></td></tr>
	              <tr><td>A1-</td><td style="font-size: 25px;"><?php echo(''.$row1['A1negative'].'');?></td></tr>
	              <tr><td>A1+</td><td style="font-size: 25px;"><?php echo(''.$row1['Apositive'].'');?></td></tr>
	              <tr><td>A2+</td><td style="font-size: 25px;"><?php echo(''.$row1['A2positive'].'');?></td></tr>
	             <tr><td>A2-</td><td style="font-size: 25px;"><?php echo(''.$row1['A2negative'].'');?></td></tr>
	             <tr><td>A1B+</td><td style="font-size: 25px;"><?php echo(''.$row1['A1Bpositive'].'');?></td></tr>
	             <tr><td>A1B-</td><td style="font-size: 25px;"><?php echo(''.$row1['A1Bnegative'].'');?></td></tr>
	           	<tr><td>A2B+</td><td style="font-size: 25px;"><?php echo(''.$row1['A2Bpositive'].'
	           	');?></td></tr>
	           	<tr><td>A2B-</td><td style="font-size: 25px;"><?php echo(''.$row1['A2Bnegative'].'');?></td></tr>
	           </table>
	           </div>
	       <?php  } ?>
	       <a href="contact.html"><button class="button" style="vertical-align:middle"><span>Contact us</span></button></a>


<footer class="footer">
    	<h4>Copyright © TheSaviour.com. 2018. All rights reserved.</h4>
    </footer>

</body>
</html>