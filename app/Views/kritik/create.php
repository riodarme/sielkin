<?= $this->extend('dashboard/template/header'); ?>
<?= $this->section('header') ?>
        <?= $this->include('dashboard/template/sidebar') ?>
                <?= $this->include('dashboard/template/topbar') ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
                    </div>
                     <div class="card">
                        <div class="card-body table-responsive align-item-center mx-auto mt-1">
                        <div class="card-body">
                        <div class="form-group">
                        <a href="<?= base_url('kritik') ?>" class="btn btn-warning btn-sm float-end"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</a>
                        </div>
                        <hr>
                           <form action="<?= base_url('/kritik/tambah'); ?>" method="POST">
                           <?= csrf_field(); ?>
                              <label for="floatingTextarea2">Komentar</label>
                              <div class="form-floating">
                                 <textarea class="form-control" name="isi" placeholder="Kritik Dan Saran" id="floatingTextarea2" style="height: 100px"></textarea>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                                 <button type="reset" class="btn btn-danger mt-2">Batal</button>
                              </div>
                           </form>
                           </div>
                        </div>
                        </div>
                     </div>
        <!-- /.container-fluid -->
                  </div>
        <!-- End of Main Content -->
<?= $this->include('dashboard/template/footer') ?>
<?= $this->endSection() ?>