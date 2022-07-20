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
            <div class="card my-2">
            <div class="card-body table-responsive align-item-center mx-auto mt-1">
            <a href="<?= base_url('/produktifitas/create') ?>" class="d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3">
                        <i class="fas fa-download fa-sm text-white-50 mx-1"></i>Add Produktifitas
                      </a>
              <table class="table table-striped table-hover text-center" width="100%" cellspacing="0" id="table1">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kegiatan</th>
                      <th scope="col">Detail Kegiatan</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Berkas</th>
                      <th scope="col">Status</th>
                      <?php if(session()->get('role_id') == 2) : ?>
                      <th scope="col">Valid</th>
                      <?php endif ; ?>
                      <?php if(session()->get('role_id') == 1) : ?>
                      <th scope="col">Action</th>
                      <?php endif ; ?>
                    </tr>
                  </thead>
                    <tbody>
                    <?php foreach ($produktifitas as $key => $value) : ?>
                        <tr>
                          <th><?= $key + 1; ?></th>
                          <th><?= $value->nama ?></th>
                          <td><?= $value->nm_kegiatan  ?></td>
                          <td><?= $value->kegiatan_lain  ?></td>
                          <td><?= $value->tgl_produktifitas ?></td>
                          <td><?= $value->jm_produktifitas ?></td>
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
                            <td><a href="<?= base_url('produktifitas/update/'.$value->id_produktiftas) ?>"  class="btn btn-success btn-sm"><i class="fas fa-check"></i></a></td>
                          <?php endif ; ?>
                          <?php if(session()->get('role_id') == 1) : ?>
                          <td>
                          <a href="<?= base_url('produktifitas/edit/'.$value->id_produktiftas) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= base_url('produktifitas/delete/'.$value->id_produktiftas) ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $value->nm_kegiatan; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                          </td>
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