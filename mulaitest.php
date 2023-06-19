<?php
require_once("konek/konek.php");
if (isset($_POST['submit'])) {
    $pertanyaan1 = $_POST["pertanyaan1"];
    $pertanyaan2 = $_POST["pertanyaan2"];
    $pertanyaan3 = $_POST["pertanyaan3"];
    $pertanyaan4 = $_POST["pertanyaan4"];
    $pertanyaan5 = $_POST["pertanyaan5"];

    $sql = "INSERT INTO tbltes (pertanyaan1, pertanyaan2, pertanyaan3, pertanyaan4, pertanyaan5)
            VALUES (:pertanyaan1, :pertanyaan2, :pertanyaan3, :pertanyaan4, :pertanyaan5)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":pertanyaan1" => $pertanyaan1,
        ":pertanyaan2" => $pertanyaan2,
        ":pertanyaan3" => $pertanyaan3,
        ":pertanyaan4" => $pertanyaan4,
        ":pertanyaan5" => $pertanyaan5
    );
    $saved = $stmt->execute($params);

    if($saved) header("location: tespsikologi.html");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes Kepribadian MBTI</title>
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
                            <li><a href="contact.php">contact</a></li>
                            <li><a href="signup.php">sign up</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- header image -->
    <div class="header-img-3"></div>
    <!-- end header image -->
    <!-- Welcome message -->
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-wrapper">
                        <h2 class="welcome-title text-uppercase">Tes Psikologi</h2>
                        <img src="img/welcome-divider-lines.png" alt="Welcome divider"
                            class="welcome-divider-lines-img">
                        <p class="welcome-description">Konsultasikan masalah yang kamu hadapi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome message -->
    <!-- main content -->
    <section class="templatemo-container">
        <div class="container">
            <div class="row section-title-container">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">Tes Kepribadian MBTI</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Tes Kepribadian MBTI</b></h3>
                </div>
                <div class="col-lg-12 col-md-12">
                    <form action="#" method="post" class="tm-contact-form">
                        <div class="tm-contact-form">
                            <div class="form-group">
                                <label for="pertanyaan1">Kamu menginginkan orang yang seperti apa untuk menjadi
                                    pasanganmu ?</label>
                                <input type="text" id="contact_name" name="pertanyaan1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pertanyaan2">Apa yang paling membuat mu takut ?</label>
                                <input type="text" id="contact_name" name="pertanyaan2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pertanyaan3">Dalam 5 tahun kedepan,apa yang ingin kamu lakukan ?</label>
                                <input type="text" id="contact_name" name="pertanyaan3" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pertanyaan4">Apa yang kamu banggakan dalam hidup ?</label>
                                <input type="text" id="contact_name" name="pertanyaan4" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pertanyaan5">Dengan siapa kamu suka menghabiskan waktu ?</label>
                                <input type="text" id="contact_name" name="pertanyaan5" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="text-uppercase btn-blue-gradient btn-submit">Selesai</button>
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

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script> <!-- Isotope, http://isotope.metafizzy.co -->
    <script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
    <script>
        // All images are loaded. Call isotope
        $(window).load(function () {
            var $container = $('#folio-container');
            // init
            $container.isotope({
                // options
                itemSelector: '.folio-item',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
            });

            // filter items when filter link is clicked
            jQuery('#filters a').click(function () {
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });

            jQuery('#filters li a').click(function () {

                jQuery('#filters li').removeClass('current');
                jQuery(this).parent().addClass('current');
            });
        });
    </script>
</body>

</html>