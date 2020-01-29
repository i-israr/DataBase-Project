<?php
$seat_no=$_POST['seat_no'];
$passenger_type=$_POST['passenger_type'];
$ticket_amount=$_POST['ticket_amount'];
$PASSENGER_CNIC = $_POST['PASSENGER_CNIC'];
$TICKETid  = $_POST['TICKETid'];
$link = mysqli_connect("localhost", "root","","flight_management");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "INSERT INTO ticket VALUES ('$seat_no', '$passenger_type', '$ticket_amount','$PASSENGER_CNIC','$TICKETid')";
if ($link->query($query) === TRUE) {
 
   //echo '<a href="ticket.html">Ticket</a>';
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}

?>