<html>
<head>
	<link rel="stylesheet" href="tktdtl.css">
	<title>Ticket Details</title>
</head>
<body>

	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "airplane_reservation";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	session_start();
	$pid = $_SESSION['passenger_id'];
	$fid = $_SESSION['flight_id'];
	$tid = $_SESSION['ticket_id'];
	$bookdate = $_SESSION['booking_date'];
	$cost = $_SESSION['cost'];
	$triptype = $_SESSION['trip-type'];
	$classtype = $_SESSION['class-type'];
	$source = $_SESSION['source'];
	$destination = $_SESSION['destination'];
	$ddate = $_SESSION['departure-date'];
	$rdate = $_SESSION['return-date'];

	$sql = "INSERT INTO ticket (ticket_id, passenger_id, flight_id, trip_type, source, destination, class, cost, departure_date, return_date, booking_date)
		VALUES ('$tid', '$pid', '$fid', '$triptype', '$source', '$destination', '$classtype', '$cost', '$ddate', '$rdate', '$bookdate')";
  
	if ($conn->query($sql) === TRUE) {
	
		$sql1 = "SELECT * FROM ticket ORDER BY sl_no DESC LIMIT 1";
		$result = mysqli_query($conn, $sql1);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck > 0) {
			foreach ($result as $row) {
			echo "<br><center><b><font size=7 color=black>TICKET DETAILS:</font></b></center>";
				echo "<br><center><b><font size=5 color=black>TICKET-ID=" . $row['ticket_id'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>FLIGHT-ID=" . $row['flight_id'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>TRIP-TYPE=" . $row['trip_type'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>SOURCE=" . $row['source'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>DESTINATION=" . $row['destination'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>CLASS=" . $row['class'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>COST=" . $row['cost'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>DEPARTURE-DATE=" . $row['departure_date'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>RETURN-DATE=" . $row['return_date'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>BOOKING-DATE=" . $row['booking_date'] . "</font></b></center>";
			}
		}
	}
	
		echo "<br><center><b><font size=7color=black>PASSENGER DETAILS:</font></b></center>";

		$sql2 = "SELECT * FROM passenger1 WHERE passenger_id='$pid'";
		$result1 = mysqli_query($conn, $sql2);
		$resultcheck1 = mysqli_num_rows($result1);
		if ($resultcheck1 > 0) {
			while ($row1 = mysqli_fetch_assoc($result1)) {
				echo "<br><center><b><font size=5 color=black>NAME=" . $row1['name'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>PASSENGER-TYPE=" . $row1['passenger_type'] . "</font></b></center>";
				echo "<br><center><b><font size=5 color=black>GENDER=" . $row1['gender'] . "</font></b></center>";
				$_SESSION['name'] = $row1['name'];
				$_SESSION['passenger_type'] = $row1['passenger_type'];
				$_SESSION['gender'] = $row1['gender'];
			}
		}
	
$query="SELECT * FROM reservations WHERE user_id='$pid'";
$data=mysqli_query($conn,$query);
$resultcheck=mysqli_num_rows($data);
if($resultcheck>0)
{
  while($row=mysqli_fetch_assoc($data))
  { 
    
    echo "<br><center><b><font size=5 color=black> ALLOCATED SEATS ARE: " .$row['seat_id']. "</font></b></center>";
    
   
  }
}

	?>

	<form action="pdf.php" method="post">
		<input type="hidden" name="ticket_id" value="<?php echo $tid; ?>">
		<br>
		<center><input type="submit" name="download" value="Download"></center>
	</form>
	<center><a href="home.html"><input type="submit" name="" value="BACK"></a></center>
</body>
</html>
