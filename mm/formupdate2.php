<html>
<head>
<title>updatedata</title>
</head>
<body bgcolor="cyan">
<form method="post".action="formupdate3.php">
<center>
<?php
include_once'conn.php';
$rid=$_POST["id"];
$sql="SELECT*FROM abcd WHERE frmid="$rid";
$result=mysqli_query($conn,$sql)
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<?php
if row=mysqli_fetch_assoc($result)
{
?>
formid:&nbsp&nbsp<input type="text" value="<?php echo$row["frmid"];?>
<b>username &nbsp &nbsp</b>
<b>password &nbsp&nbsp</b>
<input type="text" value=""<?php echo$row["frmid"];?">                                                                                                                   