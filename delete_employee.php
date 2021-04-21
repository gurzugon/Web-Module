<?php
include ('../config.php');

	$sql_delete= "DELETE FROM employee WHERE employee_id = '".$_GET['employee_id']."'";
	if ($result_delete = mysqli_query($conn, $sql_delete))
	{
		echo "<script language=javascript>alert('DELETE SUCCESS');
		window.location='employee_list.php';</script>";
	}
	else
	{
		echo "FAILED";
	}
?>