<html>
<head>
<title>retrieve data</title>
</head>
<body bgcolor="lightpink">
<center>
<?php
include_once 'conn.php';
$sql="SELECT *FROM abcd";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>id</th>
<th>name</th>
<th>password</th>
<th>gender</th>
<th>email</th>
<th>phonenumber</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row["frmid"];?></td>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["password"];?></td>
<td><?php echo $row["gender"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["phonenumber1"];echo $row["phonenumber2"];?></td>
</tr>
<?php
$i++;
}
?>
</table>
<form method ="POST" action="formdelete2.php">
enter the id to delete:&nbsp&nbsp
<input type ="text" name="frmid">
<br><br><br>
<input type ="submit" name="submit" value="submit">
</form>
<?php
}
else{
echo"no result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html>