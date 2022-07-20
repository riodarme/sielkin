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
                        <a href="<?= base_url('/admin/kegiatan') ?>" class="btn btn-info btn-sm float-end">Kembali</a>
                        </div>
                        <hr>
                           <form action="<?= base_url('admin/tambahk'); ?>" method="POST">
                           <?= csrf_field(); ?>
                              <label for="floatingTextarea2">Kegiatan</label>
                              <div class="mb-3">
                              <input type="text" name="nm_kegiatan" class="form-control" id="exampleFormControlInput1" placeholder="Input Kegiatan">
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