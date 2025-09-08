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
	<link rel="stylesheet" href="flightaddadmin.css">
<title> new flight add</title>
<script> 
    function done()
    {
      alert('flight added successfully!');
    }
    </script>
    </head>
  <body>
    <center>
        <h1> ADD NEW FLIGHT DETAILS:</h1>
 <form action="add_flight.php" method="post" id="myForm">
 <p>
            <label for="flight-id"><b>flight-id:</b></label>
            <input type="text" name="flight-id" id="flight-id" required>
        </p>
        <p>
            <label for="flight-name"><b>flight-name:</b></label>
            <input type="text" name="flight-name" id="flight-name" required>
        </p>
        <p>
            <label for="airline-name"><b>airline-name:</b></label>
            <input type="text" name="airline-name" id="airline-name" required> 
        </p>
        <p>
            <label for="arrival-time"><b>arrival-time:</b></label>
            <input type="time" name="arrival-time" id="arrival-time" required> 
        </p>
        <p>
            <label for="departure-time"><b>departure-time:</b></label>
            <input type="time" name="departure-time" id="departure-time" required> 
        </p>
        <p>
            <label for="duration"><b>duration:</b></label>
            <input type="time" name="duration" id="duration" required> 
        </p>
        <p>
            <label for="source"><b>source:</b></label>
            <input type="text" name="source" id="source" required>
        </p>
        <p>
            <label for="destination"><b>destination:</b></label>
            <input type="text" name="destination" id="destination" required>
        </p>
        <p>
            <label for="adult-cost"><b>adult-cost:</b></label>
            <input type="number" name="adult-cost" id="adult-cost" required> 
        </p>
        <p>
            <label for="infant-cost"><b>infant-cost:</b></label>
            <input type="number" name="infant-cost" id="infant-cost" required> 
        </p>
        <p>
            <label for="senior-citizen-cost"><b>senior-citizen-cost:</b></label>
            <input type="number" name="senior-citizen-cost" id="senior-citizen-cost" required> 
        </p>
        <p>
        <label for="type"><b>type:</b></label>
            <input type="text" name="type" id="type" required>
        </p>
		</center>
         <center>
          <input type="submit" value="SUBMIT" name="submit" onclick="done()">
         </center>

    </form>
   
    </center>
    </body>  
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted form data
  $flightid = $_POST['flight-id'];
  $flightname = $_POST['flight-name'];
  $airlinename = $_POST['airline-name'];
  $arrival = $_POST['arrival-time'];
  $departure = $_POST['departure-time'];
  $duration = $_POST['duration'];
  $source = $_POST['source'];
  $destination = $_POST['destination'];
  $adultcost = $_POST['adult-cost'];
  $infantcost = $_POST['infant-cost'];
  $seniorcitizencost = $_POST['senior-citizen-cost'];
  $type = $_POST['type'];
  
  // Insert the form data into the database
  $sql = "INSERT INTO flight (flight_id,flight_name,airline_name,arrival,departure,duration,source,destination,adult_cost,infant_cost,senior_citizen_cost,type) VALUES ('$flightid','$flightname','$airlinename','$arrival','$departure','$duration','$source','$destination',$adultcost,$infantcost,$seniorcitizencost,'$type')";
  if (mysqli_query($conn, $sql)) {
    //echo "data inserted successfully";
   
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?>



