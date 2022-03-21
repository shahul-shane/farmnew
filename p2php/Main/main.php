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
    <title>Welcome </title>
    <link rel="stylesheet" href="./main.css">
    <link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <a href="../index.html" class="green" id="green"><img src="../Assets/green-tea.png" alt="tea-png" class="logo" width="40px" height="40px">Green Plants</a>
            <ul> 
                <li><a href="./main.php" id="underline">Home</a></li>
                <li><a href="./plantation.php" id="underline">Seeding</a></li>
                <li><a href="./seasonal.php" id="underline">Seasonal</a></li>
                <li><a href="./account.php" id="underline">Profile</a></li>
                <li><button class="Register" onclick="window.location.href = '../php/logout.php'">Log out</button></li>
            </ul>
        </div>
    </div>
    <div class="boxes">    
        <div class="new-user-box">
            <div class="new-user">
                <a href="./register.php" id="underline"><img src="../Assets/grow_seed.png" alt="" width="100px" height="100px"><br> New Farmer</a>
            </div>
        </div>
        <div class="existing-user-box">
            <div class="existing-user">
                <a href="./plantation.php" id="underline"><img src="../Assets/farmer.png" alt="" width="100px" height="100px"><br> Existing Farmer</a>
            </div>
        </div>
    </div>
    <div>
        <img src="../Assets/seeds.png" alt="" width="200px" height="200px" style="margin: -15% 0 0 45%;">
    </div>
</body>
</html>