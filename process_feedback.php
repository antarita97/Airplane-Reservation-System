<html>
<head>
  <title>Airplane Reservation - About Us</title>
  <link rel="stylesheet" href="processfeedback.css">
  </head>
<body>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airplane_reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process feedback form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Insert feedback into the table
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><center><b><font size=8 color=black type= bold>Thank you for your feedback!</br></b></font></center><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</body>
<br>
<center><a href="home.html"><input type="submit" name="" value="BACK"></a></center>
</html>
