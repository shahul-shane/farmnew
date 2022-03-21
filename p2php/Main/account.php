<?php 

    session_start();
    if(!isset($_SESSION["user_id"])){
        header("Location: ../index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Data</title>
    <link rel="stylesheet" href="./account.css">
    <link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <a href="../index.php" class="green" id="green"><img src="../Assets/green-tea.png" alt="tea-png" class="logo" width="40px" height="40px">Green Plants</a>
            <ul> 
                <li><a href="./main.php" id="underline">Home</a></li>
                <li><a href="./plantation.php" id="underline">Seeding</a></li>
                <li><a href="./seasonal.php" id="underline">Seasonal</a></li>
                <li><a href="./account.php" id="underline">Profile</a></li>
                <li><button class="Register" onclick="window.location.href = '../php/logout.php'">Log out</button></li>
            </ul>
        </div>
    </div>
    <div class="title">
        your profile <img src="../Assets/florist.png" alt="" width="80px" height="80px" style="margin-top: 1%;">
    </div>
    <div class="boxes">
        <div class="detail-box">
            <div class="user-detail">
                <div class="name">            
                    <p>Name : </p><span>shahul </span>
                </div>    
                <div class="gender">
                    <p>Gender : </p><span>male</span>
                </div>
                <div class="age">
                    <p>age : </p><span>21</span>
                </div>
                <div class="phone">
                    <p>phone : </p><span>9740080672</span>
                </div>
                <div class="street">
                    <p>street's : </p><span>rashid street</span>
                </div>
                <div class="city">
                    <p>city : </p><span>Bang</span>
                </div>
                <div class="pincode">
                    <p>pincode : </p><span>546042</span>
                </div>
                <div class="state">
                    <p>state : </p><span>karnataka</span>
                </div>
                <div class="country">
                    <p>country : </p><span>india</span>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>