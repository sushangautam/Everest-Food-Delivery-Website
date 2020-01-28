<?php
	include("config.php");
	session_start();

$prodname=$_POST['prodname'];
$categ=$_POST['categ'];
$rate=$_POST['rate'];
$desc=$_POST['desc'];
$specification=$_POST['specification'];
$sql= "SELECT * from category where Category_name='$categ'";
$result= mysqli_query($db,$sql);
$row= mysqli_fetch_assoc($result);
$cid=(int)$row["Category_id"];
$sql= "INSERT INTO food(Name,Price,C_id, description,specification) values('$prodname',$rate,$cid,'$desc','$specification')";

if($db->query($sql)){
echo "New food added successfully";
header("refresh:5, url=add_food.html");
}
else{
echo "Error";
}
$db->close();
$db
?>