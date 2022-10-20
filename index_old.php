<?php include ('connection.php'); ?>

<!DOCTYPE html>

<html>

<head>
<title>clovis</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

<h2>
	Log In Page In PHP/MySQL <br /> Using PDO Query
</h2>

<form method="post" action="log_in_query.php">

<table border="0" cellpadding="10" cellspacing="1" class="tblLogin">
<tr class="tableheader">
<td align="center" colspan="2">Login Page</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" autofocus="autofocus" class="textbox_detail" name="name" required></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" autofocus="autofocus" class="textbox_detail" name="email" required></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" class="btn_submit" name="submit" value="Login"></td>
</tr>
</table>

</form>

</body>

</html>