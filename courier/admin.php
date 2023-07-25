<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to admin login - Courier Management System</title>
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- external css-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="form_screen">
        <div class="form_section">
            <header>
                <h4>Courier Management System</h4>
            </header>
            <div class="form_controls">
                <div>
                    <h2>Admin Login</h2>
                    <p>Welcome to courier management, please put your login credintials below to start 
                    using this app.
                    </p>
                    <small id="error"><?=isset($_GET['error'])? 'Incorrect Username / Password' :'' ?></small>
                    <form  action="form_request/admin_login.php" name="loginform"  onsubmit="return validationForm()" method="POST">
                        <div class="input-group">
                            <label for="">Admin id</label>
                            <input type="text" name="username">
                        </div>
                        <div class="input-group">
                            <label for="">Password</label>
                            <input type="password" name="passwrd">
                        </div>

                        <div class="remember_me">
                            <label for="checkbox">
                                <input type="checkbox" name="" id="checkbox">
                                Remember me
                            </label>
                            <button class="btntheme" name="adminloginBtn">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        Don't have any account? <a href="adminregister.php">Sign up</a>
                    </div>
                </div>
            </div>

            <footer>
                <p>&copy; 2023 Made by <a href="#">Courier Management</a></p>
            </footer>
        </div>
        <div class="imageSection">
            <img src="assets/image/loginBg.webp" alt="">
        </div>
    </div>
</body>
</html>
<script>
    function validationForm(){
            // username length minimum 4 character
            if(document.loginform.username.value.length  < 1 && document.loginform.passwrd.value.length  < 1){
                document.getElementById("error").innerHTML = "Please enter your name or password!";
                return false;
            }
            else{

            if(document.loginform.username.value.length  < 4){
                document.getElementById("error").innerHTML = "Username must be 4 character!";
                return false;
            }
            // password length minimum 6 character
            if(document.loginform.passwrd.value.length  < 6){
                document.getElementById("error").innerHTML = "Password must be 6 character!";
                return false;
            }
            return true;
        }
    }
</script>
