<html>
<body>
<form method="get">
Enter the number:
<input type="number" name="number">
<input type="submit" value="submit">
</form>
<?php
if($_GET)
{
	$number=$_Get['number'];
	if((num%2)==0)
	{
		echo"$number is an even number";
	}
	else
	{
		echo"$number is an odd number";
	}
}
?>
</body>
</html>