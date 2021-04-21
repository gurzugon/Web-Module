<?php 
include('../config.php');

if (!$_SESSION['admin_id'])
{
	header ('Location:login.php');
}

$sql_admin = "SELECT * FROM admin WHERE admin_id = '".$_SESSION['admin_id']."'";
if($result_admin = mysqli_query($conn, $sql_admin))
{	
	$rows_admin = $result_admin->fetch_array();
}
?>
Welcome, <?php echo $rows_admin['admin_name']; ?><br/>
<a href = "addemp.php">ADD EMPLOYEE</a><br/>
<a href = "logout.php">LOGOUT</a><br/>
<a href = "employee_list.php">LIST</a><br/>