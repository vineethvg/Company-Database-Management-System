<?php
$conn = mysqli_connect("localhost","root","nafaz123");
$db = mysqli_select_db($conn,"sms");
$query = "SELECT * FROM company";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies Database</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https:////cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');
        body{
            font-family: 'Patua One', cursive;
            margin: 4rem 2rem 4rem 2rem;
        }
        a{
            text-decoration: none;
        }
        input{
            border: none;
            background-color: #075c1436;
            padding: 1rem 2rem 1rem 1rem;
            border-radius: 7px;
            font-family: 'Patua One', cursive;
            font-size: 1rem;
        }
        .float{
            display: flex;
            align-items:center;
            justify-content:center;
            position:fixed;
            width:100px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#075c14;
            color:#FFF;
            border-radius:7px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
            }
        .float2{
            display: flex;
            align-items:center;
            justify-content:center;
            position:fixed;
            width:100px;
            height:60px;
            bottom:40px;
            right:180px;
            background-color:#075c14;
            color:#FFF;
            border-radius:7px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }
        table{
            background-color:#075c14;
            border: none;
        }
        #company_data_filter{
            padding-bottom: 1rem;
        }

    </style>
</head>

<body>
    <div>
        <h2 align="center">Companies Database</h2>
    </div>
    <div>
        <table id="company_data">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Website</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Country</td>
                    <td>Industry</td>
                </tr>

            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '
                <tr>
                    <td>' . $row["name"] . '</td>
                    <td>' . $row["website"] . '</td>
                    <td>' . $row["phone"] . '</td>
                    <td>' . $row["address"] . '</td>
                    <td>' . $row["city"] . '</td>
                    <td>' . $row["state"] . '</td>
                    <td>' . $row["country"] . '</td>
                    <td>' . $row["industry"] . '</td>
                </tr>
                    ';
            }
            ?>
        </table>
    </div>
    <a href="logout.php" class="float">Logout</a>
    <a href="dashboard.php" class="float2">Dashboard</a>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#company_data').DataTable();
    });
</script>