<?php
session_start();

// Memeriksa apakah pengguna telah login atau belum
if (!isset($_SESSION['email'])) {
    echo '<script>alert("Anda belum login"); window.location.href="signup.php";</script>';
    exit();
}

// Mengambil data pengguna dari sesi
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
</head>

<body class="templatemo-container">
    <!-- header -->
    <div class="header-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 site-name-container">
                        <a href="index.html">
                            <img src="img/logo.png" alt="Site logo" class="site-logo">
                            <h1 class="site-name">BETTER HELP</h1>
                        </a>
                </div>
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                </div>
            </div>
        </div>
    </div>
    <div class="header-dashboard"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Dashboard</h2>
                            <img src="img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <!-- <p class="welcome-description"><h3>Masalah kesehatan mental meningkat <u>dua kali</u> lipat selama pandemi dan tanpa kamu sadari, kamu bisa menjadi salah satunya.</h3></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section class="templatemo-container">
        <div class="container">
            <div class="row margin-bottom-30">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">Dashboard</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                </div> <!-- col-lg-12 -->
                <div id="folio-container" class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bottom-30 folio-item design">
                        <div class="card" style="width: 400px;">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php 
                                    echo '<p>Selamat datang, ' . $email . '!</p>';
                                    echo '<a href="logout.php">Logout</a>';
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </section>
    <div class="blue-divider effect1">
        <div class="dark-blue-bg"></div>
        <div class="blue-divider-bg-graphic"></div>
        <div class="blue-bg"></div>
    </div>
    <!-- end main content -->
    <footer class="text-center">
        <p class="small copyright-text">Copyright &copy; Sindi Widya</p>
    </footer>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
    
</body>

</html>