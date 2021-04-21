<?php
include('../config.php');

$sql_employee = "SELECT * FROM employee, admin WHERE employee.admin_id = admin.admin_id";
if($result_employee = mysqli_query($conn, $sql_employee))
	{
	$rows_employee = $result_employee->fetch_array();
	$total_employee = $result_employee->num_rows;
	$num_employee = 0;
	}
?>
<h3>List of Employee</h3>
<table border="1" width="100%">
	<tr>
		<td>#</td>
		<td>Name</td>
		<td>Email</td>
		<td>Picture</td>
		<td>Admin</td>
		<td>Action</td>
	</tr>
	<?php if($total_employee>0) {do { ?>
	<tr>
		<td><?php echo ++$num_employee;?></td>
		<td><?php echo $rows_employee['employee_name'];?></td>
		<td><?php echo $rows_employee['employee_email'];?></td>
		<td><img src="../upload/<?php echo $rows_employee['employee_picture'];?>" height="100" width="100"/></td>
		<td><?php echo $rows_employee['admin_name'];?></td>
		<td><a href ="edit_employee.php?employee_id=<?php echo $rows_employee ['employee_id'];?>">Edit |</a>
			<a href ="view_employee.php?employee_id=<?php echo $rows_employee ['employee_id'];?>">View |</a> 
			<a href ="delete_employee.php?employee_id=<?php echo $rows_employee ['employee_id'];?>"> Delete</a></td>
	</tr>
	<?php } while ($rows_employee = $result_employee->fetch_array());} else {?>
	<tr>
		<td colspan="5" align="center">No Record!</td>
	</tr>
	<?php } ?>
</table>

<a href = "index.php">MENU</a><br/>