<?= $this->extend('auth/template/header'); ?> >
<?= $this->section('header') ?>
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="card o-hidden border-0 shadow-lg my-5"  style="background: transparent;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="p-5">
                                    <div class="text-center">
                                        <img class="" style="width: 50px;" src="/img/logobpn.ico" alt="">
                                        <h1 class="h4 text-gray-900">WEB SIELKIN <br> ATR/BPN</h1>
                                        <h1 class="h4 text-gray-900">Login</h1>
                                    </div>
                                                    <?php if(session()->getFlashdata('msg')):?>
                                    <div class="alert alert-warning"><?= session()->getFlashdata('msg') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </div>
                                    <?php endif ; ?>
                                    <form action="<?= base_url('/auth/valid_login'); ?>" method="POST" class="user">
                                    <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user"
                                                aria-describedby="emailHelp"
                                                placeholder="Enter Your Email" required autofocus>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="pass" placeholder="Password" required>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text" style="border-top-right-radius: 90px; border-bottom-right-radius: 90px;">
                                                        <a href="#" class="text-dark" id="icon-click">
                                                            <i class="fas fa-eye" id="icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="/auth/lupa">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/auth/register">Buat Akun Baru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?= $this->include('auth/template/footer') ?>
<?= $this->endSection() ?>