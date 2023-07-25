<?php
include_once '../config.php';

if(isset($_POST['registerBtn'])){
    extract($_POST);
// using md5 for password hash
$password=md5($passwrd);

    $insert="insert into user_account(username,email,passwrd,role) values('$username','$email','$password','user')";
    try{
        if(mysqli_query($con,$insert)){
            //if account registered successfully then
            $_SESSION['login_name']=$username;
            $_SESSION['user_role']='user';
            echo "<script> location.href= '../index.php' </script>";
        }
    } catch (\Throwable $th) {

        if(mysqli_errno($con)==1062){
        $err=explode(' ',mysqli_error($con));
        echo trim($err[5],"'");
        echo "<script> location.href='../register.php?error={$error}'</script>";
        }
        else{
            print_r(mysqli_error($con));
        }
    }    
}
?>