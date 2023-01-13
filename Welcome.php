<?php
session_start();
$user=$_SESSION['login_user'];
?>
<html>
<body>
<h1 align="center">WELCOME</h1>
<h2 align="center"><?php echo $user."!!!";?>
</h2>
</body>
</html>