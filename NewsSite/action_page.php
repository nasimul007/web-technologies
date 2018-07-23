<?php

require 'config.php';
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
    require 'config.php';

    $statement="select password from userlist where name = '$uname'";
    $result = mysqli_query($conn, $statement);

    if (mysqli_num_rows($result) > 0)
        {

            while($row = mysqli_fetch_assoc($result))
            {
				if($row['password'] == $pass) 
				{
					$_SESSION['uname'] = $uname;
					header('location:home.php');

				}
				else echo "wrong username or password";
            }
        }
    else
        {
            echo "Nothing found in db";
        }
    mysqli_close($conn);
 

?>