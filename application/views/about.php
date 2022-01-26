<style type="text/css">
    .swing {
        animation: swing ease-in-out 1.5s infinite alternate;
        transform-origin: center 0px;
        float: left;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    }

    .swing img {
        border: 5px solid #f8f8f8;
        display: block;
    }

    .swing:after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 5px solid #999;
        top: 0px;
        left: 47%;
        z-index: 0;
        border-bottom: none;
        border-right: none;
        transform: rotate(45deg);
    }

    /* nail */
    .swing:before {
        content: '';
        position: absolute;
        width: 7px;
        height: 7px;
        top: 0;
        left: 49%;
        z-index: 5;
        border-radius: 50% 50%;
        background: #000;
    }

    @keyframes swing {
        0% {
            transform: rotate(3deg);
        }

        100% {
            transform: rotate(-3deg);
        }
    }

    .container {
        padding: 64px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both
    }

    .column-66 {
        float: left;
        width: 66.66666%;
        padding: 20px;
    }

    .column-33 {
        float: left;
        width: 33.33333%;
        padding: 20px;
    }

    .large-font {
        font-size: 48px;
    }

    .xlarge-font {
        font-size: 64px
    }

    img {
        display: block;
        height: auto;
        max-width: 100%;
    }

    @media screen and (max-width: 1000px) {

        .column-66,
        .column-33 {
            width: 95%;
            text-align: center;
        }

        img {
            margin: auto;
        }
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: #313552;
    }

    .name {
        color: #313552;
    }

    .job {
        color: #FCA311;
    }
</style>
<!-- ======= NAVBAR BIRU 
    NOTE : SEARCH MASI DI NAVBAR OREN BUTTON SIGN UP DAN SIGN IN MASIH BERANTAKAN ======= -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a style="color: #FCA311; font-size:32px;" class="navbar-brand" href="<?php echo base_url('home') ?>">T E K N O R E V I E W</a>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <span>
                <a class="btn btn-warning " href="<?php echo base_url('register'); ?>" role="button">SIGN UP</a>
                <a class="btn btn-warning" href="<?php echo base_url('login'); ?>" role="button">SIGN IN</a>
            </span>
        </ul>
    </div>
</nav>
<!-- ======= END NAVBAR BIRU ======= -->

<!-- ======= NAVBAR OREN ======= -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="margin-top:74px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a style="color:#313552;" class="nav-item nav-link active" href="home">HOME</a>
            <li class="nav-item dropdown">
                <a style="color:#313552;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('laptop') ?>">Laptop</a>
                    <a class="dropdown-item" href="<?php echo base_url('phone') ?>">Smartphone</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <a style="color: #313552;" class="nav-item nav-link" href="<?php echo base_url('newarrival') ?>">NEW ARRIVAL</a>
            <a style="color: #313552;" class="nav-item nav-link" href="<?php echo base_url('trending') ?>">TRENDING</a>
            <a style="color: #313552;" class="nav-item nav-link" href="<?php echo base_url('about') ?>">ABOUT</a>
        </div>
    </div>
    <span>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </span>
</nav>
<!-- ======= END NAVBAR OREN ======= -->


<!-- ======ABOUT US=====-->
<!-- ABOUT WEB -->
<h3 style="color: #313552; padding-top: 140px"></h3>

