<?php
include('../config.php');

$sql_view = "SELECT * FROM employee WHERE employee_id = '".$_GET['employee_id']."'";
if ($result_view = mysqli_query($conn, $sql_view))
{
	$rows_view = $result_view->fetch_array();
}
?>
<h3> View Employee</h3>
Name : <?php echo $rows_view['employee_name'];?><br/>  
Email : <?php echo $rows_view['employee_email'];?><br/>
Picture : <img src="../upload/<?php echo $rows_view['employee_picture'];?>"/><br/>
<a href = "employee_list.php">LIST</a>
