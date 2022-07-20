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
            <a href="<?= base_url('kritik/create') ?>" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3">
                        <i class="fas fa-download fa-sm text-white-50 mx-1"></i>Add Kritik
                      </a>
              <table class="table table-striped table-hover text-center" width="100%" cellspacing="0" id="table1">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kritik</th>
                      <th scope="col">Tanggal</th>
                      <?php if(session()->get('role_id') == 1) : ?>
                        <th scope="col">Action</th>
                      <?php endif ; ?>
                    </tr>
                  </thead>
                    <tbody>
                      <?php foreach ($kritik as $key => $value) : ?>
                        <tr>
                          <th><?= $key + 1; ?></th>
                          <th><?= $value->nama ?></th>
                          <th><?= $value->isi; ?></th>
                          <th><?= $value->tgl; ?></th>
                          <th>
                          <?php if(session()->get('role_id') == 1) : ?>
                          <a href="<?= base_url('kritik/edit/'.$value->id_kritik) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= base_url('kritik/delete/'.$value->id_kritik) ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $value->isi; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                          <?php endif ; ?>
                          </th>
                        </tr>
                      <?php endforeach ; ?>
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