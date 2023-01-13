<?php include("connect.php");
if($_POST)
{
$bookno=$_POST['bookno'];
$booktitle=$_POST['booktitle'];
$bookedition=$_POST['booked'];
$bookpub=$_POST['bookpub'];
$sql=mysqli_query($conn,"INSERT INTO BOOK_DETAILS VALUES('$bookno','$booktitle','$bookedition','$bookpub')");
$query=mysqli_query($conn,"select * from book_details");
}
?>
<html>
<head>
<title>Display book Details</title>
</head>
<body>
<table border="1px solid black">
<tr>
<th>Book number</th>
<th>Title</th>
<th>Edition</th>
<th>Publisher</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($query))
{
 echo"<tr>";
 echo"<td>".$row['Book_number']."</td>";
 echo"<td>".$row['Book_title']."</td>";
 echo"<td>".$row['Book_edition']."</td>";
 echo"<td>".$row['Book_publisher']."</td>";
 echo"</tr>";
}
?>
</tr>
</table>
</body>
</html>