<?php
	include("config.php");
	session_start();

$cname=$_POST['cardname'];
$ptype=$_POST['paytype'];
$ctype=$_POST['cardtype'];
$cnumber=$_POST['cardnumber'];
$emonth=$_POST['expmonth'];
$eyear=$_POST['expyear'];
$cvv=$_POST['cvv'];

if(isset($_POST['Submit']))
{
$sql="INSERT INTO payment(Cardholders_name,Payment_type,Card_type,Card_number,Expiration_month,Expiration_year,Security_code) values('$cname','$ptype','$ctype',$cnumber,'$emonth',$eyear,$cvv)";

if(mysqli_query($db,$sql)){
echo "Payment Done Successfully";
echo "Order Has Been Placed !";
header("refresh:4, url=category.html");
}
else{
echo "Error";
}
}

?>