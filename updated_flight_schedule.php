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

$sql = "SELECT * FROM flight;";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

?>

<html>
<head>
    <title>AVAILABLE FLIGHTS</title>
	 	<link rel="stylesheet" href="flight_update.css">
</head>
<body>
<center>
<br>
<br>
<br>
<br>

 <h1>UPDATED FLIGHTS</h1>
    <?php
    if ($resultcheck > 0) {
        echo "<table>
               <tr>
               <th>Flight_id</th>
               <th>Flight_name</th>
               <th>Airline_name</th>
               <th>Arrival</th>
               <th>Departure</th>
               <th>Duration</th>
               <th>Source</th>
               <th>Destination</th>
               </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['flight_id'] . "</td>";
            echo "<td>" . $row['flight_name'] . "</td>";
            echo "<td>" . $row['airline_name'] . "</td>";
            echo "<td>" . $row['arrival'] . "</td>";
            echo "<td>" . $row['departure'] . "</td>";
            echo "<td>" . $row['duration'] . "</td>";
            echo "<td>" . $row['source'] . "</td>";
            echo "<td>" . $row['destination'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        echo "<div class='button-container'>";
        echo "</div>";

        echo "<div class='image-container'></div>";
    } else {
        echo "No records found!";
    }
    ?>
	</center>
	<br>
	<br>
	<center><a href="home.html"><input type="submit" name="" value="BACK"></a></center>
</body>
</html>
