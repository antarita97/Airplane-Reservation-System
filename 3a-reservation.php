<!DOCTYPE html>
<html>
  <head>
    <title>Seat Reservation</title>
    <meta charset="utf-8">
    <script src="3b-reservation.js"></script>
    <link rel="stylesheet" href="flightseat.css">
  </head>
  <body>
    <?php
    session_start();
    // (A) FIXED IDS FOR THIS DEMO
    $sessid = $_SESSION['flight_id'];
    $userid = $_SESSION['passenger_id'];

    // (B) GET SESSION SEATS
    require "2-reserve-lib.php";
    $seats = $_RSV->get($sessid);
    ?>

    <!-- (C) DRAW SEATS LAYOUT -->
    <div id="layout"><?php
    foreach ($seats as $s) {
      $taken = is_string($s["user_id"]);
      printf("<div class='seat%s'%s>%s</div>",
        $taken ? " taken" : "",
        $taken ? "" : " onclick='reserve.toggle(this)'",
        $s["seat_id"]
      );
    }
    ?></div>

    <!-- (D) LEGEND -->
	<center>
    <div id="legend">
	
    <b><div class="seat"></div> <div class="txt">Open</div></b>

    <b><div class="seat taken"></div> <div class="txt">Taken</div></b>

   <b> <div class="seat selected"></div> <div class="txt">Your Selected Seats</div></b>
   
    </div>
	 </center>
	
    <!-- (E) SAVE SELECTION -->
    <form id="ninja" method="post" action="4-save.php">
      <input type="hidden" name="sessid" value="<?=$sessid?>">
      <input type="hidden" name="userid" value="<?=$userid?>">
    </form>
   <center> <button id="go" onclick="reserve.save()">Reserve Seats</button></center>
<script>
function goBack() {
  window.history.back();
}
  </body>
</html>