<?php
include('../config.php');

if (isset($_POST['login']))
{
	$sql_login = "SELECT * FROM admin WHERE admin_username =
	'".$_POST['username']."' AND admin_password ='".$_POST['password']."'";
	if($result_login = mysqli_query($conn, $sql_login))
	{
		$rows_login = $result_login->fetch_array();
		if($total_login = $result_login->num_rows)
		{
			$_SESSION['admin_id'] = $rows_login['admin_id'];
			header('Location:index.php');
		}
		else
		{
			echo "error";
		}
	}
}
?>





<form name="login-form" method="post";
	<h3>Login</h3>
	Username : <input type="text" name="username"/><br/>
	Password : <input type="password" name="password"/><br/>
	<input type="submit" name="login" value="Login"/>
</form>