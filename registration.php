<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background-color: rgb(0, 255, 174);
        }

        #form-section{
            background-color: rgb(46, 219, 104, 0.5);
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 80vh;
            margin: 10vh 10vw;
            border-radius: 25px;
        }

        
        #form-section .form-data{
            /* background-color:blueviolet; */
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-avatar i{
            font-size: 100px;
            width: 100px;
            height: 100px;
        }

        #form-section .form-data .login-form form{
            width: 100%;
        }
        #form-section .form-data .login-title{
            font-size: 40px;
            font-weight: 600;
            text-align: center;
        }

        #form-section .form-data div{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        #form-section .form-data .login-form label{
            /* position: relative; */
            width: 200px;
            height: 40px;
        }


        #form-section .form-data .login-form input{
            /* position: relative; */
            width: 100%;
            height: 40px;
            background-color: transparent;
            outline: none;
            border: none;
            margin: 5px 5px;
            border-bottom: 1px solid black;
        }


        #form-section .form-data .login-form input[type="submit"]{
            background-color: rgb(0, 255, 174);;
            border-radius: 50px;
            border: none;
            outline: none;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.getElementById("fname").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (name === "") {
                alert("Name must be filled out");
                return false;
            }

            if (email === "") {
                alert("Email must be filled out");
                return false;
            } else if (!isValidEmail(email)) {
                alert("Invalid email address");
                return false;
            }

            if (password === "") {
                alert("Password must be filled out");
                return false;
            }

            return true;
        }

        function isValidEmail(email) {
            var emailRegex = /\S+@\S+\.\S+/;
            return emailRegex.test(email);
        }
    </script>
</head>
<body>

    <section id = "form-section">

        <div class="form-data">
            <div class ="login-title">
                WELCOME
            </div>
            <div class="login-form">
                <form action="./registration_data.php" name = "registrationForm" method = "POST" onsubmit="validateForm()">
                    <div>
                        <label for="fname">First Name:</label>
                        <input type="text" name = "firstName" id = "fname" placeholder="Enter your username">
                    </div>
                    <div>
                        <label for="lname">Last Name:</label>
                        <input type="text" name = "lastName" id = "lname" placeholder="Enter your username">
                    </div>
                    <div>
                        <label for="email">email:</label>
                        <input type="text" name = "email" id = "email" placeholder="Enter your username">
                    </div>
                    <div>
                        <label for="user">User Name:</label>
                        <input type="text" name = "username" id = "user" placeholder="Enter your username">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" name = "password" id = "password" placeholder="Enter your password">
                    </div>
                    <div>
                        <input type="submit" value="Submit" name = "submit">
                    </div>
                </form>
            </div>
            <div>
                Already Registered? 
                <a href="./login.php">
                    Sign In
                </a>
            </div>
        </div>
    </section>

</body>
</html>
