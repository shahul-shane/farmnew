<?php 
    include '../php/connect.php';
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <a href="../index.html" class="green" id="green"><img src="../Assets/green-tea.png" alt="tea-png" class="logo" width="40px" height="40px">Green Plants</a>
            <ul> 
                <li><a href="../index.php" id="underline">Home</a></li>
                <li><a href="../Main/tips.php" id="underline">Tips</a></li>
                <li><a href="./login.php" id="underline">Login</a></li>
                <li><button onclick="window.location.href = './signup.php'" class="Register">Register</button></li>
            </ul>
        </div>
    </div>
    
    <?php error_reporting(0); ?>
    <div class="wrapper">    
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../php/login.php" class="sign-in-form" method="post">
                    <h2 class="title">Sign in</h2> 
                        <div class="input-field">
                            <img src="../Assets/user.png" alt="" width="28px" height="28px" >
                            <input type="text" placeholder="Username" name="username" value="<?php echo $_POST['username']; ?>" required/> 
                        </div>  
                        <div class="input-field">
                            <img src="../Assets/key.png" alt="" width="28px" height="28px">
                            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required/> 
                        </div>
                        <input type="submit" class="btn solid" value="Login" name="log-btn" />
                    <p class="paragh">Don't have account? <button onclick="window.location.href = './signup.html'" id="signup" class="signup">Sign Up</button></p>        
                </form>
            </div>
        </div>
    </div>  
    <div class="back-image">
        <img src="../Assets/plant.png" alt="plant" height="400px" width="400px">
    </div>  
</body>
</html>