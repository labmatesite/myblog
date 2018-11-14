<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$post = mysqli_real_escape_string($mysqli, $_POST['post']);
	$artname = mysqli_real_escape_string($mysqli, $_POST['artname']);	
	
	// checking empty fields
	if(empty($post) || empty($artname)) {	
			
		if(empty($post)) {
			echo "<font color='red'>Post field is empty.</font><br/>";
		}	
		if(empty($artname)) {
			echo "<font color='red'>Article Name field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET post='$post',artname='$artname' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$post = $res['post'];
	$artname = $res['artname'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	



	<form name="form1" method="post" action="edit.php">
		<table border="0">
	    	<tr> 
				<td>Article Name: </td>
				<td><input type="text" name="artname" value="<?php echo $artname;?>"></td>
			</tr>
			<tr> 
				<td>Article Content: </td>
				<td><input type="text" name="post" value="<?php echo $post;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
