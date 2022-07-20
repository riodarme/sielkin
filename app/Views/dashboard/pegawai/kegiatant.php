<?= $this->extend('dashboard/template/header'); ?>
<?= $this->section('header') ?>
        <?= $this->include('dashboard/template/sidebar') ?>
                <?= $this->include('dashboard/template/topbar') ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
                    </div>
          <div class="card">
            <div class="card-body table-responsive align-item-center mx-auto mt-1">
            <a href="<?= base_url('/kegiatan/createt') ?>" class="d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3">
                        <i class="fas fa-download fa-sm text-white-50 mx-1"></i>Add Target
                      </a>
                      <table class="table table-striped table-hover text-center" width="100%" cellspacing="0" id="table1">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Rencana Kerja</th>
                      <th scope="col">Mulai</th>
                      <th scope="col">Pengerjaan</th>
                      <th scope="col">Target</th>
                      <th scope="col">Index Kegiatan</th>
                      <?php
                      if(session()->get('role_id') == 1) : ?>
                      <th>Action</th>
                      <?php endif ; ?>
                    </tr>
                  </thead>
                    <tbody>
                    <?php
                    $hari = 0; 
                    foreach ($tahun as $key => $value) : ?>
                        <tr>
                          <th><?= $key + 1; ?></th>
                          <td><?= $value->nama ?></td>
                          <td><?= $value->nm_kegiatan ?></td>
                          <td><?= $value->mulai ?></td>
                          <td><?= $hari; ?></td>
                          <td><?= $value->target ?></td>
                          <td>Sangat Baik</td>
                        <?php if(session()->get('role_id') == 1) : ?>
                         <th>
                         <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                         <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                         </th>
                        <?php endif ; ?>
                        </tr>
                    </tbody>
                    <?php endforeach ; ?>
                </table>
              </div>
            </div>
          </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
<?= $this->include('dashboard/template/footer') ?>
<?= $this->endSection() ?>