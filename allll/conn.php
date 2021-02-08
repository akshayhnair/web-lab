<?php
$servername='localhost';
$username='root';
$password='';
$dbname='student';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect My sql:' .mysql_error());
}
else
{
echo"database is connected";
}
?>