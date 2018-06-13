<?php
$a=$_POST["email"];
$b=$_POST["psw"];



$conn= new mysqli("localhost","root","eswecha","adithya");
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
else
{
echo "connected successfully";
}

$sql="CREATE TABLE login(email varchar(60),psw varchar(60))";
if($conn->query($conn)===TRUE)
{
echo "table is created";
}
else
{
echo "table is not created"
}

$sql="INSERT INTO login VALUES('$a','$b')";
if($conn->query($sql)===TRUE)
{
echo "new record created";
}
else
{
echo "error";
}

?>
