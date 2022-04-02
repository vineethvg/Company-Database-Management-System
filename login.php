<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        session_start();
        $connection = mysqli_connect("localhost", "root", "nafaz123");
        $db = mysqli_select_db($connection, "sms");
    ?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');
        body{
            font-family: 'Patua One', cursive;
            margin: 4rem 2rem 4rem 2rem;
        }
        
        a{
            color: white;
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
        button{
            border: none;
            background-color: #075c14;
            color: white;
            border-radius: 7px;
            padding: 1rem 2rem 1rem 2rem;
            margin-top: 1.5rem;
            font-family: 'Patua One', cursive;
            font-size: 1rem;
        }
        .main_sec{
            margin-top: 10rem;
            display: flex;
            flex-direction: row;
            gap: 200px;
            display:flex;
            justify-content: center;
            height: 70vh;
        }
        .section2{
            margin: 40vh 0 20vh 0;
        }
        .login_sec{
            display: block;
            font-size: 1.5rem;
            padding: 2rem 4rem 0rem 2rem;
        }
        .login_sec span{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        #divider{
            width: 1px;
            background-color: #075c14; 
        }
        .new_user{
            display: block;
            font-size: 1.5rem;
            padding: 2rem 4rem 0rem 2rem;
        }

        .new_user_det{
            padding-top: 4rem;   
            display: flex;
            flex-direction: column;
            align-items:center;
            font-size: 1.5rem;
        }
        .new_user_det form{
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width:400px;
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

    </style>
</head>

<body>
    <a href="home.php" class="float"><span>Home</span>
    </a>

    <section class="main_sec">
        <div class="login_sec">
            <h2>Recruiter Login</h2>
            <form action="" method="post">
                <span>
                    Email Id:
                    <input type="email" name="email" required>
                    Passoword: 
                    <input type="password" name="password" required>
                </span>
                <button type="submit" name="submit" value="LogIn">Log In</button>
            </form><br>
        </div>


        <div id="divider"></div>
        
        <div class="new_user">
            <h2>Not An User Yet?</h2>
            <form action="" method="post">
                
                <button type="submit" name="add_user" value="Add User">Sign-up</button>
            </form>
        </div>
    </section>
   

    <?php
    if (isset($_POST['submit'])) {
        $query = "select * from login where email = '$_POST[email]'";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            if ($row['email'] == $_POST['email']) {
                if ($row['password'] == $_POST['password']) {
                    $_SESSION['name'] =  $row['name'];
                    $_SESSION['email'] =  $row['email'];
                    header("Location: dashboard.php");
                } else {
    ?>
                    <script>alert("Wrong Id or Password !!");</script>
    <?php
                }
            }
        }
    }
    ?>
    
    <section class="section2" id="sec">
    <?php
        if (isset($_POST['add_user'])) {
            ?>
            <div class="new_user_det">
                <h3>Please Provide The Following Details</h3>
                <form action="add_user.php" method="post">
                    Email:
                    <input type="email" name="email" required>
                    Password:
                    <input type="password" name="password" required>
                    Name:
                    <input type="text" name="name" required>
                    <button type="submit" name="add" value="Add User">Register</button>
                </form>
            </div>        
    <?php
        }
    ?>
    </section>
    
    

</body>

</html>