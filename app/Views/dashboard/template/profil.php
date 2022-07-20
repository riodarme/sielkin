<?= $this->extend('dashboard/template/header'); ?>
<?= $this->section('header') ?>
        <?= $this->include('dashboard/template/sidebar') ?>
                <?= $this->include('dashboard/template/topbar') ?>
                <div class="container text-uppercase">
                    <div class="d-sm-flex align-items-center justify-content-between mb-3">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul;  ?></h1>
                    </div>
                </div>
               <div class="container-fluid">
                    <div class="card shadow mb-3" style="max-width: 100%;">
                     <div class="row no-gutters">
                      <div class="col-md-4">
                      <img class="img-thumbnail" src="<?= base_url(); ?>/img/<?= userLogin()->image ?>" style="width: 100%; height:100%;">
                      </div>
                     <div class="col-md-8">
                        <div class="card-body">
                         <form class="my-2">
                         <form action="<?= base_url('dashboard/update/') ?>" method="POST">
                           <?= csrf_field(); ?>
                           <input type="hidden" name="_method" value="PATCH">
                           <div class="row">
                              <div class="col">
                              <label class="form-label">Nama</label>
                                 <input type="text" value="<?= userLogin()->nama ?>" class="form-control" readonly>
                              </div>
                              <div class="col">
                              <label class="form-label">Email</label>
                                 <input type="text" value="<?= userLogin()->email ?>" class="form-control" readonly>
                              </div>
                           </div>
                           <div class="row mt-2">
                              <div class="col">
                              <label class="form-label">NIK</label>
                                 <input type="text" value="<?= userLogin()->nik ?>" class="form-control" readonly>
                              </div>
                              <div class="col">
                              <label class="form-label">No Hp</label>
                                 <input type="text" value="<?= userLogin()->telp ?>" class="form-control">
                              </div>
                           </div>
                           <div class="row mt-2">
                           <div class="col-6">
                           <label for="floatingTextarea2">ALamat</label>
                           <div class="form-floating">
                           <input class="form-control" value="<?= userLogin()->alamat ?>" name="alamat" style="height: 100px"></input>
                           </div>
                           </div>
                           <div class="col-6 mt-4">
                           <div class="custom-file mt-2">
                              <input class="custom-file-input" id="image" name="image" type="file"  >
                              <label class="custom-file-label" for="customFile">Update Foto Profil</label>
                           </div>
                           </div>
                           </div>
                           <button type="submit" class="btn btn-primary mt-2">Update</button>
                           </form>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.container-fluid -->
               </div>
               <!-- End of Main Content -->
            </div>
            <?= $this->include('dashboard/template/footer') ?>
<?= $this->endSection() ?>