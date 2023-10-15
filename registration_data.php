
<?php 

    if(isset($_POST['submit'])){
        include("config.php");

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = "  INSERT INTO 
                        users_data(firstName, lastName, email, username, password) 
                    VALUES
                        ('$firstName', '$lastName', '$email', '$username', '$password')";

        
        if(mysqli_query($conn, $query)){
            $query2 = "SELECT * FROM users_data WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $query2) or die("Query Failed");
            $data = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) > 0){
                session_start();
                session_unset();
                $_SESSION['id'] = $data['id'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php");
                exit();
            }
        }else{
            echo "Something went wrong";
        }
    }

?>