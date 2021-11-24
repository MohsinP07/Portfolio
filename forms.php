<?php
session_start();
$con=mysqli_connect("localhost","root","","connector") or die(mysqli_error());	  
//get data from html form
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$hobbies=$_POST['hobbies'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$id = (int)$id;
if(isset($_POST["submit1"]))
{	
//Insert values in empInfo table with column name 
$query="INSERT INTO contact2(id, name, email, hobbies, phone, password)  VALUES ($id, '$name','$email','$hobbies','$phone','$password')";
mysqli_query($con,$query) or die("failed");



echo 'Successful Done Registration';
echo "<a href='loginform.html'>LogIn</a>";
$con->close();
}
?>