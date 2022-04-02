<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="css.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');
        body{
            font-family: 'Patua One', cursive;
            margin: 4rem 2rem 0rem 2rem; 
        }
        
        a{
            color: white;
            text-decoration: none;
        }
        input{
            border: none;
            background-color: #075c1436;
            padding: 1rem 1rem 1rem 1rem;
            border-radius: 7px;
            font-family: 'Patua One', cursive;
            font-size: 1.3rem;
            height: .7rem;
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
            padding:5rem 4rem 4rem 4rem;
            display: flex;
            flex-direction: row;
            gap: 10rem;
            align-items: center;
        }
        .info{
            font-size: 1.5rem;
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
<a href="login.php" class="float"><span>Log In</span>
    </a>
    <section class="main_sec">
        <div class="info">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <br>Sit eum expedita quae vel minima in. Dolores vero quos ex! Quia ipsam veritatis 
                <br>autem alias sunt, necessitatibus itaque quibusdam odit dolor.</h2>
        </div>
    </section>
    
    
</body>
</html>