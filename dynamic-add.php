<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Passenger details</title>
		 <link rel="stylesheet" href="dynamicadd1.css">

<link rel="stylesheet" href=            

                    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                var max_fields = 20; // Maximum number of input fields allowed
                var wrapper = $("#table_field"); // Input fields wrapper
                var add_button = $("#add"); // Add button ID

                var x = 1; // Initial number of input fields
                $(add_button).click(function(e) {
                    e.preventDefault();
                    if (x < max_fields) {
                        x++;
                        $(wrapper).append('<tr><td><input class="form-control" type="text" name="txtFullname[]" required=""></td><td><select id="passenger-type" class="form-control" name="passenger-type[]" required> <option value="adult">Adult</option> <option value="infant">Infant</option> <option value="senior-citizen">Senior-Citizen</option>  </select></td><td><select id="gender"class="form-control" name="gender[]" required><option value="male">Male</option> <option value="female">Female</option> <option value="others">Others</option>  </select></td><td><input class="btn btn-danger" type="button" name="remove" value="Remove"></td></tr>'); // Add input fields HTML
                    }
                });

                $(wrapper).on("click", ".btn-danger", function(e) { // Remove button click event
                    e.preventDefault();
                    $(this).parent().parent().remove(); // Remove input field HTML
                    x--;
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <form class="insert-form" id="insert_form" method="post" action="">
                <hr>
                <h1 class="text-center">Passenger Details Fill Up</h1>
                <hr>
                <div class="input-field">
                    <table class="table table-border" id="table_field">
                        <tr>
                            <th>Name:</th>
                            
                            <th> Age type: </th>
                            <th> Gender: </th>
                            <th>Add or Remove:</th> 
                        </tr>
                        <?php
                            if (isset($_POST['save'])) {
                                $conn = mysqli_connect("localhost","root","","airplane_reservation");
                                $txtFullname = $_POST['txtFullname'];
                                $passenger_type = $_POST['passenger-type'];
                                $gender = $_POST['gender'];
                                $flight_id=$_GET['rn'];
                                function generatekey()
                                     {
                                        $keylength = 8;
                                        $str = "1234567890abcdefghijklmnopqrstuvwxyz!@#$%^&*()";
                                        $randstr = substr(str_shuffle($str),0,$keylength);
                                        return $randstr;
                                     }
                                $store = generatekey();
                                $date = strtotime("tomorrow");
                                $date1=date("Y-m-d",$date);
                                foreach($txtFullname as $key => $value){
                                    $save = "INSERT INTO passenger1(passenger_id,flight_id,name,passenger_type,gender,dat) VALUES('".$store."','".$flight_id."','".$value."','".$passenger_type[$key]."','".$gender[$key]."','".$date1."')";
                                    $query = mysqli_query($conn,$save);
                                }
                            
                        $_SESSION['passenger_id']=$store;
                        $_SESSION['flight_id']=$flight_id;
                            }
                        ?>
                        <tr>
                            <td><input class="form-control" type="text" name="txtFullname[]" required=""></td>
                           <!-- <td><input class="form-control" type="text" name="txtEmail[]" required=""></td> -->
                           <td><select id="passenger-type" class="form-control" name="passenger-type[]" required> <option value="adult">Adult</option> <option value="infant">Infant</option> <option value="senior-citizen">Senior-Citizen</option>  </select></td>
                           <td><select id="gender" class="form-control" name="gender[]" required><option value="male">Male</option> <option value="female">Female</option> <option value="others">Others</option>  </select></td>

                            <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
                        </tr>
                    </table>
                    
                    <center><input class="btn btn-success" type="submit" name="save" id="save" value="Save Data"></center>
                    
                </div>
            </form>
        </div>
    </body>
    </html>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Location:http://localhost/airplane_reservation/3a-reservation.php ');  
    }
    ?>
     
