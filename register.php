<?php
require 'config/config.php';
require 'handlers/login_handler.php';
require 'handlers/register_handler.php';

?>


<!DOCTYPE html>
<head>
    <title>Register Youself!</title>
    <link rel="stylesheet" type="text/css"  href="assets/css/register.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

    <?php
        if(isset($_POST['register_button'])){
            if($error_array){
                foreach($error_array as $error){
                    echo $error;
                }
            } 
        }
    ?>
    <div class="wrapper">
        <div class="login-header">
            <h2>On-Trade</h2>
            Trade Online from Anywhere
        </div>
        <div id="login-box">
            <form method="POST" action="register.php">
                <input type="text" name="login_email" required placeholder="Email">
                <br>
                <input type="password" name="login_password" required placeholder="Password">
                <br>
                <button type="submit" name="login_button">Login</button>
                <br>
                <a href="#" id="gotoSignup">New Here. SignUp For FREE!</a>
            </form>
        </div>
        <div id="register-box">
            <form method="POST" action="register.php">
                <input type="text" name="register_username" required placeholder="Username" value="<?php if(isset($_SESSION['register_username'])){
                   echo $_SESSION['register_username']; } ?>">
                <br>
                <input type="text" name="register_firstname" required placeholder="Firstname" value="<?php if(isset($_SESSION['register_firstname'])){
                   echo $_SESSION['register_firstname']; } ?>">
                <br>
                <input type="text" name="register_lastname" required placeholder="Lastname" value="<?php if(isset($_SESSION['register_lastname'])){
                   echo $_SESSION['register_lastname']; } ?>">
                <br>
                <input type="text" name="register_email" required placeholder="Email" value="<?php if(isset($_SESSION['register_email'])){
                   echo $_SESSION['register_email']; } ?>">
                <br>
                <input type="password" name="register_password_1" required placeholder="Password">
                <br>
                <input type="password" name="register_password_2" required placeholder="Confirm Password">
                <br>
                <button type="Submit" name="register_button">Register</button>
                <br>
                <a href="#" id="gotoLogin">Already a Member? Login.</a>
            </form>
        </div>
    </div>
    
</body>
</html>