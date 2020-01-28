<html>
<body>
<iframe src='header.html' width='100%' height='140px' scrolling='no'></iframe>
<?php
include("config.php");
session_start();
$sql="SELECT * from food ";
$result=mysqli_query($db,$sql);

while ($row=mysqli_fetch_assoc($result)){
echo "Food Id"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"Name"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"Price"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"Customer_id"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"Specification"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
"Description"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".



"<br>";
echo $row['Food_id']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
$row['Name']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
$row['Price']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
$row['C_id']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
$row['specification']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".
$row['description'];
echo"<br>";
echo"<br>";
}
?>
</body>
</html>
