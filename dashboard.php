<?php
session_start();
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="sylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="hotel.css">
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <!-- Bootstrap javascript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>ADMINISTRATOR</title>
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#" style="color: black"> <img src="img/sky.png" style="width: 30px; height: 30px;">SkyLight</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <div class="navbar-nav" >
            <a class="nav-item nav-link active" href="#"><h5><i class="fas fa-bell " style="color: black"></i></h5></a>
            <a class="nav-item nav-link" href="#"><h5><i class="fas fa-comment " style="color: black"></i></h5></a>
            <a class="nav-item nav-link" data-toggle="dropdown" id="dropdownMenuButton" href=""><h5><i class="fas fa-user-circle " style="color: black"></i></h5></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" ><?php echo $user;?></a>
                    <a class="dropdown-item" href="logout.php">Log Out </a>
                </div>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->
            <!--Carousel-->
            <div class="row mt-5 no-gutters">
                <div class="col-md-2">
                    <ul class="list-group list-group-flush p-2 pt-4 list">
                        <li class="list-group-item" ><a href="dashboard.php"><i class="fas fa-list"></i> Dashboard</a></li>
                        <li class="list-group-item"><a href="admin.php">Daftar Admin</a></li>
                        <li class="list-group-item"><a href="akun_pengguna.php">Daftar Akun Pengguna</a></li>
                        <li class="list-group-item"><a href="datahotel.php">Data Hotel</a></li>
                        <li class="list-group-item"><a href="datapengguna.php">Data Pengguna</a></li>
                        <li class="list-group-item"><a href="kamar.php">Data Kamar</a></li>
                        <li class="list-group-item"><a href="pesan.phpl">Data Pesan</a></li>
                        <li class="list-group-item"><a href="slideshow.php">Slide Show</a></li>
                    </ul>
            </div>
            <div class="col-md-10"> 
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/s1.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block">
                                        <div class="slider_title">
                                            <h1>SkyLight</h1>
                                        </div>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/s3.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block ">
                                        <div class="slider_title">
                                            <h1>SkyLight</h1>
                                        </div>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/s2.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-md-block ">
                                        <div class="slider_title">
                                            <h1>SkyLight</h1>
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
            </div>
        </div>
        <section id="card2">
        <div class="row mx-auto" style="padding: 3em;" >
                <div class="card" style="width: 16rem;" >
                <a href="datahotel.php"><i class="fas fa-hotel fa-6x mr-2"></i>
                    <h4>Data Hotel</h4></a>
                        </div>
                <div class="card" style="width: 16rem;">
                <a href="datapengguna.php"><i class="fas fa-users fa-6x mr-2"></i>
                        <h4>Data Pengguna</h4>
                        </div></a>
                <div class="card" style="width: 16rem;">
                <a href="kamar.php"><i class="fas fa-bed fa-6x mr-2"></i>
                        <h4>Data Kamar</h4></a>
                        </div>
                <div class="card" style="width: 16rem;">
                <a href="pesan.php"><i class="fas fa-sticky-note fa-6x mr-2"></i>
                        <h4>Data Pesan</h4></a>
                        </div>
            </div>
        </section>
        <br>
        <!--Footer dan Copyright-->
        <footer class="text-dark1" id="footer">
            <div class="row mx-auto" style="padding: 3em;" >
                <div class="card" style="width: 16rem;">
                    <img src="img/money.svg" class="card-img-top" alt="">
                    <h4>Best Price</h4>
                    <p class="card-text" style="text-align: center;">Here we offer a variety of affordable prices
                        and certainly many discounts at the end of the year and
                        other special days.</p>
                        </div>
                <div class="card" style="width: 16rem;">
                        <img src="img/protection.svg" class="card-img-top" alt="...">
                        <h4>Safe and Secure</h4>
                        <p class="card-text"style="text-align: center;">here you get a safe and comfortable service and certainly with privacy maintained.
                        don't worry your comfort and privacy are number one for us</p>
                        </div>
                <div class="card" style="width: 16rem;">
                        <img src="img/like.svg" class="card-img-top" alt="...">
                        <h4>Best View</h4>
                        <p class="card-text" style="text-align: center;">Beautiful place and convenient hotel location, we are the solution !!
                        here you can enjoy the view from the hotel room and its
                        certainly suitable for a vacation with family and your partner</p>
                        </div>
                <div class="card" style="width: 16rem;">
                        <img src="img/premium.svg" class="card-img-top" alt="...">
                        <h4>Best Service</h4>
                        <p class="card-text" style="text-align: center;">what do guests expect when they come to the hotel ??
                        As one of the leading five-star hotels
                        We provide various facilities and services to satisfy
                        and meet the needs of the customers.</p>
                        </div>
            </div>
            </footer>
<!-- Akhir Footer -->
<!-- Copyright -->
            <div class="copyright text-center text-dark p-2">
                <h3> DEVELOP BY: NIXIEMICHA </h3><i class="far fa-copyright"></i>
                </div>
<!-- Akhir Copyright -->
</body>
</html>