<?php
	session_start();

	$con=mysqli_connect("localhost","root","","connector") or die(mysqli_error());

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

		$res=mysqli_query($con,"select password from contact2 where name = '$uname'");
	               

	if($row = mysqli_fetch_array($res))
	{   
            if($pwd == $row[0])        
            {
                $_SESSION['uname']=$uname;
				header("Location: wel.php");
            }
            else {
				header("Location: relogin.html");
			}
	}
    else{
        header("Location: relogin.html");
        }	
?>
