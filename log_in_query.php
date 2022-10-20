<?php 
include 'backend/database.php';
$user_name = $_POST['name'];
$password = $_POST['email'];

$query = $conn2->query("Select * from crud where name = '$user_name' and email ='$password' ");
$count = $query->rowcount();
$row = $query->fetch();

if ($count > 0){
session_start();
$_SESSION['id'] = $row['id'];
header('location:home.php');
}	else {
?>
<script>
	alert("Incorrect Details. Check your User Name or Password.")
	window.location="index.php";
</script>
<?php 
}
?>