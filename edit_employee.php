<?php
include('../config.php');

$sql_view = "SELECT * FROM employee WHERE employee_id = 
'".$_GET['employee_id']."'";
if ($result_view = mysqli_query($conn, $sql_view))
{
	$rows_view = $result_view->fetch_array();
}

if(isset($_POST['edit']))
{
	$target = "../upload/";
	$target = $target.basename($_FILES['picture']['name']);
	
	$sql_edit = "UPDATE employee SET employee_name = 
	'".$_POST['name']."',employee_email = '".$_POST['email']."', employee_picture = '".$_FILES['picture']['name']."' WHERE employee_id = 
	'".$_GET['employee_id']."'";
	if($result_edit = mysqli_query($conn, $sql_edit))
	{
		move_uploaded_file($_FILES['picture']['tmp_name'], $target);
		echo " SUCCESS ";
	}
	else
	{
		echo" FAILED ";
	}
}
?>
<h3>Edit Employee</h3>
<form name="add-form" method="post" enctype="multipart/form-data">
Name : <input type="text" name="name" value="<?php echo $rows_view['employee_name'];?>"/><br/>
Email : <input type="text" name="email" value="<?php echo $rows_view['employee_email'];?>"/><br/>
Picture : <input type="file" name="picture"/></br>
<input type="submit" name="edit" value="Edit Employee"/>
</form> 