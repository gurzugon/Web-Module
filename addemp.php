<?php
include('../config.php');

if(isset($_POST['add']))
{
	$target = "../upload/";
	$target = $target.basename($_FILES['picture']['name']);
	
	$sql_add = "INSERT INTO employee (employee_name,employee_email, employee_picture, admin_id) VALUES
	('".$_POST['name']."','".$_POST['email']."','".$_FILES['picture']['name']."','".$_SESSION['admin_id']."')";
	if($result_add = mysqli_query($conn, $sql_add))
	{
		move_uploaded_file($_FILES['picture']['tmp_name'], $target);
		echo "success";
	}
	else
	{
		echo "failed";
	}
}
?>
<h3>Add Employee<h3/>
<form name="add-form" method="post" enctype="multipart/form-data">
	Name : <input type="text" name="name"/></br>
	Email : <input type="text" name="email"/></br>
	Picture : <input type="file" name="picture"/></br>
	<input type="submit" name="add" value="Add Employee"/>
</form>
<a href = "index.php">MENU</a><br/>