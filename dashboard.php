<?php
include('config.php');

$sql_admin = "SELECT * FROM admin WHERE admin_id = '".$SESSION['admin_id']."'";
if($result_admin = $connect->query($sql_admin))

{
$rows_admin = $result_admin->fetc_array();

}
?>
WELCOME, <?php echo $rows_admin['admin_name'];
?>
