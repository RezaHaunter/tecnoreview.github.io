<!-- ======= NAVBAR BIRU 
    NOTE : SEARCH MASI DI NAVBAR OREN BUTTON SIGN UP DAN SIGN IN MASIH BERANTAKAN ======= -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a style="color: #FCA311; font-size:32px;" class="navbar-brand" href="<?php echo base_url('home') ?>">T E K N O R E V I E W</a>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <span>
                <a class="btn btn-warning " href="<?php echo base_url('register'); ?>" role="button">SIGN UP</a>
                <a class="btn btn-warning" href="<?php echo base_url('auth'); ?>" role="button">SIGN IN</a>
            </span>
        </ul>
    </div>
</nav>
<!-- ======= END NAVBAR BIRU ======= -->
<h3 style="color: #313552; padding-top: 100px; margin-left: 10px"></h3>
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($brand as $brd) : ?>
                            <div class="col-md-4">
                                <div class="container-fuild">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo $brd->gambar ?>" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <div class="carousel-item active">
                                                    <video width="100%" height="50%" controls autoplay>
                                                        <source src="<?php echo $brd->video ?>">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <td><strong><?php echo $brd->nama ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>keterangan</td>
                                        <td><strong><?php echo $brd->keterangan1 ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td><strong><?php echo $brd->deskripsi1 ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Spesifikasi</td>
                                        <td>
                                            <ul>
                                                <li><strong><?php echo $brd->spesifikasi ?></strong></li>
                                                <li><strong><?php echo $brd->spesifikasi1 ?></strong></li>
                                                <li><strong><?php echo $brd->spesifikasi2 ?></strong></li>
                                                <li><strong><?php echo $brd->spesifikasi3 ?></strong></li>
                                                <li><strong><?php echo $brd->spesifikasi4 ?></strong></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">Review</h4>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td>Baim</td>
                                        <td><strong>Produknya sangat bagus</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Agus</td>
                                        <td><strong>Dengan Harga Segitu mendapatkan spek yang luar biasa</strong></td>
                                    </tr>
                                </table>
                                <div class="container-fluid">
                                    <button id="btn" class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-plus fa-sm"></i> Write Review</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" name="nama_prd" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <input type="text" name="kategori" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gambar </label><br>
                                                        <input type="file" name="gambar" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php echo anchor('home', '<div class="btn mb-2"><i class="fas fa-angle-left"></i> Kembali</div>') ?>
                </div>
            </div>
    </section>
    <section class="content">

    </section>
</div>