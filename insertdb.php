<?php
$Name  =$_POST['Name'];
$Email = $_POST['Email'];
$p_id = $_POST['Passportid'];
$pn = $_POST['Phonenumber'];
$CNIC = $_POST['CNIC'];
$gender = $_POST['Gander'];
$link = mysqli_connect("localhost", "root","","flight_management");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "INSERT INTO passenger VALUES ('$CNIC', '$Name', '$Email','$pn','$gender','$p_id')";
if ($link->query($query) === TRUE) {
 
   //echo '<a href="ticket.html">Ticket</a>';
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}

?>