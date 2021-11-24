<?php

$con=mysqli_connect("localhost","root","","connector") or die(mysqli_error());

$s = $_GET['s'];

$res=mysqli_query($con,"select id from contact2");
$f=0;
if(!($s=="" || $s==null))
{
	while ($n=mysqli_fetch_row($res))
	{
		if($s==$n[0])
		{
			$f=1;
		}
	}
}
else
	die();


if($f==1)
	echo "<font color='red'> $s User Name not Available.</font>";
else	
	echo "<font color='green'> $s User Name is Available.</font>";


?>
