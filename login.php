<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    
    <section id = "form-section">
        <div class = "illustration-img">
            <img src="./assets/images/Login-rafiki.png" alt="Image Not found">
        </div>
        <div class = "form-data">
            <div class = "login-avatar">
                <i class="uil uil-user-circle"></i>
            </div>
            <div class ="login-title">
                WELCOME
            </div>
            <div class = "login-form">
                <form action="login_data.php" method="POST">
                    <div>
                        <i class="uil uil-user"></i>
                        <input type="text" name = "username" placeholder="Enter Your Username">
                    </div>
                    <div>
                        <!-- <label for="">Username</label> -->
                        <i class="uil uil-lock"></i>
                        <input type="password" name = "pass" placeholder="Enter Your Password">
                    </div>
                    <div>
                        <input type="submit" value="Login" name = "submit">
                    </div>
                </form>

            </div>
            <div>
                New User? 
                <a href="./registration.php">
                    Sign Up
                </a>
            </div>
        </div>
    </section>
    
</body>
</html>