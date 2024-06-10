<html>
	<head>
		<title> form</title>
		<style>
			div{background-color:#f2f2f2; width:30%; margin:auto;border-radius:7px; padding:16px;}
			input[type=text], input[type=email],  
			input[type=number]{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:100%; padding:14px 8px; margin:5px; border-radius:5px;
				background-color:#2ecc71; color:#ffffff; font-size:20px;
			}
			input[type=submit]:hover{ background-color:#27ae60; color:#ffffff;}
		</style>
	</head>
	<body>
		<div>
			<h1>Application form</h1>
			<form action="action_form2.php" method="POST">
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Your Name">
				<label>Phone</label>
				<input type="text" name="phone" placeholder="Enter Your Phone">
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Your Email">
				<label>Courses</label>
				<input type="text" name="courses" placeholder="Enter Your Courses">
				

				<input type="submit" Value="Submit">
				
			</form>
		</div>
	</body>

</html>

