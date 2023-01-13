<?php
$username="root";
$password=" "
$dbname="php_programs";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
 die("COnnection failed:".$conn_connect_error)
}
?>