<?php
$conn =mysqli_connect('localhost','root','','flight_management');

$query = "SELECT * FROM passenger";
$result=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Fatching data from DB</title>
</head>
<body>
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

</body>
</html>