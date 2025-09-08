
<html>
    <head>
	 <link rel="stylesheet" href="adminseat.css">
	 <br>
        <title> Available Flights </title>
    </head>
    <body>
	<center> <h1>Passenger Details</h1></center>
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

$query = "SELECT r.seat_id, p.*
          FROM reservations r
          JOIN passenger1 p ON r.user_id = p.passenger_id";

$data = mysqli_query($conn, $query);
$resultcheck = mysqli_num_rows($data);

if ($resultcheck > 0) {
    echo "<br><center><b><font size=5 color=black type= bold>THE ALLOCATED SEATS FOR THE PASSENGERS ARE: </br></b></font></center><br>";
    echo "<table align='center'>
            <tr>
                <th> SEAT_ID </th>
                <th> PASSENGER_ID </th>
                <th> PASSENGER_NAME </th>
                <th> GENDER </th>
                <th> PASSENGER_TYPE </th>
                <th> FLIGHT_ID </th>
            </tr>";

    while ($row = mysqli_fetch_assoc($data)) {
        echo "<tr>";
        echo "<td>" . $row['seat_id'] . "</td>";
        echo "<td>" . $row['passenger_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['passenger_type'] . "</td>";
        echo "<td>" . $row['flight_id'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No allocated seats found for the passengers.";
}
?>
<br>
<center><a href="admin_operations_list.html"><input type="submit" name="" value="BACK"></a></center>
  </body>	
</html>
