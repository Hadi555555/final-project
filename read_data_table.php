<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="trina";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);


$conn->close();
?>


<html>
	<head>
		<title>data</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1 align="center">Student List</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>City</th>
				<th>Date of Birth</th>
				<th>GPA</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["id"];
				echo "<tr>";
					echo "<td>". $row["name"]."</td>";
					echo "<td>". $row["phone"]."</td>";
					echo "<td>". $row["email"]."</td>";
					echo "<td>". $row["city"]."</td>";
					echo "<td>". $row["dob"]."</td>";
					echo "<td>". $row["gpa"]."</td>";
					echo "<td>"."<a href='update.php?editid=$id'>Edit</a>"."</td>";
					echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
					echo "</tr>";
			}
		}
		else echo "0 results";
		?>
			
		</table>
	</body>
</html>

