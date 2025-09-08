<?php
// Retrieve the form data
$tripType = isset($_POST['trip-type']) ? $_POST['trip-type'] : '';
$classType = isset($_POST['class-type']) ? $_POST['class-type'] : '';
$source = isset($_POST['source']) ? $_POST['source'] : '';
$destination = isset($_POST['destination']) ? $_POST['destination'] : '';
$departureDate = isset($_POST['departure-date']) ? $_POST['departure-date'] : '';
$returnDate = isset($_POST['return-date']) ? $_POST['return-date'] : '';


// Create a new database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airplane_reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!empty($tripType) && !empty($classType) && !empty($source) && !empty($destination) && !empty($departureDate)) {
  // Prepare the SQL query to insert the data into the "flight_details" table
  $sql = "INSERT INTO flight_details (source, destination,trip_type,class_type, departure_date, return_date)
          VALUES ('$source', '$destination','$tripType','$classType','$departureDate', '$returnDate')";
  
  // Execute the SQL query
  if ($conn->query($sql) === TRUE) {
     // echo "Form submitted successfully";
     
      session_start();
      $_SESSION['trip-type']=$tripType;
      $_SESSION['class-type']=$classType;
      $_SESSION['source']=$source;
      $_SESSION['destination']=$destination;
      $_SESSION['departure-date']=$departureDate;
      $_SESSION['return-date']=$returnDate;


    header ('Location:http://localhost/airplane_reservation/flight_details_domestic.php ');
    
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else {
  echo "Please fill all the required fields";
}

// Close the database connection
$conn->close();
?>
