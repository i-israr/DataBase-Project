<?php
$conn =mysqli_connect('localhost','root','','flight_management');

$query = "SELECT * FROM passenger";
$result=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
<head>
		<table align="center" border="1px" style="width: 700px; line-height:40px">
		<tr>
			<th colspan="6">
				<h2>Passenger Record </h2> 
			</th>
		</tr>
		<t>	
			<th>CNIC</th> 
			<th>name</th>
			<th>email</th>
			<th>phone no</th>
			<th>gender</th>
			<th>passport id</th> 
		</t>
		<?php
			while ($rows=mysqli_fetch_assoc($result))
			 {
		?>
					<tr>
						<td><?php echo $rows['CNIC']; ?></td>
						<td><?php echo $rows['name']; ?></td>
						<td><?php echo $rows['email']; ?></td>
						<td><?php echo $rows['phone no']; ?></td>
						<td><?php echo $rows['gender']; ?></td>
						<td><?php echo $rows['passport id']; ?></td>
					</tr>
		<?php
					
				}	
		?>	
	</table>
	<title>TICKET</title>
	<h2>TICKET</h2>
	<link rel="stylesheet" type="text/css" href='insertform.css'>
</head>
<body>
	<form action="inserttickt.php" method="post">

		<input type="Number" name="seat_no" placeholder="Seat Number"><br>
		<input type="text" name="passenger_type" placeholder="Passenger type"><br>
		<input type="number" required="" name="ticket_amount" placeholder="Ticket amount"><br>
		<input type="text" name="PASSENGER_CNIC" placeholder="Passenger CNIC"><br>		
		<input type="number" required="" name="TICKETid" placeholder="TICkET ID"><br>
		<input type="submit" value="submit">
		<input type="reset">
	</form>  
</body>
</html>