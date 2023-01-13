<?php
include("connect.php);
?>
<html>
<head>
<title>Book Details</title>
</head>
<body>
<center>
<h2>Book Details</h2>
<form action="Display.php" method="post">
Book number:<input type:"text" name="booknumber"><br><br>
Book Title:<input type:"text" name="book title"><br><br>
Book Edition:<input type:"number" name="bookedition"><br><br>
Book Publisher:<input type:"text" name="bookpub" value=" "><br><br>
<input type:"submit" name="submit" value="Submit"><br><br>
</form>
</center>
</body>
</html>