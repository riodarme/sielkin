<?= $this->extend('dashboard/template/header'); ?>
<?= $this->section('header') ?>
        <?= $this->include('dashboard/template/sidebar') ?>
                <?= $this->include('dashboard/template/topbar') ?>
                <div class="container text-uppercase">
                    <div class="d-sm-flex align-items-center justify-content-between mb-3">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul;  ?></h1>
                    </div>
                    </div>
                    <div class="card align-item-center mb-3">
                      <div class="card-body">
                    <div class="row table-responsive align-item-center mx-auto mt-3">
                    <!-- Content Row -->
                    <table class="table table-striped table-hover text-center" width="100%" cellspacing="0" id="table1">
                    <thead>
                    <tr class="text-center">
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Nik</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                      <tbody>
                    <?php foreach ($user as $key => $value) : ?>
                      <tr>
                       <th><?= $key + 1 ?></th>
                       <th><?= $value->nama ?></th>
                       <th><?= $value->nik ?></th>
                       <th><?= $value->email ?></th> 
                       <th>
                         <a href="" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                         <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                      </th>
                      </tr>
                    <?php endforeach ; ?>
                        </tbody>
                       </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?= $this->include('dashboard/template/footer') ?>
<?= $this->endSection() ?>