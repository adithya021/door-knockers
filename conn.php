<?php
$a=$_POST["fname"];
$b=$_POST["uname"];
$c=$_POST["email"];
$d=$_POST["psw"];
$e=$_POST["mobile"];


$conn= new mysqli("localhost","root","eswecha","adithya");
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
else
{
echo "connected successfully";
}

/*$sql="CREATE TABLE reg(fname varchar(60),uname varchar(60),email varchar(60),psw varchar(60),mobile int(10))";
if($conn->query($sql)===TRUE)
{
echo "table is created";
}
else
{
echo "table is not created";
}*/

$sql="INSERT INTO reg VALUES('$a','$b','$c','$d','$e')";
if($conn->query($sql)===TRUE)
{
echo "new record created";
}
else
{
echo "error";
}
?>

