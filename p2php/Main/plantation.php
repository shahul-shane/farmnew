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
    <title>Plant Data</title>
    <link rel="stylesheet" href="./plantation.css">
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
    <?php error_reporting(0); ?>
    <form action="../php/seeding.php" method="post">
        <div class="form">
            <div class="title">
                This Season <img src="../Assets/season.png" alt="" width="65px" height="65px"> plantation
            </div>
            <div class="first-page">
                <div class="user-detail"> 
                    <div class="input-field">
                        <div class="year">    
                            <label for="year">Year :</label>
                            <input type="date" name="year" id="year" placeholder="Year" value="<?php echo $_POST["year"]; ?>" required><br>
                        </div>
                    </div>
                    <div class="input-field">   
                        <div class="season">
                            <label for="season">Season :</label>
                            <select name="select" id="select" value="<?php echo $_POST["select"]; ?>">
                                    <option value="select" id="select_season">select season</option>
                                    <option value="kharif">kharif</option>
                                    <option value="rabi">rabi</option>
                                    <option value="zaid">zaid</option>
                            </select>
                        </div>
                        <div class="acres">
                            <label for="acres">Acres Used :</label>  
                            <input type="number" name="acres" id="acres" placeholder="Acres" value="<?php echo $_POST["acres"]; ?>" required><br>    
                        </div> 
                    </div>
                    <div class="input-field">
                        <div class="plant">
                            <label for="plant">Crop's :</label>  
                            <input type="text" name="plant" id="plant" placeholder="Crop's" value="<?php echo $_POST["plant"]; ?>" required><br>    
                        </div>  
                        <div class="crop">
                            <label for="crop">Seed Price :</label> 
                            <input type="number" name="crop" id="crop" placeholder="Seed Price" value="<?php echo $_POST["crop"]; ?>" maxlength="10" required>
                        </div>
                    </div>    
                    <div class="input-field">   
                        <div class="fertilizer">
                            <label for="fertilizer">Fertilizer :</label>
                            <input type="text" name="fertilizer" id="fertilizer" placeholder="Fertilizer" value="<?php echo $_POST["fertilizer"]; ?>" required><br>
                        </div>
                        <div class="fertlizer-price">
                            <label for="fertlizer-price">Fertlizer Price :</label>
                            <input type="number" name="fertlizer-price" id="fertlizer-price" placeholder="Fertlizer Price" value="<?php echo $_POST["fertlizer-price"]; ?>" required>
                        </div>
                    </div>    
                    <div class="input-field">
                        <div class="pest">    
                            <label for="pest">Pesticide :</label>
                            <input type="text" name="pest" id="pest" placeholder="Pesticide" value="<?php echo $_POST["pest"]; ?>" required><br>
                        </div>
                        <div class="pest-price">    
                            <label for="pest-price">Pest Price :</label>
                            <input type="number" name="pest-price" id="pest-price" placeholder="Pest Price" value="<?php echo $_POST["pest-price"]; ?>" required>
                        </div>
                    </div>

                            <input type="submit" value="Submit" class="button" value="plant">
                </div> 
            </div>
        </div>
    </form>
</body>
</html>