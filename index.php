<?php
require "function.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRJ X HT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/_Logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/_Logo.png" alt="Logo" width="130px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Beranda</a>
                <a href="#tentang" class="nav-item nav-link">Tentang Kami</a>
                <!-- <a href="courses.html" class="nav-item nav-link">Courses</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lomba</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="lomba/lct.php" class="dropdown-item">LCT</a>
                        <a href="lomba/cpc.php" class="dropdown-item">CPC</a>
                        <a href="lomba/fotografi" class="dropdown-item">Photography</a>
                        <a href="lomba/essayNasional.php" class="dropdown-item">Essay Nasional</a>
                        <a href="lomba/futsal.php" class="dropdown-item">Futsal</a>
                        <a href="lomba/badminton.php" class="dropdown-item">Badminton</a>
                        <a href="lomba/ml.php" class="dropdown-item">Mobile Legend</a>
                        <a href="lomba/pes.php" class="dropdown-item">PES</a>
                    </div>
                </div>
                <a href="pengumuman" class="nav-item nav-link">Pengumuman Lomba</a>
                <?php
                if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                ?>
                    <a href="dashboard/lomba.php" class="nav-item nav-link">Administrasi</a>

                <?php
                }
                ?>
                <?php
                if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $_SESSION["username"] ?></a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="profile/profile.php" class="dropdown-item">Data Diri</a>
                            <a href="logOut.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <?php
            if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
            ?>
                <a href="login/login.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log In<i class="fa fa-arrow-right ms-3"></i></a>
            <?php
            }
            ?>
        </div>
    </nav>
    <!-- Navbar End -->


    <h5 class="text-center my-3">Tonton video panduan memakai <strong>website PRJxHT</strong> <a href="" class="link">di sini  <i class="bi bi-arrow-right-short"></i></a></h5>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Pamflet-comingsoon-prj.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">PRJ X HT</h1>
                                    <?php
                                    if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
                                    ?>
                                        <a href="login/login.html" class="btn btn-primary py-sm-3 px-sm-5">Log In</a>
                                        <a href="signUp/signUp.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Sign Up</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/Tak berjudul89_20220815144205.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Ignite: Unleashing the Spark of Youth Potential</h1>
                                    <?php
                                    if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
                                    ?>
                                        <a href="login/login.html" class="btn btn-primary py-sm-3 px-sm-5">Log In</a>
                                        <a href="signUp/signUp.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Sign Up</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-clock text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Pembukaan </h5>
                                <span>Pembukaan akan dilaksnakan pada tanggal 22 Oktober 2022.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-clock text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Pelaksanaan lomba</h5>
                                <span>Ada 6 lomba yang akan dilaksanakan, mulai dari LCT, Mobile Legend, dll.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-clock text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Penutupan</h5>
                                <span>Pekan Raya Jurusan Ilmu Komputer berlangsung sampai tanggal 29 Oktober 2022.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-6" id="tentang">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">PRJ X HT</h6>
                    <h1 class="display-6 mb-4">Ignite: Unleashing the Spark of Youth Potential</h1>
                    <p class="mb-3">"Ignite: Unleashing the Spark of Youth Potential" adalah acara yang didedikasikan untuk menyalakan semangat, kreativitas, dan potensi dalam diri para pemuda. Tema ini juga menginspirasi individu-individu muda untuk merangkul bakat-bakat unik mereka, mengikuti hasrat mereka, dan percaya pada kemampuan mereka untuk membuat perbedaan. Dengan memberikan kesempatan kepada mereka untuk memamerkan keahlian mereka, belajar dari para pakar industri, dan terhubung dengan rekan-rekan yang berpikiran sama, acara ini bertujuan untuk menyalakan percikan api dalam diri anak muda dan menempatkan mereka di jalan menuju kesuksesan dan kepuasan. </p>
                    <p class="mb-5">Jadi tunggu apalagi?? Yuk, bergabung dengan PRJxHT XI dengan tema "Ignite: Unleashing the Spark of Youth Potential" dan bersama-sama kita tunjukkan keberanian untuk mengeluarkan bakat dan potensi yang ada di dalam diri kita!! Mari kita berani memulai dan menerangi dunia dengan api semangat pemuda yang membara! </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Sertifikat</h5>
                            </div>
                            <span>Peserta dan pemenang mendapatkan e-sertifikat.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">CV</h5>
                            </div>
                            <span>Menambah pengalaman di CV.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Relasi & Skill</h5>
                            </div>
                            <span>Peserta dapat membangun relasi dan meningkatkan skill.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Uang Tunai</h5>
                            </div>
                            <span>Pemenang mendapatkan uang tunai.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/Tak berjudul89_20220815144205.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Semua Lomba</h6>
                <h1 class="display-6 mb-4">Berikut adalah lomba yang akan kami adakan</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">SMA dan sederajat</div>
                            <h5 class="mb-3">Lomba Cepat Tepat</h5>
                            <p>Lomba Cepat Tepat Komputer adalah salah satu cabang lomba di bidang....</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="lomba/img/LCT.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="lomba/lct.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">SMA dan sederajat</div>
                            <h5 class="mb-3">Competitive Programming Competition</h5>
                            <p>Competitive Programming Competition adalah lomba....</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="lomba/img/CPC.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="lomba/cpc.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Umum</div>
                            <h5 class="mb-3">Photography</h5>
                            <p>Photography adalah salah satu cabang lomba di bidang non-akademik....</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="lomba/img/PG.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="lomba/fotografi">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Umum</div>
                            <h5 class="mb-3">Essay Nasional</h5>
                            <p>Lomba Essay Nasional adalah lomba...</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="lomba/img/PG.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="lomba/essayNasional.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">SMA dan sederajat</div>
                                <h5 class="mb-3">Futsal</h5>
                                <p>Futsal adalah cabang olahraga di bidang olahraga dalam rangka....</p>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="lomba/img/FUTSAL.png" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="lomba/futsal.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">SMA dan sederajat</div>
                                <h5 class="mb-3">Badminton</h5>
                                <p>Badminton adalah cabang olahraga dalam rangka memperingati hari....</p>
                            </div>
                            <div class="position-relative">
                                <img class="img-fluid" src="lomba/img/BADMINTON.png" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="lomba/badminton.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Umum</div>
                                <h5 class="mb-3">Mobile Legend</h5>
                                <p>Mobile Legends adalah cabang E-Sports dalam rangka....</p>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="lomba/img/ML.png" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="lomba/ml.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Umum</div>
                                <h5 class="mb-3">PES</h5>
                                <p>PES adalah cabang E-Sports dalam rangka....</p>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="lomba/img/ML.png" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="lomba/pes.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Sponsor Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Sponsor Kami</h6>
                <h1 class="display-6 mb-4">PRJ X HT Disponsori Oleh:</h1>
            </div>
            <div class="row g-0 team-items mb-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class = "img-fluid" src="lomba/img/Dicoding Logo - Black.png" alt="" >
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.dicoding.com/"><i class="fa fa-globe"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/dicoding/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Dicoding</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="lomba/img/mandiri 3.png" alt="" width="1000px">
                            <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://ibank.bankmandiri.co.id/retail3/"><i class="fa fa-globe"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/bankmandiri/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Livin by Mandiri</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="lomba/img/mandiri 2.png" alt="">
                            <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://bankmandiri.co.id/"><i class="fa fa-globe"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/bankmandiri/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mandiri</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="lomba/img/(Kock) TirtaSport.png" alt="">
                            <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://tirtasports.com/"><i class="fa fa-globe"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/tirta_sport/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">TIrta Sport</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class = "img-fluid" src="lomba/img/mixue 1.png" alt="" >
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://instagram.com/mixue_wayhalim_lampung?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mixue Way Halim</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="lomba/img/mixue 2.png" alt="" width="1000px">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://instagram.com/mixue_enggal_lampung?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mixue Enggal</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="lomba/img/(kock) Logo Mah Put.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mah Put Shuttlecock</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="lomba/img/Emina.png" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.eminacosmetics.com/?utm_source=search&utm_medium=cpc&utm_campaign=aon&utm_term=owned_branded"><i class="fa fa-globe"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/eminacosmetics/?hl=id"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Emina</h5>
                            <span>Sponsor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Sponsor End -->

    <!-- Media Partner Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Media Partner Kami</h6>
                <h1 class="display-6 mb-4">PRJ X HT Berkerjasama dengan:</h1>
            </div>
            <div class="row g-0 team-items mb-3">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item ">
                        <div class="">
                            <img class = "img-fluid" src="lomba/img/medpart.png" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Media Partner End -->


  <footer class="bg-primary text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="d-flex align-items-center justify-content-center ">
            <img src="img/himakom-904x1024-250x283.png" height="70" alt="logo himakom"/>
          </div>

          <p class="text-center">Himpunan Mahasiswa Jurusan Ilmu Komputer</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="https://himakom.fmipa.unila.ac.id/">
                <i class="fab bi-globe"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="https://line.me/R/ti/p/%40xpm1487l">
                <i class="fab fa-line"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="https://www.instagram.com/himakomunila">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="https://www.youtube.com/channel/UCDQq6EJIqdvcsWK2NeXjUkQ">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="https://twitter.com/Himakom_Unila">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>

        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Kontak</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>Gedung UKM FMIPA Unila<br />
                    Jl. Prof. Dr. Ir. Sumantri Brojonegoro No. 1<br />
                    Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, 35145<br />
                    Lampung, Indonesia</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>himakomputer.unila@gmail.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright Start -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      &copy; 2023 Copyright | 
      <a class="text-white" href="https://himakom.fmipa.unila.ac.id/">Himakom Unila</a>
    </div>
    <!-- Copyright End -->
  </footer>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>