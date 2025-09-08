
<HTML>
<HEAD>
	<link rel="stylesheet" href="reg.css">
	<TITLE>REGISTRATION FORM</TITLE>
   <style>
    .required-field:before {
      content: "*";
      color: red;
      font-weight: bold;
      margin-right: 5px;
    }
  </style>
<script type="text/javascript">
    function validateForm() {
        var email = document.getElementById("emid").value;
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("confirm_pass").value;
   // Validate pin
  var pin = document.getElementById("pin").value;
  if (pin.length !== 6) {
    alert("Pin must be 6 digits long.");
    return false;
  } // Validate contactno
  var contactno = document.getElementById("contactno").value;
  if (contactno.length !== 10) {
    alert("Contact no must be 10 digits long.");
    return false;
  } 
        // Validate email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email == "") {
            document.getElementById("emerr").innerHTML = "Email field is required.";
            return false;
        } else if (!emailPattern.test(email)) {
            document.getElementById("emerr").innerHTML = "Please enter a valid email address.";
            return false;
        } else {
            document.getElementById("emerr").innerHTML = "";
        }

        // Validate password
        var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$%^&~]).{8,}$/;
        if (password == "") {
            alert("Password field is required.");
            return false;
        } else if (!passwordPattern.test(password)) {
            alert("Password must be at least 8 characters long, contain upper and lowercase letters, one special character and one number.");
            return false;
        }

        // Validate confirm password
        if (confirmPassword == "") {
            alert("Confirm password field is required.");
            return false;
        } else if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
</script>
</HEAD>
<HTML>
<BODY>
 <div class="wrapper">
  <b><h2>Registration</h2></b>
	 <div class="input-box">
	<form action="dtindbms.php" method="POST" onsubmit="return validateForm()" >
     <label for="address">Email:</label><span class="required-field"></span><br>
	<input type="email" style="color:black" name="User_ID" placeholder="Type your Email Id" REQUIRED="REQUIRED" id="emid">
	<span id="emerr" style="color:red"> </span> <br>
	</p>
	</div>
	 <div class="input-box">
	 <label for="address">Name of User:</label><span class="required-field"></span><br>
	<input type="text" style="color:black" name="uname" id="uname" placeholder="Enter your full name" REQUIRED="REQUIRED"> </p>
	</div>
	 <div class="input-box">
	 <label for="address">ADDRESS:</label><br>
	<textarea style="color:black" rows=4 cols=30 name="address" id ="address" placeholder="Type your address"></textarea> </p>
	</div>
	 <div class="input-box">
	<label for="city">CITY:</label><br>
	<input type="text" style="color:black" name="city" id="city" placeholder="Enter your city" > </p>
	</div>
	 <div class="input-box">
 <label for="pin">PIN:</label><br>
	<input type="text"  style="color:black" name="pin" id ="pin" placeholder="Enter your pin number" maxlength="6"> </p>
	</div>
	 <div class="input-box">
	 <label for="ph">CONTACT NO:</label><span class="required-field"></span><br>
	<input type="text" style="color:black" name="Contact_no" id="contactno" placeholder="Enter your contact no."maxlength="10" REQUIRED="REQUIRED"> </p>
	</div>
	 <div class="input-box">
   <label for="password">PASSWORD:</label><span class="required-field"></span><br>
    <input type="password" style="color:black" name="Password" id="pass" placeholder="Enter the password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$%^&~]).{8,}" 
    title="Must contain at least one number and one uppercase letter, one lowercase letter, and at least 8 or more characters and at least one special character" required>  
	<span id="message" style="color:red"> </span> <br> <br> </p>
	</div>
	 <div class="input-box">
    <label for="password">CONFIRM PASSWORD:</label><span class="required-field"></span><br>
    <input type="password" style="color:black" name="Confirm_Password" id="confirm_pass" placeholder="Confirm the password" required>  
	<span id="confirm_message" style="color:red"> </span> <br> <br> </p>
	</div>
	 <div class="input-box">
    <center><a href="login.php"><button class=button1>Submit</button></a></center>
		</p>
		</div>
		 <center> Already a member? <a href="login.php">Sign in</a></center>
		</form>	
      </div>
	  </body>
	  </html>

