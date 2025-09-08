<!-- forgot_password.php -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="fgpass.css">
    <title>Forgot Password</title>
    <script>
        function validatePassword() {
            var password = document.getElementById("new_password").value;

            // Define a regular expression to check for special characters
            var specialChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

            // Check if the password meets the requirements
            if (password.length < 8 || !specialChars.test(password)) {
                alert("Password must be at least 8 characters long and contain special characters.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <center>
	<br>
	<br>
	<h1>Forgot Password</h1>
	<br>
    <form method="post" action="update_password.php" onsubmit="return validatePassword()">
        <label for="verification_code">Verification Code:</label>
        <input type="text" id="verification_code" name="code" required>
		<br>
        <br>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
		<br>
        <br>

        <input type="submit" value="Reset Password">
		</center>
    </form>
</body>
</html>


