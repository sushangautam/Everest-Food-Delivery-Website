<?php
    include("config.php");
    session_start();
    
$miusername=$_POST['uname'];
$mipassword=$_POST['psw'];

$sql= "SELECT Password FROM customer where username = '$miusername'";
$result= mysqli_query($db,$sql);
$row= mysqli_fetch_assoc($result);


if($row['Password']==$mipassword)
{
header("location: category.html");


}
else
{
echo " Invalid Password or Username !";
}

?>
