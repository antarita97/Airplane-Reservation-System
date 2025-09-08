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
<link rel="stylesheet" href="flightentry.css">
<div class="sky">
  <img src="plane3.png">
</div>
    <title>Airplane Reservation Form</title>
  </head>
  <body>
    <form id="myForm" action="submit.php" method="post">
	<label for="trip-type">Trip Type:</label>
      <select id="trip-type" name="trip-type" required>
	    <option value=""> Select Trip Type </option>
        <option value="oneway">One-way</option>
        <option value="roundtrip">Round-trip</option>
      </select>
<?php
$sql="SELECT source FROM city ";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
?>
<br>
<br>
<label for="source">From:</label>
<select id="source" name="source" required>
  <option value=""> Select source </option>
  <?php
     for($i=1;$i<=$row;$i++)
     {
       $row1=mysqli_fetch_array($result);
       
  ?>
 <option value="<?php echo $row1["source"] ?>"><?php echo $row1["source"] ?></option>
 <?php
 }
 ?>
 </select>
 <br><br>

 <?php
$sql="SELECT destination FROM city ";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
?>
<label for="destination">To:</label>
<select id="destination" name="destination" required>
  <option value=""> Select destination </option>
  <?php
     for($i=1;$i<=$row;$i++)
     {
       $row1=mysqli_fetch_array($result);
     
  ?>
 <option value="<?php echo $row1["destination"] ?>"><?php echo $row1["destination"] ?></option>
 <?php
 }
 ?>
 </select>
 <br><br>
<label for="departure-date">Departure Date:</label>
<input type="date" id="departure-date" name="departure-date" min="<?php echo date('Y-m-d'); ?>" required>

<label for="return-date" id="return-date-label" style="display:none">Return Date:</label>
<input type="date" id="return-date" style="display:none" name="return-date" min="<?php echo date('Y-m-d'); ?>" required> <br><br>
<label for="class-type">Class Type:</label>
      <select id="class-type" name="class-type" required>
	   <option value="">Class Type</option>
        <option value="business">Business</option>
        <option value="economy">Economy</option>
        <option value="primary-economy">Premium-Economy</option>
      </select><br><br>
<center><button type="submit" id="submit-button" name="submit-button">Submit</button></center>
</body>
</html>

    <script>
  const tripTypeSelect = document.getElementById('trip-type');
  const returnDateLabel = document.getElementById('return-date-label');
  const returnDateInput = document.getElementById('return-date');
  const departureDateInput = document.getElementById('departure-date');
  const sourceSelect = document.getElementById('source');
  const destinationSelect = document.getElementById('destination');

  tripTypeSelect.addEventListener('change', function() {
    if (this.value === 'roundtrip') {
      returnDateLabel.style.display = 'block';
      returnDateInput.style.display = 'block';
    } else {
      returnDateLabel.style.display = 'none';
      returnDateInput.style.display = 'none';
    }
  });

  const submitButton = document.getElementById('submit-button');

  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // prevent default form submission

    // check that source and destination are different
    if (sourceSelect.value === destinationSelect.value) {
      alert('Please select a different destination');
      return;
    }

    // check that departure date is filled
    if (!departureDateInput.value) {
      alert('Please select a departure date');
      return;
    }

    // check that return date is filled if trip type is round-trip
    if (tripTypeSelect.value === 'roundtrip' && !returnDateInput.value) {
      alert('Please select a return date');
      return;
    }

    // check that return date is after departure date
    const departureDate = new Date(departureDateInput.value);
    const returnDate = new Date(returnDateInput.value);
    if (tripTypeSelect.value === 'roundtrip' && returnDate < departureDate) {
      alert('Return date must be after departure date');
      return;
    }

    // submit the form if all fields are valid
    document.getElementById('myForm').submit();
  });
</script>
