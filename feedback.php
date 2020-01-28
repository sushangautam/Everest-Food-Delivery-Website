<?php
	include("config.php");
	session_start();

$uname=$_POST['ab'];
$em=$_POST['a'];
$add=$_POST['abc'];
$com=$_POST['aboc'];
$web=$_POST['xyza'];
$sug=$_POST['sugges'];
$imp=$_POST['improve'];
$rem=$_POST['rem'];

$sql = "INSERT INTO feedback values ('$uname', '$em', $add, '$com', '$web','$sug','$imp','$rem')";
$result = mysqli_query($db,$sql);
if ($db->query($sql)){
echo "New feedback is registered sucessfully";
}
else{
echo "Error:";
}
?>