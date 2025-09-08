<?php
include "connection.php";
$User_ID = $_POST["User_ID"];
$uname = $_POST["uname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$Contact_no = $_POST["Contact_no"];
$Password = $_POST["Password"];

$query1 = "SELECT * FROM customer_master";
$flag = 0;
$result = mysqli_query($conn, $query1);
while ($row = $result->fetch_assoc()) {
  if ($row["User_ID"] == $User_ID) {
    echo "<br><center><b><font size=10 color=blue>Record with this user id already exists...</font></b></center>";
    $flag = 1;
    break;
  }
}
if ($flag == 0) {
  $code = rand(999999, 111111);
  $status = "verified";
  $query2 = "INSERT INTO customer_master VALUES('$User_ID','$uname','$address','$city','$pin','$Contact_no','$Password','$code', '$status')";
  $row = mysqli_query($conn, $query2);

  if ($row) {
    echo "<br><center><b><font size=10 color=black>Record inserted successfully</font></b></center>";
    echo "<br><center><b><font size=6 color=black>Your verification code is: $code</font></b></center>";
    echo "<br><center><b><font size=6 color=black>User Name: $uname</font></b></center>";
    echo "<br><center><a href='javascript:downloadPDF()'><button>Download as PDF</button></a></center>";
  } else {
    echo "<br><center><b><font size=10 color=purple>Database is not connected</font></b></center>";
  }
}
?>


<html>
<head>
  <link rel="stylesheet" href="dbms.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function downloadPDF() {
      var doc = new jsPDF();
      var content = "<br><center><b><font size=10>Record inserted successfully</font></b></center>";
      content += "<br><center><b><font size=6>Your verification code is: <?php echo $code; ?></font></b></center>";
      content += "<br><center><b><font size=6>User Name: <?php echo $uname; ?></font></b></center>";
      doc.fromHTML(content, 15, 15);
      doc.save("customer_data.pdf");
    }
  </script>
</head>
<br>
<center>
 <a href="login.php"><button>Login</button></a>
</center>

<body>
  <!-- Your HTML content goes here -->
</body>
</html>
