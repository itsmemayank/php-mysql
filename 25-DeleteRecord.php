<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($sql);

?>

<table width="300" border="1" cellspacing="1" cellpadding="1">
	
	<?php
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {    
	?>		

	  <tr>
		<td>ID</td>
		<td><?php echo $row["id"]; ?></td>
		<td><a href="25-DeleteUser.php?id=<?php echo $row["id"] ?>">Delete</a></td>
		<td><a href="26-UpdateRecord.php?id=<?php echo $row["id"] ?>">Update</a></td>
	  </tr>
	  <tr>
		<td>First Name</td>
		<td><?php echo $row["firstname"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>Last Name</td>
		<td><?php echo $row["lastname"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td>Email</td>
		<td><?php echo $row["email"]; ?></td>
		<td>&nbsp;</td>
	  </tr>
		
	<?php	
		} 
	?>
		</table>	
<?php	
	} else {
			echo "0 results";
	}

	
$conn->close();
?>

