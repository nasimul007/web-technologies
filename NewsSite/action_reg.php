<?php

require 'config.php';
	$uname = $_POST['un'];
	$pass = $_POST['pa'];
	
	

    $statement="Insert into userlist(name,password) values ('$uname','$pass')";
    $result = mysqli_query($conn, $statement);
	mysqli_close($conn);
	
	if($result)
	{
		header('location:register.php');
	}
	else
		mysqli_error($conn);

	//mysqli_close($conn);
	

?>