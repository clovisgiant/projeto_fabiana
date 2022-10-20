<?php include ('connection.php'); ?>

<!DOCTYPE html>

<html>

<head>
<title>How To Create User Login Page In PHP/MySQL Using PDO Query</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

<?php
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}
$session_id = $_SESSION['id'];
$session_query = $conn->query("select * from crud where id = '$session_id'");
$user_row = $session_query->fetch();
?>

<table border="0" cellpadding="10" cellspacing="1" width="100%" class="tblLogin">
<tr class="tableheader">
<td align="center">Home</td>
</tr>
<tr class="tablerow">
<td align="center">
<p class="blink_text">Welcome User!!!</p>
<?php echo $user_row['name']." ".$user_row['email']; ?>
</td>
</tr>

<tr class="tableheader">
<td align="center">
Click here to <a href="log_out_query.php"> Logout </a>
</td>
</tr>
</table>

</body>

</html>