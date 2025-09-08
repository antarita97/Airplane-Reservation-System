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
        <title> feedback view </title>
		<link rel="stylesheet" href="adminfeedback.css">
    </head>
    <body>
      <center> <p> FEEDBACK DETAILS VIEW </p>
      <?php
        $sql="SELECT * FROM feedback;";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);

        if ($resultcheck>0)
        {
            echo " <table border='1' align='center'>
           
                <tr>
				   <th> SL_NO</th>
                   <th> CUSTOMER NAME </th>
                   <th> EMAIL ID. </th>
                   <th> FEEDBACK </th> 
                </tr>";
        
             while($row = mysqli_fetch_assoc($result))
             {
                echo "<tr>";
                echo "<td>" .$row['id']."</td>";
                echo "<td>" .$row['name']."</td>";
                echo "<td>" .$row['email']."</td>";
                echo "<td>" .$row['feedback']."</td>"; 
                echo "</tr>";
             }
        }
        else{
            echo "No feedback found!";
        }
        echo"</table>";
        echo"<br>";
        echo"<br>";
        echo"<a href='admin_operations_list.html'>";
        echo"<center><input type='submit' name='' value='BACK'></center>";
     ?>
    </center>
    </body>
</html>