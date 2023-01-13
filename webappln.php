<html>
<head>
<title>WEB APPLICATION</title>
</head>
<body>
<form name="forms" method="post" acion="<?php
echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="name"><br><br>
Email id:<input type="email" name="mail"><br><br>
Address:<textarea name="address"></textarea><br><br>
Gender:<input type="radio" id="male" name="gender" value="male">MALE<br><br>
<input type="radio" id="female" name="gender" value="female">FEMALE<br><br>
Date Of Birth:<input type="date" name="dob"><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $name=$_REQUEST['name'];
 $mail=$_REQUEST['mail'];
 $address=$_REQUEST['address'];
 $gender=$_REQUEST['gender'];
 $dob=$_REQUEST['dob'];
 echo "Name:".$name."<br>";
 echo "Email id:".$email."<br>";
 echo "Address:".$address."<br>";
 echo "Gender:".$gender."<br>";
 echo "Date Of Birth:".$dob."<br>";
}?>