<body>

    <!-- ABOUT APP -->
    <div class="container">
        <audio controls autoplay>
            <source src="https://drive.google.com/uc?id=1iQuZ3gfCDGWB-YqiCGionZTOiau6aqGv" type="audio/mpeg">
        </audio>
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font " style="color:#313552;"><b>About</b></h1>
                <h1 class="large-font" style="color:#FCA311;"><b>TEKNOREVIEW</b></h1>
                <p> Technoreview adalah website yang berisi informasi mengenai seputar spesifikasi gadget dan juga dilengkapi dengan berbagai review yang diberikan oleh user. Web ini di buat dengan bahasa pemrograman php. Framework web ini menggunakan framework Code Igniter dan dibantu Bootstrap 4 dan 5.
                    Untuk database yang digunakan adalah phpmyadmin. Selain itu, multimedia yang digunakan dalam website Technireview adalah foto dan video. Kedua elemen tersebut digunakan sebagai media untuk menyampaikan informasi kepada user.
                </p>
            </div>
            <div class="column-33">
                <figure class="swing">
                    <img src="https://drive.google.com/uc?id=1KvHJaukzRtq2OPJwlEPTqTiaoWQu1opm">
                </figure>
            </div>
        </div>
    </div>

    <!--ANGGOTA-->
    <div class="slideanim" style="padding-top: 100px">
        <div style="text-align:center">
            <h1 class="xlarge-font "><b style="color:#313552;">MEET OUR</b><b style="color:#FCA311;"> TEAM</b></h1>
        </div>
    </div>


    <div class="row" style="padding-top: 80px">
        <div class="column slideanim">
            <div class="card-body">
                <img src="https://drive.google.com/uc?id=1f1iAyeXspjGxLAAJgF0u_LxsSEr3RwaQ" alt="Jane" style="width:100%">
                <div class="container">
                    <h2 class="name">Septian Yoga Krisnadi</h2>
                    <p class="title">1900016161</p>
                    <p class="job">Disini saya bertugas sebagai koordinator dalam proses pembuatan aplikasi mulai dari membuat perencanaan, mengalokasi tim, mengatasi masalah, hingga membuat report untuk para stakeholder. Serta membantu untuk menerjemahkan design yang telah dibuat kedalam bentuk kode pemrograman.
                    </p>
                    <p>jane@example.com</p>
                </div>
            </div>
        </div>

        <div class="column slideanim">
            <div class="card-body">
                <img src="https://drive.google.com/uc?id=1zv2MO87gmAKg0UPZhyzwd-Yf8zRki-B2" alt="Mike" style="width:100%">
                <div class="container">
                    <h2 class="name">Aisya Fitria Nafiani</h2>
                    <p class="title">1900016020</p>
                    <p class="job">Disini saya berperan untuk menyusun gambar, teks, dan pilihan warna untuk menggabungkan antar elemen yang dibutuhkan pada proses pembuatan produk. Sehingga dengan adanya design user interface mampu memudahkan pengguna agar dapat menjalankan suatu program, aplikasi, maupun mengunjungi website. </p>
                    <p>jane@example.com</p>
                </div>
            </div>
        </div>

        <div class="column slideanim">
            <div class="card-body">
                <img src="https://drive.google.com/uc?id=1-JcSvnMRIJDoRL_JtG6vpTShSRq5Fc42" alt="John" style="width:100%">
                <div class="container">
                    <h2 class="name">Olivia Khoirunnisa Maulid</h2>
                    <p class="title">1900016027</p>
                    <p class="job">Disini saya berperan untuk menyusun gambar, teks, dan pilihan warna untuk menggabungkan antar elemen yang dibutuhkan pada proses pembuatan produk. Sehingga dengan adanya design user interface mampu memudahkan pengguna agar dapat menjalankan suatu program, aplikasi, maupun mengunjungi website. </p>
                    <p>jane@example.com</p>
                </div>
            </div>
        </div>
    </div>

    <div style="padding-top:30px">
        <div class="column slideanim" style="margin-left:15%">
            <div class="card-body">
                <img src="https://drive.google.com/uc?id=1xbjd_qtYOh1qcFycyyiEHrQKKFnbnELh" alt="Jane" style="width:100%">
                <div class="container">
                    <h2 class="name">Reza Mahendra</h2>
                    <p class="title">1900016196</p>
                    <p class="job">Disini saya juga bertugas untuk membantu menerjemahkan design yang telah dibuat kedalam bentuk kode pemrograman dengan menggunakan tools dan bahasa pemrograman sesuai dengan kebutuhan.</p>
                    <p>jane@example.com</p>
                </div>
            </div>
        </div>

        <div class="column slideanim">
            <div class="card-body">
                <img src="https://drive.google.com/uc?id=1NzvNuLmlD6BpIgJc16Sf7R1xCJ-mRIHX" alt="Mike" style="width:100%">
                <div class="container">
                    <h2 class="name">Muh Chairul rasyiddin</h2>
                    <p class="title">1900016188</p>
                    <p class="job">disini saya bertugas untuk menganalisis sistem, mempelajari masalah-masalah yang timbul dan menentukan kebutuhan-kebutuhan pada sistem, serta untuk mengatasi permasalahan pada sistem.
                    </p>
                    <p>jane@example.com</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>