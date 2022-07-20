<?= $this->extend('dashboard/template/header'); ?>
<?= $this->section('header') ?>
        <?= $this->include('dashboard/template/sidebar') ?>
                <?= $this->include('dashboard/template/topbar') ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-bold font-weight-bold text-warning text-uppercase my-1">
                                                Kegiatan Tahunan</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-laptop-house fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-bold font-weight-bold text-primary text-uppercase my-1">
                                        Kegiatan bulanan </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fab fa-accusoft fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-bold font-weight-bold text-warning text-uppercase my-1">
                                                Kegiatan harian</div> 
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-bold font-weight-bold text-primary text-uppercase my-1">
                                                Produktifitas</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-bold font-weight-bold text-success text-uppercase my-1">
                                                Laporan Tahunan</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-bold font-weight-bold text-success text-uppercase my-1">
                                                Laporan Kegiatan</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
<?= $this->include('dashboard/template/footer') ?>
<?= $this->endSection() ?>