<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload=" dash()">

</body>
<?php

$email = $_SESSION['email'];

$selectquery = "select * from studentdata where email = '$email'";

$query = mysqli_query($con,$selectquery);

$result = mysqli_fetch_assoc($query);

$newpayment = 'b';

$sql = "UPDATE studentdata SET payment = '$newpayment' WHERE email = '$email'";
if($con->query($sql) == TRUE){
	header("location:dashboard.php");
}
else{
	echo "not";
}
?>
<script>
	function dash()
	{
		// alert('Your paymet is Sucessfull.  We will contact you within 1 hr.');
		// location.replace('dashboard.php');
	}
</script>
</html>