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
            <a href="<?= base_url('laporan/index') ?>" class="d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3">
                        <i class="fas fa-file-excel fa-sm text-dark-50 mx-1"></i>Laporan Excel 
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
                      <?php if(session()->get('role_id') == 2) : ?>
                      <th scope="col">Valid</th>
                      <?php endif ; ?>
                      <?php if(session()->get('role_id') == 1) : ?>
                      <th>Action</th>
                      <?php endif ; ?>
                    </tr>
                  </thead>
                    <tbody>
                    <?php 
                    foreach ($harian as $key => $value) : ?>
                        <tr>
                          <th><?= $key + 1; ?></th>
                          <td><?= $value->nama ?></td>
                          <td><?= $value->nm_kegiatan?></td>
                          <td><?= $value->lain?></td>
                          <td><?= $value->jm_berkas?></td>
                          <td><?= $value->tgl_harian?></td>
                          <td>  
                          <?php
                              if ($value->status == 0) {
                                echo "Belum";
                              } else {
                                echo "Valid";
                              }
                          ?>
                          </td>
                          <?php if(session()->get('role_id') == 2) : ?>
                          <td><a href="<?= base_url('kegiatan/updatek/'.$value->id_harian) ?>"  class="btn btn-success btn-sm"><i class="fas fa-check"></i></a></td>
                          <?php endif ; ?>
                        <?php if(session()->get('role_id') == 1) : ?>
                        <th>
                        <a href="<?= base_url('kegiatan/edith/'.$value->id_harian) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <a href="<?= base_url('kegiatan/deletek/'.$value->id_harian) ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $value->jm_berkas; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                         </th>
                        <?php endif ; ?>
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