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

table,th,td {
	margin-left: 25px;
	padding-top: 10px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    border: 1px solid black;
    background-color:Maroon; 
    color: white;
    border-color: white;
    border-radius: 20px;
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
.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
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
			?>			

<div class="table" style="margin-top: 100px;">
<form method="post" action="table.php" > 
<center>
    <table>
    	<tr>
        <td>Blood Group</td>
        <label for="BG"></label>
        <td>Quantity in ml

        </td>
      </tr>
    
      <tr>
        <td>A-</td>
        <label for="A-"></label>
        <td><input type="text" name="A-" value="" id="name"  maxlength="30" />

        </td>
      </tr>
    
      <tr>
        <label for="A+"><td>A+</td></label>

          <td>
              <input type="text" maxlength="25" id="A+" name="A+"><br>
                
          </td>
      </tr>

      <tr>
        <label for="B+"><td>B+</td></label>

          <td>
              <input type="text" maxlength="25" id="B+" name="B+"><br>
                
          </td>
      </tr>

      <tr>
        <label for="B-"><td>B-</td></label>

          <td>
              <input type="text" maxlength="25" id="B-" name="B-"><br>
                
          </td>
      </tr>
      <tr>
        <label for="AB+"><td>AB+</td></label>

          <td>
              <input type="text" maxlength="25" id="AB+" name="AB+"><br>
                
          </td>
      </tr>
      <tr>
        <label for="AB-"><td>AB-</td></label>

          <td>
              <input type="text" maxlength="25" id="AB-" name="AB-"><br>
                
          </td>
      </tr>
      <tr>
        <label for="O+"><td>O+</td></label>

          <td>
              <input type="text" maxlength="25" id="O+" name="O+"><br>
                
          </td>
      </tr>
      <tr>
        <label for="O-"><td>O-</td></label>

          <td>
              <input type="text" maxlength="25" id="O-" name="O-"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A1+"><td>A1+</td></label>

          <td>
              <input type="text" maxlength="25" id="A1+" name="A1+"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A1-"><td>A1-</td></label>

          <td>
              <input type="text" maxlength="25" id="A1-" name="A1-"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A2+"><td>A2+</td></label>

          <td>
              <input type="text" maxlength="25" id="A2+" name="A2+"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A2-"><td>A2-</td></label>

          <td>
              <input type="text" maxlength="25" id="A2-" name="A2-"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A1B+"><td>A1B+</td></label>

          <td>
              <input type="text" maxlength="25" id="A1B+" name="A1B+"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A1B-"><td>A1B-</td></label>

          <td>
              <input type="text" maxlength="25" id="A1B-" name="A1B-"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A2B+"><td>A2B+</td></label>

          <td>
              <input type="text" maxlength="25" id="A2B+" name="A2B+"><br>
                
          </td>
      </tr>
      <tr>
        <label for="A2B-"><td>A2B-</td></label>

          <td>
              <input type="text" maxlength="25" id="A2B-" name="A2B-"><br>
                
          </td>
      </tr>

</table>

 <a href="table.php"><input type="submit" name="insert" value="Save" style="width:20%;height: 40px;
  text-align: center;background-color:Maroon; border-radius: 10px; color:white; font-size: 18px;margin-left: 50px; margin-top: 25px; margin-bottom: 100px; border: 5px solid #000000;font-family: 'Aclonica';/* Green */
"></a>
   <a href="blood.php" style="width:20%;height: 40px;
  text-align: center;background-color:Maroon; border-radius: 20px; color:white; font-size: 18px;margin-left: 50px; margin-top: 40px; margin-bottom: 100px; padding: 20px; font-family: 'Aclonica'; border: 5px solid #000000;"> Blood availablity </a>

   <a href="table.php"><input type="submit" name="del" value="Delete" style="width:20%;height: 40px;
  text-align: center;background-color:Maroon; border-radius: 20px; color:white; font-size: 18px;margin-left: 50px; margin-top: 35px; margin-bottom: 100px;  border: 5px solid #000000;  "></a>
</center>
</form>
</div>
<footer class="footer">
    	<h4>Copyright © TheSaviour.com. 2018. All rights reserved.</h4>
    </footer>

</body>
</html>
<?php
}
else{
	function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '");window.location.replace("receptionist.html");</script>';
		}
	phpAlert("Username is Wrong");
	}
}
}
	            ?>