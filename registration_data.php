
<?php 

    if(isset($_POST['submit'])){
        include("config.php");

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($firstName == "" || $lastName == "" || $email == "" || $username == "" || $password == "" || strlen($password) <= 6){
            echo "Please fill the required fields";
        }else{

            $password = md5($_POST['password']);
            $checkQuery = "SELECT * FROM users_data WHERE username = '{$username}' AND password = '{$password}'; ";
            $checkQueryResult = mysqli_query($conn, $checkQuery);

            if(mysqli_num_rows($checkQueryResult) === 1){
                echo "The username is already registered. Please login.";
            }else{

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
                        ob_start();
                        header("Location: index.php");
                        ob_end_clean();
                        exit();
                    }else{
                        ob_start();
                        header("Location: login.php");
                        ob_end_clean();
                        exit();
                    }
                }else{
                    echo "Something went wrong";
                }
            }
        }

    }


?>