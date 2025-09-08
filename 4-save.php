<html>
    <head>
	 <link rel="stylesheet" href="4save.css">
        <title> 4-save </title>
		
    </head>
    <body>
<br>
<br>
<br>
<br>
<?php
// (A) LOAD LIBRARY
require "2-reserve-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["seats"]);

echo "<br><center><b><font size=8 color=white type= bold>YOUR SEAT IS RESERVED SUCCESSFULLY</br></b></font></center><br>";
echo "<br><center><b><font size=7 color=white type= bold>PROCEED FOR THE LAST STEP -></br></b></font></center><br>";
?>
<br>
<br>
<center><a href="payment1.php"><input type="submit" name="" value="PAYMENT"></a></center>
</body>
</html>