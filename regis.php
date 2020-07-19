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
    <h2>Donor Registration</h2>
<div class="table">
<form method="post" action="donordata.php" > 
<center>
    <table>
      <tr>
        <td>Name:</td>
        <label for="name"></label>
        <td><input type="text" name="name" value="" id="name" required="required" maxlength="30" />

        </td>
      </tr>
    
      <tr>
        <label for="username"><td>Username:</td></label>

          <td>
              <input class="form-control" type="text" placeholder="Min 5 characters" maxlength="25" id="username" name="user" required><br>
                <span id="usererr"></span>
          </td>
      </tr>

    <tr>
      "<label for="password"><td>Password:</td></label>

      <td><!--input type="password" name="password" value="" id="password" required="required" /-->
        <input class="form-control" type="password" placeholder="Min 8 char, 1 Lowercase,1 Uppercase, 1 Special Charcter" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="pass" name="pass" required>
      </td>
    </tr>
    <tr>
      <label for="confirm"><td>Confirmed Password:</td></label>
      <td><!--input type="password" name="confirm" value="" id="confirm" required="required"/-->
        <input class="form-control" type="password" id="cpass" placeholder="Repeat Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="cpass" required><br><span id="cpasserr"></span>
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
  <td><input type="text" name="phno" value="" id="contact" required="required" maxlength="10">
  </td>
</tr>
<tr>
  <label for="email"><td>Email:</td></label>
  <td><input type="email" name="email" value="" id="emailid" required="required" maxlength="50" placeholder="abcd@gmail.com">
    <span id="emailerr"></span>
  </td>
  </tr>
  <tr>
    <label for="state"><td>State:</td></label>
    <td><select class="" name="state" id="state" required="required">
      <option value="">Select</option>
      <option value="Andaman Nicobar">Andaman Nicobar</option>
      <option value="Andhra Pradesh">Andhra pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chattisgarh">Chattisgarh</option>
      <option value="Dadra">Dadra</option>
      <option value="Daman">Daman</option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value="Gujrat">Gujrat</option>
      <option value="Hariyana">Hariyana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and kashmir">Jammu and kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="karela">karela</option>
      <option value="Lakshdweep">Lakshdweep</option>
      <option value="Madhya Pradesh">Madhya pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Orrisa">Orrisa</option>
      <option value="Pondicherry">Pondicherry</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamilnadu">Tamilnadu</option>
      <option value="Tripura">Tripura</option>
      <option value="uttaranchal">uttaranchal</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="West Bengal">West Bengal</option>
    </select>
    </td>
  </tr>
  <tr>
    <label for="City"><td>City:</td></label>
          <td><select class="" name="City" id="City" required="required">
          <option value="">Select</option>
             <option value="Mumbai">Mumbai</option>
               <option value="Vishakapatnam">Vishakapatnam</option>
               <option value="Banglore">Banglore</option>
               <option value="Indore">Indore</option>
               <option value="Ahmedabad">Ahmedabad</option>
           </select></td><br><br>
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
  <center><input type="submit" name="submit" value="Register" id="submitform" style="width:20%;height: 40px;
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
  <script src="jquery.js"></script>
    <script src="misc.js" type="text/javascript"></script>
        <script src="checkmail.js"></script>


  </body>
</html>

<!--script type="text/javascript">
$(document).ready(function(){

$('#username').blur(function(){

  var username= $(this).val();
  $.ajax({

    url:"check.php",
    method:"POST",
    data:{username:username},
    dataType:"text",
    success:function(html)
    {
      $('#availability').html(html);
    }



  });

});

});  


</script-->
