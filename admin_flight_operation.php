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
        <title> Available Flights </title>
    </head>
    <body>
        <?php
        session_start();
        $src= $_SESSION['source'];
        $dest= $_SESSION['destination'];
       
        $sql="SELECT * FROM flight WHERE source='$src' AND destination='$dest';";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);

        if ($resultcheck>0)
        {
            echo ("details of the available flights:"."<br>");
            echo " <table border='1' align='center'>
                   <tr>
                   <th> flight_id </th>
                   <th> flight_name </th>
                   <th> airline_name </th>
                   <th> arrival </th>
                   <th> depurture </th>
                   <th> duration </th>
                   <th> source </th>
                   <th> destination </th>
                   <th> adult cost </th>
                   <th> infant cost </th>
                   <th> senior citizen cost </th>
                   <th> book </th>
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
            echo "No records found!";
        }
        
        ?>
        
    </body>
    <a href="flight_entry.php"><input type="submit" name="" value="back"></a>
</html>