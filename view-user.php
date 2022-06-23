<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";
	
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select * from books";
	$result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
<style>
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
</style>

<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
                <th>Father's Name</th>
                <th>Phone Number</th>
                <th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['fname']; ?></td>
				<td><?php echo $rows['lname']; ?></td>
                <td><?php echo $rows['fathername']; ?></td>
                <td><?php echo $rows['number']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                


			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	mysqli_close($conn);
?>
