<?php
$conn =mysqli_connect('localhost','root','','flight_management');

$query = "SELECT * FROM booking_office";
$result=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking Office</title>
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
			<th colspan="7">
				<h2>Office Details</h2> 
			</th>
		</tr>
		<t>	
			<th>Office Address</th> 
			<th>Office Name</th>
			<th>Office Phone no</th>
			<th>Office id</th> 
			<th>Ticket id</th 
		</t>
		<?php
			while ($rows=mysqli_fetch_assoc($result))
			 {
		?>
					<tr>
						<td><?php echo $rows['office address']; ?></td>
						<td><?php echo $rows['office name']; ?></td>
						<td><?php echo $rows['office Phone no']; ?></td>
						<td><?php echo $rows['office id']; ?></td>
						<td><?php echo $rows['TICKETid']; ?></td>
						
					</tr>
		<?php
					
				}	
		?>	
	</table>	

</body>
</html>