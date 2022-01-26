<!-- ======= NAVBAR BIRU 
    NOTE : SEARCH MASI DI NAVBAR OREN BUTTON SIGN UP DAN SIGN IN MASIH BERANTAKAN ======= -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a style="color: #FCA311; font-size:32px;" class="navbar-brand" href="<?php echo base_url('home') ?>">T E K N O R E V I E W </a>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <span>
                <a class="btn btn-warning " href="<?php echo base_url('register'); ?>" role="button">SIGN UP</a>
                <a class="btn btn-warning" href="<?php echo base_url('login'); ?>" role="button">SIGN IN</a>
                <a class="btn btn-warning" href="<?php echo base_url(); ?>index.php/login/logout" role="button">LOG OUT</a>
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

<!-- ======= OUR TRENDING ======= -->
<h3 style="color: #313552; padding-top: 180px;padding-bottom: 10px; margin-left: 10px">OUR TRENDING</h3>

<div class="row row-cols-1 row-cols-md-4 g-4" style="margin-left: 20px; margin-right:20px">

    <?php foreach ($brand as $brd) : ?>
        <div class="col" style=" padding-top:20px">
            <div class="card h-100">
                <div class="card2">
                    <a class="button" href="<?php echo base_url('home/detail/' . $brd->id) ?>">
                        <img src="<?php echo $brd->gambar ?>" class="card-img-top">
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $brd->nama ?></h4>
                    <p class="card-text"><?php echo $brd->keterangan ?></p>
                    <li class="card-text"><small class="text-muted"><?php echo $brd->deskripsi ?></small></li>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- ======= END OUR TRENDING ======= -->

<!-- ======= POPULAR BRANDS ======= -->
<div class="slideanim">
    <h3 style="color: #313552; padding-top: 60px;padding-bottom: 30px; margin-left: 10px">OTHER BRANDS</h3>
    <div class="card-deck" style="margin-left: 20px; margin-right:20px">

        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <a class="button" href="<?php echo base_url('apple') ?>">
                    <img src="https://drive.google.com/uc?id=1NiCa48MdjqkaZdYvtDMz8sS3ngOV7S4C" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <a class="button" href="<?php echo base_url('samsung') ?>">
                    <img src="https://drive.google.com/uc?id=1N_Od19yqCE3ZICaMUrl3m1WK7lTDLkk6" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <img src="https://drive.google.com/uc?id=1O3OT1rCQDRAHI_0RW2hbWfHo8TYQUuFR" class="card-img-top">
            </div>
        </div>

        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <a class="button" href="<?php echo base_url('dell') ?>">
                    <img src="https://drive.google.com/uc?id=1O-exyNYNhFxfB7Hsgfc5Uv1fCbGamGBL" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <img src="https://drive.google.com/uc?id=1tFXxVtIWf3o826Qk0eYCQoUac6fYimf7" class="card-img-top">
            </div>
        </div>

        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <a class="button" href="<?php echo base_url('xiaomi') ?>">
                    <img src="https://drive.google.com/uc?id=1NXcWuIr5_-94Faj-R5lqyDzqiHVINY2Q" class="card-img-top">
                </a>
            </div>
        </div>
        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <img src="https://drive.google.com/uc?id=1O5fpsV0k5bR4N7Okxf8Lb5PtW8nXbo6L" class="card-img-top">
            </div>
        </div>
        <div class="card" style="background-color: #F4F4F4">
            <div class="cards">
                <img src="https://drive.google.com/uc?id=1NrANZ_slG5y5u09eiF9df1zEPBwR_Y51" class="card-img-top">
            </div>
        </div>

    </div>
</div>
<!-- ======= END BRANDS ======= -->

<!-- ======= NEW ARRIVAL ======= -->
<div class="slideanim">
    <h3 style="color: #313552; padding-top: 60px;padding-bottom: 30px; margin-left: 10px" href="newarrival">NEW ARRIVAL</h3>

    <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-left: 20px; margin-right:20px">

        <div class="card mb-3" style=" max-width: 540px; margin-left: 20px; margin-right:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://drive.google.com/uc?id=10bt44dwdNqlFAO2ypKOikMA9GSy6s_rY" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Asus Vivobook 14x Pro Oled</h5>
                        <p class="card-text">ASUS Vivobook Pro 14X OLED
                            Ignite your creativity</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style=" max-width: 540px; margin-left: 30px; margin-right:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://drive.google.com/uc?id=1NQUilwcqj2I2vWO7FiDi4OcAE2D05bct" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Galaxy S21 Ultra 5g</h5>
                        <p class="card-text">Best cameras, great battery life, and design.</p>
                        <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style=" max-width: 540px; margin-left: 20px; margin-right:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://drive.google.com/uc?id=1OaN2J0JDQ84qFb90I_kR-euYmpE0CW_s" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Xiaomi 12 Pro</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style=" max-width: 540px; margin-left: 30px; margin-right:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://drive.google.com/uc?id=1xSXz4keDCcLSDx1BVGJH-kEwVlllUnM_" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Dell XPS 13 9310</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= END NEW ARRIVAL ======= -->