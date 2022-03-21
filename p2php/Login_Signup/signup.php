<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
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
                <form action="../php/reg.php" class="sign-in-form" method="POST">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                            <img src="../Assets/user.png" alt="" width="28px" height="28px" >
                            <input type="text" name="username" placeholder="Username" value="<?php echo $_POST["username"]; ?>" required/> 
                        </div> 
                        <div class="input-field">
                            <img src="../Assets/email.png" alt="" width="28px" height="28px" >
                            <input type="text" name="email" placeholder="Email" value="<?php echo $_POST['email']; ?>" required/> 
                        </div> 
                        <div class="input-field">
                            <img src="../Assets/key.png" alt="" width="28px" height="28px">
                            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required/> 
                        </div>
                        <div class="input-field">
                            <img src="../Assets/approved.png" alt="" width="35px" height="35px">
                            <input type="password" name="confirm_pass" placeholder="Confirm Password" value="<?php echo $_POST['confirm_pass']; ?>" required/> 
                        </div>
                        <input type="submit" class="btn solid" value="Sign up" name="btn-save" />
                    <p class="paragh">Already have account? <button onclick="window.location.href = './signup.html'" id="signup" class="signup">Login</button></p>        
                </form>
            </div>
        </div>
    </div>  
    <div class="back-image">
        <img src="../Assets/plant1.png" alt="plant" height="400px" width="400px">
    </div> 
</body>
</html>