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
	 <link rel="stylesheet" href="flightdetails.css">
	 <br>
        <title> Available Flights </title>
    </head>
    <body>
	<br>
	<br>
	<center> <h1>Details of the available flights</h1></center>
        <?php
        session_start();
        $src= $_SESSION['source'];
        $dest= $_SESSION['destination'];
       
        $sql="SELECT * FROM flight WHERE source='$src' AND destination='$dest';";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);

        if ($resultcheck>0)
        {
            echo " <table align='center'>
                   <tr>
                   <th> Flight_id </th>
                   <th> Flight_name </th>
                   <th> Airline_name </th>
                   <th> Arrival </th>
                   <th> Depurture </th>
                   <th> Duration </th>
                   <th> Source </th>
                   <th> Sestination </th>
                   <th> Adult cost </th>
                   <th> Infant cost </th>
                   <th> Senior citizen cost </th>
                   <th> Book </th>
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
                echo "<td><a href ='dynamic-add.php?rn=$row[flight_id]'> Book </a></td>";
                echo "</tr>"; 

            }

        }
        else{
            echo "<br><center><b><font size=6 color=black type= bold>No records found!</font></b></center>";
        }
        
        ?>
    </body>
    
	
</html>