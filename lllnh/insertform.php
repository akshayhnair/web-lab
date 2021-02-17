<html>
<body bgcolor="cyan">
<form action="main.html">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$tit=$_POST['title'];
$aut=$_POST['author'];
$qua=$_POST['quantity'];

$sql="INSERT INTO lms (title,author,quantity)
 VALUES('$tit','$aut','qua')";
if(mysqli_query($conn,$sql))
{
echo"new created sucessfully!<br>";
}
else
{
echo"error:" .$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="back to homepage" name="submit">
</center>
</form>
