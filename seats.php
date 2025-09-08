<?php
// Define the number of rows and seats per row
$rows = 6;
$seats_per_row = 10;

// Define the seat prices
$prices = array(
	'A' => 200,
	'B' => 150,
	'C' => 100,
	'D' => 75,
	'E' => 50,
	'F' => 25
);

// Define the seats as an array of arrays
$seats = array();
for ($i = 0; $i < $rows; $i++) {
	$row = array();
	for ($j = 0; $j < $seats_per_row; $j++) {
		$seat = array(
			'row' => $i + 1,
			'seat' => chr(65 + $j),
			'price' => $prices[chr(65 + $j)],
			'status' => 'available'
		);
		$row[] = $seat;
	}
	$seats[] = $row;
}

// If a seat is selected, change its status to "selected"
if (isset($_POST['selected_seats'])) {
	$selected_seats = explode(',', $_POST['selected_seats']);
	foreach ($selected_seats as $selected_seat) {
		list($row, $seat) = str_split($selected_seat);
		foreach ($seats as &$row_seats) {
			foreach ($row_seats as &$s) {
				if ($s['row'] == $row && $s['seat'] == $seat) {
					$s['status'] = 'selected';
					break 3;
				}
			}
		}
	}
}

// Get a list of booked seats from the database
$booked_seats = array('1A', '2B', '3C', '4D');

// Render the seat map
$num_rows = count($seats);
$num_seats_per_row = count($seats[0]);
?>
<div class="seat-map">
  <h2>Seat Selection</h2>
  <table>
    <tr>
      <td colspan="6" class="aisle"></td>
      <td colspan="2" class="emergency-exit">Emergency<br>Exit</td>
      <td colspan="6" class="aisle"></td>
    </tr>
    <?php
      for ($row = 1; $row <= $num_rows; $row++) {
        echo '<tr>';
        for ($seat = 1; $seat <= $num_seats_per_row; $seat++) {
          $seat_name = $row . $seat;
          if (in_array($seat_name, $booked_seats)) {
            echo '<td class="booked"></td>';
          } elseif (in_array($seat_name, $selected_seats)) {
            echo '<td class="selected">' . $seat_name . '</td>';
          } else {
            echo '<td class="available">' . $seat_name . '</td>';
          }
        }
        echo '</tr>';
      }
    ?>
  </table>
  <form method="post" action="book.php">
    <input type="hidden" name="flight_id" value="<?php echo $flight_id; ?>">
    <input type="hidden" name="selected_seats" value="<?php echo implode(',', $selected_seats); ?>">
    <input type="submit" value="Book Selected Seats">
  </form>
</div>
