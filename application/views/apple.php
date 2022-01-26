<style type="text/css">
    body {
        background-color: #F4F4F4;
    }

    .navbar-light {
        background-color: #313552;
        font-size: 25px;
    }

    .navbar-dark {
        background-color: #FCA311;
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .cards {
        transition: all 0.5s ease;
        cursor: pointer
    }

    .cards:hover {
        transform: scale(1.2);
    }

    .card2 {
        transition: all 1.0s ease;
        cursor: pointer
    }

    .card2:hover {
        transform: matrix(1.1, 0.2, -0.2, 1.1, 0, 0);
    }

    .a:hover {
        font-color: white;
    }
</style>

<!-- ======= NAVBAR BIRU 
    NOTE : SEARCH MASI DI NAVBAR OREN BUTTON SIGN UP DAN SIGN IN MASIH BERANTAKAN ======= -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a style="color: #FCA311; font-size:32px;" class="navbar-brand" href="home">T E K N O R E V I E W</a>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <span>
        <a class="btn btn-warning " href="<?php echo base_url('register'); ?>"role="button">SIGN UP</a>
        <a class="btn btn-warning" href="<?php echo base_url('login'); ?>" role="button">SIGN IN</a>
</span>
        </ul>
    </div>
</nav>
<!-- ======= END NAVBAR BIRU ======= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="margin-top:74px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a style="color:#313552;" class="nav-item nav-link" href="home">HOME</a>
            <a style="color:#313552;" class="nav-item nav-link" href="#">PRODUCTS OF BRAND</a>
        </div>
    </div>
</nav>
<!-- ======= END NAVBAR OREN ======= -->

<!-- ======= OUR TRENDING ======= -->
<h3 style="color: #313550; padding-top: 150px;padding-bottom: 10px; margin-left: 10px">APPLE</h3>

<div class="row row-cols-1 row-cols-md-4 g-4" style="margin-left: 20px; margin-right:20px">

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1W0bXzhr9tZCxpAge5g_fr6KiJNWD5GmC" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">iPhone 13 Pro</p>
                <p class="card-text"><small class="text-muted">A dramatically more powerful camera system. A display so responsive, every interaction feels new again. The world’s fastest smartphone chip. Exceptional durability. And a huge leap in battery life.</small></p>
            </div>
        </div>
    </div>

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1T6GuJfUlWIp9Iv-3IckssX3wpbqlOqB_" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">MacBook Air</p>
                <p class="card-text"><small class="text-muted">Power. It`s in the Air.Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</small></p>
            </div>
        </div>
    </div>

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1Dt7tLTaJK48v56qWNxszyFagI6Peq8-x" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">AirPods (3rd generation)</p>
                <p class="card-text"><small class="text-muted">Music on a more personal note. Adaptive EQ automatically tunes music to your ears. Inward-facing microphones detect what you’re hearing, then adjust low- and mid-range frequencies to deliver the rich details in every song, customized for you in real time.</small></p>
            </div>
        </div>
    </div>

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1hMsfm9rK_4lwaHVQ6VmH64goOv_zHDQu" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">Apple Watch Series 7</p>
                <p class="card-text"><small class="text-muted">Big screen. Huge impact. The challenge was to create a bigger display while barely expanding the dimensions of the watch itself. To do so, the display was completely re‑engineered reducing the borders by 40%, allowing for more screen area than both Series 6 and Series 3. Now that’s something to smile about.</small></p>
            </div>
        </div>
    </div>

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1Dt7tLTaJK48v56qWNxszyFagI6Peq8-x" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">AirPods (3rd generation)</p>
                <p class="card-text"><small class="text-muted">Music on a more personal note. Adaptive EQ automatically tunes music to your ears. Inward-facing microphones detect what you’re hearing, then adjust low- and mid-range frequencies to deliver the rich details in every song, customized for you in real time.</small></p>
            </div>
        </div>
    </div>

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1hMsfm9rK_4lwaHVQ6VmH64goOv_zHDQu" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">Apple Watch Series 7</p>
                <p class="card-text"><small class="text-muted">Big screen. Huge impact. The challenge was to create a bigger display while barely expanding the dimensions of the watch itself. To do so, the display was completely re‑engineered reducing the borders by 40%, allowing for more screen area than both Series 6 and Series 3. Now that’s something to smile about.</small></p>
            </div>
        </div>
    </div>
    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1W0bXzhr9tZCxpAge5g_fr6KiJNWD5GmC" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">iPhone 13 Pro</p>
                <p class="card-text"><small class="text-muted">A dramatically more powerful camera system. A display so responsive, every interaction feels new again. The world’s fastest smartphone chip. Exceptional durability. And a huge leap in battery life.</small></p>
            </div>
        </div>
    </div>

    <div class="col" style=" padding-top:20px">
        <div class="card h-100">
            <div class="card2">
                <img src="https://drive.google.com/uc?id=1T6GuJfUlWIp9Iv-3IckssX3wpbqlOqB_" class="card-img-top">
            </div>
            <div class="card-body">
                <h4 class="card-title">A P P L E</h4>
                <p class="card-text">MacBook Air</p>
                <p class="card-text"><small class="text-muted">Power. It`s in the Air.Our thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fanless design. This much power has never been this ready to go.</small></p>
            </div>
        </div>
    </div>

</div>
<!-- ======= END OUR TRENDING ======= -->