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
                                        <h1 class="h4 text-gray-900 mb-4">SIGN UP</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo base_url('register/proses'); ?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                            <?php if($this->session->flashdata('error') !=''){echo '<smaall class="text-danger pl-3 ">';
					                        echo $this->session->flashdata('error');echo '</smaall>';}?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <?= form_error('password1', '<smaall class="text-danger pl-3 ">', '</smaall>'); ?>
                                        </div>
                                        <div class=" form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('login'); ?>">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
