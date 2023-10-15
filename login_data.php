<?php
    if(isset($_POST['submit'])){
        include("config.php");
        $username = $_POST['username'];
        $password = md5($_POST['pass']);

        $query = "SELECT * FROM users_data WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query) or die("Query Failed");
        $data = mysqli_fetch_assoc($result);

        
        if(mysqli_num_rows($result) === 1){
            session_start();
            session_unset();
            $_SESSION['id'] = $data['id'];
            header("Location: ./index.php");
        }else{
            
            header("Location: ./login.php");
        }
    }
?>