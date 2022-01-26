<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-left">
        <div class="col-lg">
            <div class="card o-hidden border-0 shadow-lg my-5 col-lg">
                <div class="card-body p-10">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="<?php echo base_url() ?>assets/img/frame.png" class="card-img-top" alt="...">
                        </div>
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SIGN IN</h1>
                                    </div>
                                    <?php
                                    if ($this->session->flashdata('error') != '') {
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo $this->session->flashdata('error');
                                        echo '</div>';
                                    }
                                    ?>

                                    <?php
                                    if ($this->session->flashdata('success_register') != '') {
                                        echo '<div class="alert alert-info" role="alert">';
                                        echo $this->session->flashdata('success_register');
                                        echo '</div>';
                                    }
                                    ?>
                                    <form class="user" method="post" action="<?php echo base_url(); ?>login/proses">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('register'); ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>