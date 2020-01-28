<?php
$myname = filter_input(INPUT_POST, 'name');
$myemail = filter_input(INPUT_POST, 'email');
$myphone = filter_input(INPUT_POST, 'phone');
$myaddress = filter_input(INPUT_POST, 'address');
$myusername = filter_input(INPUT_POST, 'username');
$mypassword = filter_input(INPUT_POST, 'password');
if (!empty($myusername)){
if (!empty($mypassword)){
$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "foodorder";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO customer (Name, E_mail, Contact_number, Address, username, Password) 
values ('$myname', '$myemail', $myphone, '$myaddress', '$myusername','$mypassword')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
header("Location: index1.html");
?>