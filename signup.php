<?php
require_once("konek/konek.php");
if (isset($_POST['register'])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $tgllahir = $_POST["tgllahir"];
    $alamat = $_POST["alamat"];
    $hobi = $_POST["hobi"];
    $biografi = $_POST["biografi"];

    $sql = "INSERT INTO tblpengguna (nama, email, password, jeniskelamin, tgllahir, alamat, hobi, biografi)
            VALUES (:nama, :email, :password, :jeniskelamin, :tgllahir, :alamat, :hobi, :biografi)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":nama" => $nama,
        ":email" => $email,
        ":password" => $password,
        ":jeniskelamin" => $jeniskelamin,
        ":tgllahir" => $tgllahir,
        ":alamat" => $alamat,
        ":hobi" => $hobi,
        ":biografi" => $biografi
    );
    $saved = $stmt->execute($params);

    if($saved) header("location: signup.php");
}
if(isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tblpengguna WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        session_start();
        $_SESSION['email'] = $email;
        // header('Location: dashboard.php');
        echo '<a href="dashboard.php" target="_blank">Dashboard</a>';
    } else {
        // Login gagal
        echo '<script>alert("Email atau password salah"); window.location.href="signup.php";</script>';
        exit();
    }
    
    $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
                            <li><a href="signup.php" class="active">sign up</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- header image -->
    <div class="header-img-5">
    </div>
    <!-- end header image -->
    <!-- Welcome message -->
    <div class="welcome-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-wrapper">
                        <h2 class="welcome-title text-uppercase">Sign Up</h2>
                        <img src="img/welcome-divider-lines.png" alt="Welcome divider"
                            class="welcome-divider-lines-img">
                        <p class="welcome-description">Selamat datang kembali di Better Help.</p>
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
                    <h2 class="section-title">Sign Up</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                </div> <!-- col-lg-12 -->
            </div> <!-- row -->
            <div class="row margin-bottom-30">
                <div class="col-lg-6 col-md-6 contact-left">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Sign Up</b></h3>
                    <form action="#" method="post" class="tm-contact-form">
                        <div class="tm-contact-form">
                            <div class = "form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="name" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="jeniskelamin">Jenis Kelamin</label>
                                <select id="jeniskelamin" class="form-control" name="jeniskelamin" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgllahir">Tanggal Lahir</label>
                                <input type="date" id="tgllahir" class="form-control" name="tgllahir" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="hobi">Hobi</label>
                                <input type="text" id="hobi" class="form-control" name="hobi" required>
                            </div>
                            <div class="form-group">
                                <label for="biografi">Biografi</label>
                                <textarea rows="8" id="biografi" class="form-control" name="biografi" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="text-uppercase btn-blue-gradient btn-submit">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 contact-right">
                    <h3 class="section-title-2 text-uppercase font-weight-300"><b>Sign In</b></h3>
                    <form action="#" method="post" class="tm-contact-form">
                        <div class="tm-contact-form">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required/>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="text-uppercase btn-blue-gradient btn-submit">Sign In</button>
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
    <script>
    </script>
</body>

</html>