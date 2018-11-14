<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$post = mysqli_real_escape_string($mysqli, $_POST['post']);
	$artname = mysqli_real_escape_string($mysqli, $_POST['artname']);
		
	// checking empty fields
	if(empty($post) || empty($artname)) {
				
		if(empty($post)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($artname)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(post,artname) VALUES('$post','$artname')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
