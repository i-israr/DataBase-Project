<?php
$conn =mysqli_connect('localhost','root','','flight_management');

$query = "SELECT * FROM ticket";
$result=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	<link rel="stylesheet" type="text/css" href="css/static.css">
</head>
<body>
			<ul>
			<li>
				<a href="index.html">
					Home
				</a>
			</li>
			<li>
				<div class="navbar">
				  <div class="dropdown">
				    <a class="dropbtn">Get Ticket
				    </a>
				    <div class="dropdown-content">
				      <a href="passenger.html">Passenger</a>
				       <a href="ticket.html">Ticket</a>
				  
				    </div>
				  </div>
				</div>

				
			</li>&nbsp &nbsp &nbsp
			<li>
				<div class="navbar">
				  <div class="dropdown">
				    <a class="dropbtn">Show Data
				    </a>
				    <div class="dropdown-content">
				      <a href="gpassenger.php">Passenger</a>
				       <a href="showtick.php">Ticket</a>
				      <a href="airport.html">Airport</a>
				      <a href="	ticket.html">Flight</a>
				    </div>
				  </div>
				</div>

				
			</li>&nbsp &nbsp &nbsp
			<li>
				<a href="aboutus.html">
					About Us
				</a>
			</li>&nbsp &nbsp &nbsp
			<li>
				<a href="members.html">
			    	Contact Us
			   	</a>
			</li>
			
		</ul>

	<table align="center" border="1px" style="width: 700px; line-height:40px">
		<tr>
			<th colspan="5">
				<h2>Ticket Details</h2> 
			</th>
		</tr>
		<t>	
			<th>Seat no</th> 
			<th>Passenger type</th>
			<th>Ticket amount</th>
			<th>Passenger CNIC</th>
			<th>Ticket ID</th> 
		</t>
		<?php
			while ($rows=mysqli_fetch_assoc($result))
			 {
		?>
					<tr>
						<td><?php echo $rows['seat no']; ?></td>
						<td><?php echo $rows['passenger type']; ?></td>
						<td><?php echo $rows['ticket amount']; ?></td>
						<td><?php echo $rows['PASSENGER_CNIC']; ?></td>
						<td><?php echo $rows['TICKETid']; ?></td>
					</tr>
		<?php
					
				}	
		?>	
	</table>	

</body>
</html>