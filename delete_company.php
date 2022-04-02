<script type="text/javascript">
    if (confirm("Are you sure want to delete ?")) {
        document.write("<?php
                        $connection = mysqli_connect("localhost", "root", "nafaz123");
                        $db = mysqli_select_db($connection, "sms");
                        $query = "delete from company where name = '$_POST[name]'";
                        $query_run = mysqli_query($connection, $query);
                        ?>");
        window.location.href = "dashboard.php"
    } else {
        window.location.href = "dashboard.php";
    }
</script>