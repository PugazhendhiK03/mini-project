<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to registration - Courier management System</title>
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
                    <h2>Add Staffs</h2>
                    </p>
                    <small id="error"><?=isset($_GET['error']) ? $_GET['error']."Already exist": ' ' ?></small>
                    <form action="form_request/add_staff.php" name="registerForm" onsubmit="return validationForm()" method="POST">
                        <div class="input-group">
                            <label for="">Reciver Name</label>
                             <input type="text" name="username">
                        </div>
                        <div class="input-group">
                            <label for="">Parcel Id</label>
                            <input type="text" name="username">
                        </div>
                        <div class="input-group">
                            <label for="">Sender Name</label>
                            <input type="text" name="username">
                        </div>
                        <div class="input-group">
                            <label for="">Parcel Details</label>
                            <input type="text" name="username">
                        </div>
                        <br>
                        <div class="remember_me text-end">
                            <button class="btntheme" name="sendparcelBtn">Send Parcel</button>
                        </div>
                    </form>
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
            if(document.registerForm.username.value.length  < 1 && document.registerForm.email.value.length  < 1
            && document.registerForm.passwrd.value.length  < 1){
                document.getElementById("error").innerHTML = "Please enter your fields!";
                return false;
            }
            else{

            if(document.registerForm.username.value.length  < 4){
                document.getElementById("error").innerHTML = "Username must be 4 character!";
                return false;
            }
            
            // email length minimum 10 character
            if(document.registerForm.email.value.length  < 10){
                document.getElementById("error").innerHTML = "Invalid email!";
                return false;
            }
            // password length minimum 6 character
            if(document.registerForm.passwrd.value.length  < 6){
                document.getElementById("error").innerHTML = "Password must be 6 character!";
                return false;
            }
            return true;
        }
    }
</script>