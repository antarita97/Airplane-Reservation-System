<?php 
session_start();
$errmsg="";
$userid="";
$pass="";
if (isset($_POST['login']))
{
    $userid=$_POST['email'];
    $pass=$_POST['password'];
    $servername="localhost";
    $user ="root";
    $password="";
    $db="airplane_reservation"; #the database name 
    //connection to database
    $conn=mysqli_connect($servername,$user,$password,$db);
    if(!$conn){
        die("Unable to connect".mysqli_connect_error());
    }
    $query="select * from customer_master where User_ID='".$userid ."' and Password='". $pass ."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['USERID']=$userid;
        header('Location:flight_entry.php');
    }
    else
    { 
        $errmsg="Incorrect login";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="fltlogin.css">
</head>
<body>
    <div class="center">
            <input type="checkbox" id="show" />
            <label for="show" class="show-btn">welcome</label>
            <div class="container">
                <label
                    for="show"
                    class="close-btn fas fa-times"
                    title="close"
                ></label>
    <h1> <center>LOG-IN </center></h1>
	<br>
    <form method="post" action="login.php" >
        <p>
            <label for="email">EMAIL:</label>
            <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $userid ?>">
        </p>
        <p>
		<br>
            <label for="password">PASSWORD:</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </p>
		<br>
         <center>
		 
          
            <input class="form-control button" type="submit" name="login" value="Login">
         </center>
<div class="link login-link text-center">Not yet a member? <a href="custreg.php">Signup now</a></div>
<br>
<div class="link login-link text-center"><a href="forgot_password.php">Forgot password?</a></div>
    </form>
    </center>
    </body>
    </html>
  

























  