<?php
$con=mysqli_connect("localhost","root","","contact") or die(mysqli_error());	  
//get data from html form
$id=$_POST['id'];
$name=$_POST['name'];
$eid=$_POST['eid'];
$mob=$_POST['mob'];
if(isset($_POST["submit1"]))
{	
//Insert values in empInfo table with column name 
$query="INSERT INTO contact2(emp_id, name, email, mobile)  VALUES ('$id', '$name','$eid','$mob')";
mysqli_query($con,$query);
echo 'Successful Done Registration';
$con->close();
}	
if(isset($_POST["submit4"]))
{	
$query="delete from contact2 where emp_id='$id'";
mysqli_query($con,$query);
echo 'Record Deleted based on Emp_Id';
$con->close();
}
if(isset($_POST["submit2"]))
{	
$query="update contact2 set name='$name' where emp_id='$id'";
mysqli_query($con,$query);
echo 'Name Record updated based on Emp_Id';
$con->close();
}
if(isset($_POST["submit5"]))
{	
$query="select * from contact2";
$dis= mysqli_query($con,$query);
echo "<table border=1>";
echo "<tr>";
echo "<th>"; echo "Emp-Id"; echo "</th>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "<th>"; echo "Mobile"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($dis))
{
	echo "<tr>";
	echo "<td>"; echo $row["emp_id"]; echo "</td>";
    echo "<td>"; echo $row["name"]; echo "</td>";
	echo "<td>"; echo $row["email"]; echo "</td>";
	echo "<td>"; echo $row["mobile"]; echo "</td>";
    echo "</tr>";
}
echo "</table>";
$con->close();
}
if(isset($_POST["submit3"]))
{	
$query="select * from contact2 where emp_id='$id'";
$dis= mysqli_query($con,$query);
echo "<table border=1>";
echo "<tr>";
echo "<th>"; echo "Emp-Id"; echo "</th>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "<th>"; echo "Mobile"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($dis))
{
	echo "<tr>";
	echo "<td>"; echo $row["emp_id"]; echo "</td>";
    echo "<td>"; echo $row["name"]; echo "</td>";
	echo "<td>"; echo $row["email"]; echo "</td>";
	echo "<td>"; echo $row["mobile"]; echo "</td>";
    echo "</tr>";
}
echo "</table>";
$con->close();
}										
?>