<?php 
    include("header.php");

?>
    <section id = "form-section">
        <div class="login-form">
            <form action="./update_registration_data.php" method = "POST" enctype="multipart/form-data">
                <div>
                    <label for="preview">Profile Preview: </label>
                    <?php 
                        if($userInfo['profile_pic']){
                        ?>
                            <img src="./assets/images/<?php echo $userInfo['profile_pic'] ?>" alt="Profile pic" width="100px" height="100px">
                        <?php
                        }else{
                            echo "Please Select Profile pic";
                        }
                    ?>
                </div>
                <div>
                    <label for="fname">First Name:</label>
                    <input type="text" name = "firstName" id = "fname" value="<?php echo $userInfo['firstName'] ? $userInfo['firstName'] : "" ; ?>" placeholder="Enter your username">
                </div>
                <div>
                    <label for="lname">Last Name:</label>
                    <input type="text" name = "lastName" id = "lname" value="<?php echo $userInfo['lastName'] ? $userInfo['lastName'] : "" ; ?>" placeholder="Enter your username">
                </div>
                <div>
                    <label for="email">email:</label>
                    <input type="text" name = "email" id = "email" value="<?php echo $userInfo['email'] ? $userInfo['email'] : "" ; ?>" placeholder="Enter your username">
                </div>
                <div>
                    <label for="profile">Profile:</label>
                    <input type='file' name = 'profile' id = 'profile'>
                </div>
                <div>
                    <label for="user">User Name:</label>
                    <input type="text" name = "username" id = "user" value="<?php echo $userInfo['username'] ? $userInfo['username'] : "" ; ?>" placeholder="Enter your username">
                </div>
                <div class = "form-btn">
                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
        </div>
    </section>

    <!-- ======== jquery link ========= -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <?php
        include("footer.php");
    ?>