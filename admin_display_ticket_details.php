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
session_start();

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM ticket WHERE CONCAT(`source`, `destination`, `booking_date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM ticket";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "", "airplane_reservation");
    $filter_Result = mysqli_query($conn , $query);
    return $filter_Result;
}

?>
<html>
    <head>
        <title> Ticket detils view </title>
	<link rel="stylesheet" href="ticketdtlsadmn.css">
    </head>
    <body>
      <center> <p> TICKET DETAILS VIEW </p>
    <form action="admin_display_ticket_details.php" method="post">
           
		   <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
           <input type="submit" name="search" value="FILTER"><br><br>
			</center>

            <table>
                <tr>
				   <th> SL_NO</th>
                   <th> TICKET ID </th>
                   <th> PASSENGER ID. </th>
                   <th> FLIGHT ID. </th>
                   <th> TRIP TYPE </th>
                   <th> SOURCE </th>
                   <th> DESTINATION</th>
                   <th> CLASS </th>
                   <th> COST </th>
                   <th> DEPARTURE DATE </th>
                   <th> RETURN DATE </th>
                   <th> BOOKING DATE </th> 
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['sl_no'];?></td>
                    <td><?php echo $row['ticket_id'];?></td>
                    <td><?php echo $row['passenger_id'];?></td>
                    <td><?php echo $row['flight_id'];?></td>
                    <td><?php echo $row['trip_type'];?></td>
                    <td><?php echo $row['source'];?></td>
                    <td><?php echo $row['destination'];?></td>
                    <td><?php echo $row['class'];?></td>
                    <td><?php echo $row['cost'];?></td>
                    <td><?php echo $row['departure_date'];?></td>
                    <td><?php echo $row['return_date'];?></td>
                    <td><?php echo $row['booking_date'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
	<br>
	<br>
    <center><a href="admin_operations_list.html"><input type="submit" name="" value="BACK"></a></center>
</html>