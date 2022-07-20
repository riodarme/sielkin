<?= $this->extend('auth/template/header'); ?>
<?= $this->section('header') ?>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5" style="background: transparent;" >
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Lupa Password ?</h1>
                                        <img class="" style="width: 50px;" src="/img/logobpn.ico" alt="">
                                        <h1 class="h4 text-gray-900">WEB SIELKIN <br> ATR/BPN</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/auth/register">Buat Akun Baru</a>
                                    </div>
                                    <div class="text-center">
                                <a class="small" href="/">Sudah Ada Akun? Login!</a>
                            </div>
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