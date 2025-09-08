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

        $sql="SELECT * FROM flight;";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);

        if ($resultcheck>0)
        {
     
            echo " <table border='1' align='center'>
                   <tr>
                   <th> Flight_id </th>
                   <th> Flight_name </th>
                   <th> Airline_name </th>
                   <th> Arrival </th>
                   <th> Depurture </th>
                   <th> Duration </th>
                   <th> Dource </th>
                   <th> Destination </th>
                   <th> Adult cost </th>
                   <th> Infant cost </th>
                   <th> Senior citizen cost </th>
                   <th> Type </th>
                   <th colspan='2'> operations </th>
                   </tr>"; 
            while ($row=mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" .$row['flight_id']."</td>";
                echo "<td>" .$row['flight_name']."</td>";
                echo "<td>" .$row['airline_name']."</td>";
                echo "<td>" .$row['arrival']."</td>";
                echo "<td>" .$row['departure']."</td>";
                echo "<td>" .$row['duration']."</td>";
                echo "<td>" .$row['source']."</td>";
                echo "<td>" .$row['destination']."</td>";
                echo "<td>" .$row['adult_cost']."</td>";
                echo "<td>" .$row['infant_cost']."</td>";
                echo "<td>" .$row['senior_citizen_cost']."</td>";
                echo "<td>" .$row['type']."</td>";
                echo "<td><a href ='flight_delete.php?rn=$row[flight_id]'> Delete </a></td>
                <td><a href='flight_update.php?rn=$row[flight_id]& ar=$row[arrival]& dp=$row[departure]& du=$row[duration]'> Update </a> </td>";
                echo "</tr>"; 

            }

        }
        else{
            echo "No records found!";
        }
        echo"</table>";
        echo"<br>";
        echo"<br>";
        echo"<a href='add_flight.php'>";
        echo"<center><input type='submit' name='add new flight' value='ADD NEW FLIGHTS'></center>";
        echo"<br>";
        echo"<br>";
        echo"<a href='admin_operations_list.html'>";
        echo"<center><input type='submit' name='' value='BACK'></center>"
        
          
        ?>
    <html>
    <head>

        <title> AVAILABLE FLIGHTS </title>
			<link rel="stylesheet" href="admin_flight.css">
    </head>
  
     </html>

