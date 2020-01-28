<html>
<body>
<iframe src='header.html' width='100%' height='140px' scrolling='no'></iframe>
<?php
include("config.php");
session_start();

$sql="SELECT * from food where C_id='5'";
$result=mysqli_query($db,$sql);
echo "<table border='2'style='width:1600px'>
<tr>
<th>Select</th>
<th>Quantity</th>
<th>Food Id</th>
<th>Name</th>
<th>Price</th>
<th>Category Id</th>
<th>Specification</th>
<th>Description</th>
</tr>";
if(mysqli_num_rows($result) > 0){
while ($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><input type="checkbox" name="selected"></td>
<td><select size='1' name="quan" style="width:80px; height:20px;">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4>4</option><option value="5">5</option>
</select></td>
<?php
echo "<td>" .$row['Food_id']."</td>";
echo "<td>" .$row['Name']."</td>";
echo "<td>" .$row['Price']."</td>";
echo "<td>" .$row['C_id']."</td>";
echo "<td>" .$row['specification']."</td>";
echo "<td>" .$row['description']."</td>";
echo "</tr>";
?>

<?php
echo"<br>";
echo"<br>";
}
}
echo "</table>";
?>
<br>
<center>
<a href="payment.html">
<button type="button" class="button">ORDER NOW !</button>
</a>
</center>
</body></html>