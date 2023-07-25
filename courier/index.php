<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Courier Management System</title>
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- external css-->
    <!-- font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="index">
    <!-- header-->
    <header class="header">
        <a href="index.php" class="logo logo-md">Courier Management System</a>
        <button class="btntheme" onclick="menuHideShow()"><i class="fa-solid fa-bars"></i></button>
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php" class="logo logo-lg">Courier Management System</a>
                </li>
                <!-- <li>
                    <a href="send-parcel.php">Send a Parcel</a>
                </li> -->
                
                <!-- <li>
                    <a href="track-parcel.php">Track my Parcel</a>
                </li> -->
                
                <li>
                    <a href="#">Countact us</a>
                </li>

                <li class="divider">
                    <a href="user-myaccount.php">My account <i class="fa-solid fa-circle-user"></i> </a>
                </li>
                
                <li>
                    <a href="home.php">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i> </a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- header end-->
    <div class="container">
        <div class="title">My Dashboard</div>
        <!-- overview cards-->
    <section class="overview">
        <a href="myparcels.php" class="card">
            <div class="icon">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
            <small>My Parcels</small>
        </a>
        
        <a href="myagents.php" class="card">
            <div class="icon">
                <i class="fa-solid fa-user-secret"></i>
            </div>
            <small>My Agent</small>
        </a>
<!--         
        <a href="sentparcel.php" class="card">
            <div class="icon">
                <i class="fa-solid fa-box"></i>
            </div>
            <small>Parcels Sent</small>
        </a> -->
        
        <a href="mystatus.php" class="card">
            <div class="icon">
                <i class="fa-solid fa-chart-column"></i>
            </div>
            <small>My Status</small>
        </a>
        
    </section>
    <!-- overview ends-->
    </div>
    
</body>
</html>
<script>
    var menuhide=true;
    function menuHideShow(){
        if(menuhide==true){ 
            document.querySelector("#menu").style.display='block';
            menuhide=false;
        }else{
            document.querySelector("#menu").style.display='block';
            menuhide=true;
        }
    }
</script>