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
?>
<html>
    <head>
	<link rel="stylesheet" href="cancelation.css">
<title> cancelation page</title>
    </head>
  <body>
    <center>
	<br>
		<br>
        <h1> CANCEL BOOKING</h1>
		
 <form action="cancel_booking.php" method="post" id="myForm">
 <p>
 <br>
<br>
            <label for="ticket_id">ENTER YOUR TICKET ID TO CANCEL THE BOOKING:</label>
			<br>
            <input type="text" name="ticket_id" id="ticket_id" required>
        </p>
       
        <br>
		<br>
         <center>
          <input type="submit" value="SUBMIT" name="submit">
         </center>

    </form>
</center>
    </body>  
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted form data
  $ticketcancel = $_POST['ticket_id'];
  
$query="DELETE FROM ticket WHERE ticket_id='$ticketcancel'";
$data=mysqli_query($conn,$query);
if ($data)
{
   echo "<br><center><b><font size=6 color=black type= bold>Record deleted successfully!</font></b></center>";
}
else{
    echo "Record can't be deleted!";
}
}
?>
<center><a href="home.html"><input type="submit" name="" value="BACK"></a></center>