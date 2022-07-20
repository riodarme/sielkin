<?= $this->extend('auth/template/header'); ?>
<?= $this->section('header') ?>
<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5"  style="background: transparent;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img class="" style="width: 50px;" src="/img/logobpn.ico" alt="">
                                <h1 class="h4 text-gray-900">WEB SIELKIN <br> ATR/BPN</h1>
                                <h1 class="h4 text-gray-900">Register</h1>
                            </div>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('error'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('/auth/valid_register'); ?>" method="post" class="user">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="nama" class="form-control form-control-user"
                                    placeholder="Input Nama" id="nama">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="nik" class="form-control form-control-user"
                                    placeholder="Input NIK" id="nik">
                                </div>
                            </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                    placeholder="Input Email" id="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 input-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="pass" placeholder="Password" >
                                        <div class="input-group-prepend">
                                        <div class="input-group-text" style="border-top-right-radius: 90px; border-bottom-right-radius: 90px;">
                                        <a href="#" class="text-dark" id="icon-click">
                                        <i class="fas fa-eye" id="icon"></i>
                                        </a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="konfirmasi" class="form-control form-control-user"
                                        placeholder="Ulangi Password">
                                   </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">REGISTER</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/">Sudah Ada Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('auth/template/footer') ?>
<?= $this->endSection() ?>