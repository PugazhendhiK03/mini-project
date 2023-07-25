<?php
include_once '../config.php';

if(isset($_POST['adminloginBtn'])){
    extract($_POST);
    // using md5 for password hash
$password=md5($passwrd);

    //if you want user login only username and password the this query
    // $select="select * from user_account where username='$username' and passwrd='$password'";

    //if you want user login only email and password the this query
    // $select="select * from user_account where email='$username' and passwrd='$password'";

    //if you want user login only username and password the this query
    $select="select * from admin_account where (email='$username' or username='$username' )and passwrd='$password'";
    
    $res=mysqli_query($con,$select);
    // now check the query return any recored
    if(mysqli_num_rows($res)>0){
        // if yes
        $data=mysqli_fetch_assoc($res);
        $_SESSION['login_name']=$data['username'];
        $_SESSION['admin_role']=$data['role'];
        echo "<script> location.href='../admin-index.php'</script>";
    }
    else{
        //if no
        $error="incorrect";
        echo "<script> location.href='../adminregister.php?error={$error}'</script>";
    }
}


?>