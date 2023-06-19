<?php
require_once("konek/konek.php");
if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    $sql = "INSERT INTO tblcontact (nama, email, subjek, pesan)
            VALUES (:nama, :email, :subjek, :pesan)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":nama" => $nama,
        ":email" => $email,
        ":subjek" => $subjek,
        ":pesan" => $pesan
    );
    $saved = $stmt->execute($params);

    if($saved) header("location: contact.php");

}

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
                    <nav class="templatemo-nav">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="tespsikologi.html">Tes Psikologi</a></li>
                            <li><a href="contact.php" class="active">contact</a></li>
                            <li><a href="signup.php">sign up</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- header image -->
    <div class="header-img-4">
    </div>
    <!-- end header image -->
    <!-- Welcome message -->
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-wrapper">
                        <h2 class="welcome-title text-uppercase">Contact</h2>
                        <img src="img/welcome-divider-lines.png" alt="Welcome divider"
                            class="welcome-divider-lines-img">
                        <p class="welcome-description">Jika ada pertanyaan ataupun saran silahkan kirimkan pesan ke
                            kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome message -->
    <!-- main content -->
    <section class="templatemo-container">
        <div class="container">
            <div class="row margin-bottom-30">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">Contact</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                </div> <!-- col-lg-12 -->
            </div> <!-- row -->
            <div class="row margin-bottom-30">
                <div class="col-lg-6 col-md-6 contact-left">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Informasi Kami</b></h3>
                    <div class="contact-point">
                        <i class="fa fa-map-marker fa-3x contact-point-icon blue-text"></i>
                        <div class="contact-point-detail-container">
                            <b class="text-uppercase contact-point-title blue-text font-weight-700">Alamat</b>
                            <p class="contact-point-detail">Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota
                                Malang, Jawa Timur 65141.</p>
                        </div>
                    </div>
                    <div class="contact-point">
                        <i class="fa fa-envelope-o fa-3x contact-point-icon blue-text"></i>
                        <div class="contact-point-detail-container">
                            <b class="text-uppercase contact-point-title blue-text font-weight-700">Email</b>
                            <p class="contact-point-detail">Betterhelp@mail.com</p>
                        </div>
                    </div>
                    <div class="contact-point">
                        <i class="fa fa-phone fa-3x contact-point-icon blue-text"></i>
                        <div class="contact-point-detail-container">
                            <b class="text-uppercase contact-point-title blue-text font-weight-700">Telfon</b>
                            <p class="contact-point-detail">+6288888888</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 contact-right">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Tinggalkan Pesan</b></h3>
                    <form action="#" method="post" class="tm-contact-form">
                        <div class="tm-contact-form">
                            <div class="form-group">
                                <input type="text" id="contact_name" class="form-control" name="nama"
                                    placeholder="NAMA" />
                            </div>
                            <div class="form-group">
                                <input type="email" id="contact_email" class="form-control" name="email"
                                    placeholder="EMAIL" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" class="form-control" name="subjek"
                                    placeholder="SUBJECT" />
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" class="form-control" rows="8" name="pesan"
                                    placeholder="PESAN"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit"
                                    class="text-uppercase btn-blue-gradient btn-submit">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
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