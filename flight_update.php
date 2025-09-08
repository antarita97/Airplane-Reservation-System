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

$fid=$_GET['rn'];
$arrival=$_GET['ar'];
$departure=$_GET['dp'];
$duration=$_GET['du'];
?>
<html>
    <head>
<!--  <link rel="stylesheet" href="addflight.css">  -->
<title> flight updation page</title>
<link rel="stylesheet" href="flightupdt.css">

    </head>
    <body>
        <center>
            <h1> UPDATE THE EXSISTING FLIGHT DETAILS </h1>
          <?php 
            echo "<br><center><b><font size=6 color=white>Update the details of flight id=".$fid. "</font></b></center>";
          ?>

            <form action="flight_update.php" method="post" id="myForm">  
            <p>
            <label for="flight-id"></label>
            <input type="hidden" name="flight-id" id="flight-id" value="<?php echo $fid ?>"> 
        </p>
        
        <p>
		<h2> <label for="arrival-time"><b>Arrival-time:</b></label></h2>
            <input type="time" name="arrival-time" id="arrival-time" required> 
        </p>
        <p>
           <h2> <label for="departure-time"><b>Departure-time:</b></label></h2>
            <input type="time" name="departure-time" id="departure-time" required> 
        </p>
        <p>
        <h2> <label for="duration"><b>Duration:</b></label></h2>
            <input type="time" name="duration" id="duration" required> 
        </p>
      
          <input type="submit" value="SUBMIT" name="SUBMIT" id="SUBMIT">
        

     

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $flightid=$_POST['flight-id'];
    $arrival = $_POST['arrival-time'];
    $departure = $_POST['departure-time'];
    $duration = $_POST['duration'];

    // Insert the form data into the database
$sql = "UPDATE flight SET arrival='$arrival', departure='$departure', duration='$duration' WHERE flight_id='$flightid';";
if (mysqli_query($conn, $sql)) {
  echo"<script>alert('record updated successfully')</script>";
  header('Location: http://localhost/airplane_reservation/admin_flight.php');
 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}  
?>
     </form>
    </center>
   </body>
</html>
 