<br>
<br>
<br>
<br>
<br>
<br>

<!-- update_password.php -->
<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];
    $new_password = $_POST["new_password"];

    $query = "UPDATE customer_master SET Password = '$new_password' WHERE code = '$code'";
    $result = mysqli_query($conn, $query);

    if ($result) {
 echo "<br><center><b><font size=6 color=black type= bold>Password updated successfully.</font>
 </b></center>";
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }
}

?>
<html>
<head>
<link rel="stylesheet" href="updtpass.css">
</head>
<br>
<br>
<br>
<br>
<center>
  <a href="login.php"><button> Login </button></a>
</center>
</body>
</html>

