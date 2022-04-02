<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Dashboard</title>
    <?php
        session_start();
        $name = "";
        $connection = mysqli_connect("localhost", "root", "nafaz123");
        $db = mysqli_select_db($connection, "sms");
    ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');
        body{
            font-family: 'Patua One', cursive;
            margin: 4rem 2rem 4rem 6rem ;
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
        select{
            border: none;
            background-color: #075c1436;
            padding: 1rem 1rem 1rem 1rem;
            border-radius: 7px;
            font-family: 'Patua One', cursive;
            font-size: 1rem;
            height: 4rem;
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
        #acc_img{
            height: 25px;
            width: 25px;
        }
        .main_sec{
            margin-top: 10rem;
            display: flex;
            flex-direction: row;
            gap: 200px;
            display:flex;
            justify-content: center;
        }
    
        .func{
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size:1.5rem;   
        }
        .func form{
            display: grid;
            grid-template-columns: repeat(2, 4fr);
            grid-template-rows: 1fr;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }
        #divider{
            width: 1px;
            background-color: #075c14; 
        }
        .add_cont{
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: center;
        }
        .form_cont form{
            display: flex;
            flex-direction: column;
            width: 500px;
            gap: .3rem;
        }
        .edit_comp{
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        .float2{
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
    
    <div style=" display:flex;flex-direction:row;gap:1rem;text-align: left;">
    <span><img id="acc_img" src="acc.png" alt=""></span>
    <span> <?php echo $_SESSION['name'];?></span>
    <span><?php echo $_SESSION['email'];?></span> 
    </div>
   
    <a href="login.php" class="float2"><span>Log Out</span></a>

    <section class="main_sec">

        <!-- FUNCTIONALITIES-->
        <div class="func">
            <h3>Functionalities</h3>
            <form action="" method="post">
                <button><a style="padding: 1rem;" href="company.php">Show</a></button>
                <button type="submit" name="add_company" value="Add Company">Add</button>
                <button type="submit" name="edit_company" value="Edit Company">Edit</button>
                <button type="submit" name="delete_company" value="Delete Company">Delete</button>
            </form>
        </div>

        

        <!-- ADD COMPANY FUNCTION-->
        <?php
        if (isset($_POST['add_company'])) {
        ?>
        <div id="divider"></div>
        <div class="add_cont">
            <h2>Fill the details</h2>
            <div class="form_cont">
                <form action="add_company.php" method="post">
                    Name:       
                    <input type="text" name="name" required>
                    Website:
                    <input type="url" name="website" required>
                    Phone No:
                    <input type="number" name="phone" required>
                    Address:
                    <input type="text" name="address" required>
                    City:
                    <input type="text" name="city" required>
                    State:
                    <input type="text" name="state" required>
                    Country:
                    <input type="text" name="country" required>
                    Industry:
                    <select name="industry" id="" value="selected">
                        <option value="">Select an Industry</option>
                        <option value="Account">Account</option>
                        <option value="IT">IT</option>
                        <option value="Sales">Sales</option>
                        <option value="Health-Care">Health-Care</option>
                    </select>
                    <button type="submit" name="add" value="Add Company">Add</button>
                </form>         
            </div>
        </div>
        <?php
        }
        ?>  

        <!-- EDIT COMPANY FUNCTION-->
        
        <?php
			if(isset($_POST['edit_company']))
			{
				?>
                <div id="divider"></div>
                <div class="add_cont">
				<center>
				<form action="" class="edit_comp" method="post">
				<h2>Enter the Company Name</h2>
                <input type="text" name="name">
				<button type="submit" name="search_by_name" value="Search">Search</button>
				</form>
				
				</center>
				<?php
			}
			if(isset($_POST['search_by_name']))
			{
				$query = "select * from company where name = '$_POST[name]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
                    <div id="divider"></div>
                    <div class="form_cont">
                    
                    <h2>Company details</h2>
					<form action="company_edit.php" method="post">
								<b>Name</b>
								<input type="text" name="name" value="<?php echo $row['name']?>" disabled>
								<b>Website</b>
								<input type="url" name="website" value="<?php echo $row['website']?>">
								<b>Phone</b>
								<input type="text" name="phone" value="<?php echo $row['phone']?>">
								<b>Address</b>
								<input type="text" name="address" value="<?php echo $row['address']?>">
								<b>City</b>
								<input type="text" name="city" value="<?php echo $row['city']?>">
								<b>State</b>
								<input type="text" name="state" value="<?php echo $row['state']?>">
								<b>Country</b>
								<input type="text" name="country" value="<?php echo $row['country']?>">
								<b>Industry</b>
                                <select name="industry" id="" value="selected">
                                    <option value="">Select an Industry</option>
                                
                                    <option value="Account" 
                                    <?php if($row['industry'] == "Account"){
                                    echo "selected";} ?>>
                                    Account</option>

                                    <option value="IT"
                                    <?php if($row['industry'] == "IT"){
                                    echo "selected";} ?>>
                                    IT</option>    

                                    <option value="Sales"
                                    <?php if($row['industry'] == "Sales"){
                                    echo "selected";} ?>>
                                    Sales</option>

                                    <option value="Health-Care"
                                    <?php if($row['industry'] == "Health-Care"){
                                    echo "selected";} ?>>
                                    Health-Care</option>
                                </select>
								<button type="submit" name="edit" value="Save">Save</button>
					</form>
                    </div>
					<?php
				}
			}
		?>
        </div>

        <!-- DELETE COMPANY FUNCTION-->
        <?php
        if (isset($_POST['delete_company'])) {
        ?>
        <div id="divider"></div>
        <div class="add_cont">
            <center>
                <form class="edit_comp" action="delete_company.php" method="post">
                    <h2>Enter the Company Name</h2>
                    <input type="text" name="name">
                    <button type="submit" name="search_by_company_todelete" value="Delete">Delete</button>
                </form><br><br>
            </center>
        <?php
        }
        ?>
        </div>
    </section>
    
</body>
</html>