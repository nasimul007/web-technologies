<?php

	session_start();

	$user = array("user1","user2","user3");
	$pw = array("1","2","3");
	$ul = count($user);

	for($x=0; $x<$ul; $x++)
		{
			if($_POST['un']==$user[$x])
			{
				if($_POST['pw']==$pw[$x])
				{
					echo $user[$x];
					header("location:home.php");
				}
				else{}
			}
			else
			{   
				
				echo "wrong password";
			}
		}
?>