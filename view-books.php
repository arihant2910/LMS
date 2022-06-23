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
				<th>ISBN</th>
				<th>Book Name</th>
				<th>Author's Name</th>
                <th>Publisher</th>
                <th>Edition</th>
                <th>Genre</th>
                <th>Price(in INR)</th>
                <th>Pages</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['ISBN']; ?></td>
				<td><?php echo $rows['BNAME']; ?></td>
				<td><?php echo $rows['ANAME']; ?></td>
                <td><?php echo $rows['PUBLISHER']; ?></td>
                <td><?php echo $rows['EDITION']; ?></td>
                <td><?php echo $rows['GENRE']; ?></td>
                <td><?php echo $rows['PRICE']; ?></td>
                <td><?php echo $rows['PAGES']; ?></td>


			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	mysqli_close($conn);
?>
