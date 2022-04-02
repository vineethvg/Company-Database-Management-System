<?php
    $connection = mysqli_connect("localhost", "root", "nafaz123");
    $db = mysqli_select_db($connection, "sms");
    $query = "insert into company values('$_POST[name]','$_POST[website]',$_POST[phone],'$_POST[address]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[industry]')";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Company added successfully.");
    window.location.href = "dashboard.php";
</script>