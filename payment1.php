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
  $pid=$_SESSION['passenger_id'];
  $fid=$_SESSION['flight_id'];
  $class=$_SESSION['class-type'];
  
  $sql="SELECT passenger_type FROM passenger1 WHERE passenger_id='$pid';";
  $result=mysqli_query($conn,$sql);
  $resultcheck=mysqli_num_rows($result);
  

  $sql1="SELECT adult_cost,infant_cost,senior_citizen_cost FROM flight WHERE flight_id='$fid';";
  $result1=mysqli_query($conn,$sql1);
  $resultcheck1=mysqli_num_rows($result1);
  $adult_total=0;
  $infant_total=0;
  $senior_citizen_total=0;
  $const=0;
  

  while ($resultcheck>0 && $resultcheck1>0)
  {
    while ($row=mysqli_fetch_assoc($result))
            {
              if($row['passenger_type']=="adult")
              {
				$result1=mysqli_query($conn,$sql1);
                $row1=mysqli_fetch_assoc($result1);
                $adult_total=$adult_total+ $row1['adult_cost'];
              }
              elseif($row['passenger_type']=="infant")
              {
			    $result1=mysqli_query($conn,$sql1);
                $row2=mysqli_fetch_assoc($result1);
             
                $infant_total=$infant_total+ $row2['infant_cost'];
              }
              elseif($row['passenger_type']=="senior-citizen")
              { 
			    $result1=mysqli_query($conn,$sql1);
                $row3=mysqli_fetch_assoc($result1);
             
                $senior_citizen_total=$senior_citizen_total+ $row3['senior_citizen_cost'];
              }

            }
            $resultcheck=$resultcheck-1;
            
  }
  $total_cost=$adult_total+$infant_total+$senior_citizen_total;
  ?>
  <?php
   function generatekey1()
   {
      
      $randstr = uniqid('pid-');
      return $randstr;
   }
  $store1 = generatekey1();
   $date = strtotime("tomorrow");
   $date2=date("Y-m-d",$date);
  ?>

  <html>
    <head>
	 <link rel="stylesheet" href="payment.css">
      <title> Payment Form </title>
    </head>
   <body>
	  <div class="wrapper">
	<h1> <center> Booking Payments Informations</center> </h1> 
	<center>
<form action="final_ticket.php" method="post" id="myForm">
     <div class="input-box">
	 <label id="para1"><b>Booking No. </b></label>
	 <input type="text" name="Booking_No" readonly REQUIRED="REQUIRED" value="<?php echo $store1 ?>">
	 </div>
	 <br>
	   <div class="input-box">
	 <label id="para1"><b>Date of payment</b></label> 
	 <input type="text"  name="Payment_Date" readonly REQUIRED="REQUIRED" value="<?php echo $date2 ?>"> 
	 </div>
	 <br>
	 
	 <div class="input-box">
	  <label id="para1"><b>Card type</b></label>
	  <input type="text" name="card_type" id="emid" value="" required>
	  </div>
	  <br>
	  <div class="input-box">
	  <label id="para1"><b>Card No</b></label>
	  <input type="text" name="card_no" id="emid" value="" required>
	  </div>
	  <br>
	  <div class="input-box">
	  <label id="para1"><b> Name of the bank </b></label>
	  <input type=text name="Bank_Name"  value="" required>
	  </div>
	  <br>
	  <div class="input-box">
	  <label id="para1"><b>IFSC</b> </label>
	  <input type=text name="Bank_IFSC"  value="" required>
	  </div>
	  <br>
	  <div class="input-box">
	  <label id="para1"><b>Account No</b><label>
	  <input type="text" name="Account_no" value="" required>
	  </div>
	  <br>
	   <div class="input-box">
	  <label id="para1"> <b>Name in account</b></label>
	  <input type="text" name="Account_Name" value=""required>
	  </div>
	  <br>
	  <div class="input-box">
	  <label id="para1"><b>Booking Amount paid </b></label>
	  <input type="text" name="Book_amount" readonly value="<?php echo $total_cost ?>" >
	  </div>
	  <br>
	   <input type="submit" value="Submit">
</form>

	 <script>
  window.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('myForm');
    form.addEventListener('submit', function(event) {
      if (!validateForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
      }
    });
  });

  function validateForm() {
    var cardNumber = document.getElementById("emid").value.trim();
    var cardRegex = /^[0-9]{16}$/; // Regular expression to match a 16-digit card number

    if (cardNumber === "") {
      alert("Please provide a card number.");
      return false; // Prevent form submission if card number is empty
    }


    return true; // Allow form submission if card number is provided and valid
  }
</script>

	  </body>
  </html>
  <?php
  $_SESSION['ticket_id']=$store1;
  $_SESSION['booking_date']=$date2;
  $_SESSION['cost']=$total_cost;
  ?>
  
  