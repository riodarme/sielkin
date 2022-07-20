<?= $this->extend('dashboard/template/header'); ?>
<?= $this->section('header') ?>
        <?= $this->include('dashboard/template/sidebar') ?>
                <?= $this->include('dashboard/template/topbar') ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
                    </div>
                    <?php if(session()->getFlashdata('status')):?>
                      <div class="alert alert-success"><?= session()->getFlashdata('status') ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </div>
                      <?php endif ; ?>
          <div class="card">
            <div class="card-body table-responsive align-item-center mx-auto mt-1">
            <a href="<?= base_url('/kegiatan/createh') ?>" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm mb-3">
                        <i class="fas fa-download fa-sm text-white-50 mx-1"></i>Add Kegiatan Harian
                      </a>
              <table class="table table-striped table-hover text-center" width="100%" cellspacing="0" id="table1">
                  <thead> 
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kegiatan</th>
                      <th scope="col">Detail Kegiatan</th>
                      <th scope="col">Berkas</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                          <th></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>  
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
<?= $this->include('dashboard/template/footer') ?>
<?= $this->endSection() ?>
