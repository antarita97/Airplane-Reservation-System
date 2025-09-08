<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airplane_reservation";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

require_once('tcpdf/tcpdf.php');

session_start();
if (isset($_POST['download'])) {
    // Retrieve ticket and passenger details from the session
    $pid = $_SESSION['passenger_id'];
    $ticket_id = $_SESSION['ticket_id'];
    $fid = $_SESSION['flight_id'];
    $bookdate = $_SESSION['booking_date'];
    $cost = $_SESSION['cost'];
    $triptype = $_SESSION['trip-type'];
    $classtype = $_SESSION['class-type'];
    $source = $_SESSION['source'];
    $destination = $_SESSION['destination'];
    $ddate = $_SESSION['departure-date'];
    $rdate = $_SESSION['return-date'];

  //  $passenger_name = $_SESSION['name'];
   // $passenger_type = $_SESSION['passenger_type'];
   // $passenger_gender = $_SESSION['gender'];

    // Generate the PDF
    $pdf = new TCPDF();
    $pdf->SetTitle('Ticket Details');
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'TICKET DETAILS', 0, 1, 'C');

    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 10, 'TICKET-ID: ' . $ticket_id, 0, 1);
    $pdf->Cell(0, 10, 'FLIGHT-ID: ' . $fid, 0, 1);
    $pdf->Cell(0, 10, 'TRIP-TYPE: ' . $triptype, 0, 1);
    $pdf->Cell(0, 10, 'SOURCE: ' . $source, 0, 1);
    $pdf->Cell(0, 10, 'DESTINATION: ' . $destination, 0, 1);
    $pdf->Cell(0, 10, 'CLASS: ' . $classtype, 0, 1);
    $pdf->Cell(0, 10, 'COST: ' . $cost, 0, 1);
    $pdf->Cell(0, 10, 'DEPARTURE-DATE: ' . $ddate, 0, 1);
    $pdf->Cell(0, 10, 'RETURN-DATE: ' . $rdate, 0, 1);
    $pdf->Cell(0, 10, 'BOOKING-DATE: ' . $bookdate, 0, 1);

    $pdf->Ln(10);
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'PASSENGER DETAILS', 0, 1, 'C');


    $sql2 = "SELECT * FROM passenger1 WHERE passenger_id='$pid'";
    $result1 = mysqli_query($conn, $sql2);
    $resultcheck1 = mysqli_num_rows($result1);
    if ($resultcheck1 > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $pdf->SetFont('helvetica', '', 12);
            $pdf->Cell(0, 10, 'Name: ' . $row1['name'] , 0, 1);
            $pdf->Cell(0, 10, 'Age type: ' . $row1['passenger_type'], 0, 1);
            $pdf->Cell(0, 10, 'Gender: ' . $row1['gender'], 0, 1);
           
        }
    }

    $query="SELECT * FROM reservations WHERE user_id='$pid'";
    $data=mysqli_query($conn,$query);
    $resultcheck=mysqli_num_rows($data);
    if($resultcheck>0)
    {
      while($row=mysqli_fetch_assoc($data))
       { 
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'Seats: ' . $row['seat_id'] , 0, 1);
       }
    }


    // Output the PDF as a download
    ob_end_clean(); // Clean the output buffer
    $pdf->Output('ticket.pdf', 'D');
    exit; // Stop script execution
}
?>
