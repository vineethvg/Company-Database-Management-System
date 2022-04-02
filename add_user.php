<?php 
    $connection = mysqli_connect("localhost", "root", "nafaz123");
    $db = mysqli_select_db($connection, "sms");
    $query = "insert into login values('$_POST[email]','$_POST[password]','$_POST[name]')";
    $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
        alert("Registered Successffully");
        window.location.href = "login.php";
</script>