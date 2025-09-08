<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airplane_reservation";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check database connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>



<html>
<head>
 <link rel="stylesheet" href="admprf.css">
 </head>
 <body>
<p>
    <center><h1> Enter password for admin verification:</h1></center>
    <form method="post" action="admin_proof.php">
    <center><label for="password">PASSWORD:</label>
    <input type="password" name="password" id="password" required>
	<br>
	<br>
<input type="submit" name="submit" value="SUBMIT">
</center>
</p>
</body>
</html>


<?php
if (!empty($_POST['submit']))
{
    $password=$_POST['password'];
    if($password=="admin")
    {
       // echo "success";
        header("Location:http://localhost/airplane_reservation/admin_operations_list.html");
    } 
    else
    {
       echo "Sorry! wrong password";
    }

}
?>



