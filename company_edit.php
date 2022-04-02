
<?php
$connection = mysqli_connect("localhost", "root", "nafaz123");
$db = mysqli_select_db($connection, "sms");
$query = "update company set website='$_POST[website]',
	phone=$_POST[phone],address='$_POST[address]',city='$_POST[city]',
	state='$_POST[state]',country='$_POST[country]',industry='$_POST[industry]' 
	where name = '$_POST[name]'";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "dashboard.php";
 </script>