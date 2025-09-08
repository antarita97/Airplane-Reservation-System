
<html>
    <head>
	 <link rel="stylesheet" href="fldltadmn.css">
        <title> flight_delete </title>
    </head>
    <body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airplane_reservation";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['rn'];
$query="DELETE FROM flight WHERE flight_id='$id'";
$data=mysqli_query($conn,$query);
if ($data)
{
    echo "<br><center><b><font size=8 color=white type= bold>Record deleted successfully! </font></b></center>";
}
else{
    echo "Record can't be deleted!";
}
?>
 </body>
 </html>