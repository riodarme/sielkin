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
                        <a href="<?= base_url('kegiatan/harian') ?>" class="btn btn-success btn-sm float-end"><i class="fas fa-arrow-circle-left mr-1"></i>Kembali</a>
                        </div>
                        <hr>
                           <form action="<?= base_url('kegiatan/updatekh/'.$harian->id_harian) ?>" method="POST">
                           <?= csrf_field(); ?>
                           <input type="hidden" name="_method" value="PATCH">
                           <div class="form-group row">
                           <div class="col-sm-6 mb-sm-0 input-group">
                           <select name="id_kegiatan" id="id_kegiatan" class="form-control">
                              <option value="" hidden></option>   
                              <?php foreach($kegiatan as $key => $value) : ?>
                                 <option value="<?= $value->id_kegiatan ?>" <?= $harian->id_kegiatan == $value->id_kegiatan ? 'selected' : null?>>
                                 <?= $value->nm_kegiatan; ?>
                              </option>
                              <?php endforeach ; ?>
                           </select>
                           </div>
                           <div class="col-sm-6">
                           <input type="number"  name="jm_berkas" value="<?= $harian->jm_berkas ?>" class="form-control" placeholder="Jumlah">
                           </div>
                           </div>
                              <div class="form-floating">
                                 <input class="form-control" name="lain" value="<?= $harian->lain ?>" placeholder="Detail Kegiatan" id="floatingTextarea2" style="height: 100px"></input>
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