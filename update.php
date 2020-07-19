<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>website:bloodbank</title>
    <link rel="stylesheet" href="register.css">
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
    		</ul>
    	    </nav>
    	</div>
      <div class="register">
    <h2>Update and Save your Info</h2>
<div class="table">
<form method="post" action="updatedone.php" > 
<center>
    <table>
      <tr>
        <td>Name:</td>
        <label for="name"></label>
        <td><input type="text" name="name" value="" id="name" required="required"/  >
        </td>
      </tr>
    
      <tr>
        <label for="username"><td>Username:</td></label>

          <td><input type="text" name="username" value="" id="username" required="required"/>
          </td>
      </tr>

    <tr>
      "<label for="password"><td>Password:</td></label>

      <td><input type="password" name="password" value="" id="password" required="required" />
      </td>
    </tr>
    <tr>
      <label for="confirm"><td>Confirmed Password:</td></label>
      <td><input type="password" name="confirm" value="" id="confirm" required="required"/>
      </td>
    </tr>
    <tr>
      <label for="dob"><td>Date of Birth:</td></label>
      <td><input type="date" name="dob" value="" id="dob" required="required"/>
      </td>
    </tr>
    <tr>
      <label><td>Gender:</td></label>
      <td><input type="radio" name="gender" value="male" id="male" required="required"/><label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female" required="required"><label for="female">Female</label>
      </td>
    </tr>
    <tr>
       <label for="bloodgroup"><td>Blood Group:</td></label>
  <td>
     <select class="" name="select" id="bloodgroup" required="required">
       <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option>
      </select>
      </td>
    </tr>
    <tr>
      <label for="weight"><td>Weight:</td></label>
      <td><input type="text" name="kgs" value="" id="weight" required="required">kgs
      </td>
    </tr>
<tr>
  <label for="contact"><td>Contact Number:</td></label>
  <td><input type="text" name="phno" value="" id="contact" required="required">
  </td>
</tr>
<tr>
  <label for="email"><td>Email:</td></label>
  <td><input type="email" name="email" value="" id="email" required="required">
  </td>
  </tr>
  <tr>
    <label for="state"><td>State:</td></label>
    <td><select class="" name="state" id="state" required="required">
      <option value="">Select</option>
      <option value="">Andaman Nicobar</option>
      <option value="">Andhra pradesh</option>
      <option value="">Arunachal Pradesh</option>
      <option value="">Assam</option>
      <option value="">Bihar</option>
      <option value="">Chandigarh</option>
      <option value="">Chattisgarh</option>
      <option value="">Dadra</option>
      <option value="">Daman</option>
      <option value="">Delhi</option>
      <option value="">Goa</option>
      <option value="">Gujrat</option>
      <option value="">Hariyana</option>
      <option value="">Himachal Pradesh</option>
      <option value="">Jammu and kashmir</option>
      <option value="">Jharkhand</option>
      <option value="">Karnataka</option>
      <option value="">karela</option>
      <option value="">Lakshdweep</option>
      <option value="">Madhya pradesh</option>
      <option value="">Maharashtra</option>
      <option value="">Manipur</option>
      <option value="">Meghalaya</option>
      <option value="">Mizoram</option>
      <option value="">Nagaland</option>
      <option value="">Orrisa</option>
      <option value="">Pondicherry</option>
      <option value="">Punjab</option>
      <option value="">Rajasthan</option>
      <option value="">Sikkim</option>
      <option value="">Tamilnadu</option>
      <option value="">Tripura</option>
      <option value="">uttaranchal</option>
      <option value="">Uttar Pradesh</option>
      <option value="">West Bengal</option>
    </select>
    </td>
  </tr>
  <tr>
    <label for="city"><td>City:</td></label>
    <td><input type="text" name="city" value="" id="city" required="required">
    </td>
  </tr>

  <tr>
    <label for="area"><td>Area:</td></label>
    <td><input type="text" name="area" value="" id="area" required="required">
    </td>
  </tr>


<tr>
  <td><h4>Please check your eligibility to donate blood</h4></td>

</tr>
<tr>
  <label><td>I have not suffered from:</td></label>
</tr>
  <tr>
  <td> <input type="checkbox" name="list[]" value="Hepatitis B,C" id="Hepatitis" required="required"/><label for="hepatitis">Hepatitis B,C</label>

  </td>
</tr>
<tr>
  <td> <input type="checkbox" name="list[]" value="AIDS" id="aids" required="required"/><label for="aids">AIDS</label>
  </td>
</tr>
<tr>
  <td><input type="checkbox" name="list[]" value="Cancer" id="cancer" required="required"/><label for="cancer">Cancer</label>
  </td>
</tr>
<tr>
  <td><input type="checkbox" name="list[]" value="Kidney" id="kidney" required="required"/><label for="kidney">Kidney Disease</label>
  </td>
</tr>
<tr>
  <td><input type="checkbox" name="list[]" value="Heart Disease" id="heart" required="required"/><label for="heart">Heart Disease</label>
  </td>
</tr>
<tr>
  </td>
</tr>

</table>


  <br>
  <center><input type="submit" name="submit" value="Save" id="submitform" style="width:20%;height: 40px;
  text-align: center;background-color:Maroon; border-radius: 20px; color:white; font-size: 18px; "   id="submit"></a></center>

</center>
</form>
</div>
<script src="jquery.js"></script>
<script type=validate.js></script>
<script src="app.js"></script>
</div>
</script>
<footer class="footer">
    <h4>Copyright © TheSaviour.com. 2018. All rights reserved.</h4>
  </footer>

  </body>
</html>
