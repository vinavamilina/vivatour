<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row col-md-2">
            <div class="card">
                <i class="fa fa-plus"></i> &nbsp;Tambah Paket
            </div>
        </div>

        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <h3 class="card-title">Paket Pariwisata</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="idPaketwisata" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="2%">No.</th>
                                <th width="2%">Id Paket</th>
                                <th>Nama Paket</th>
                                <th>Nama Tempat Wisata</th>
                                <th>Kegiatan Wisata</th>
                                <th>Lama Tour/harga/org</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($Wisata as $Tabelpaketwisata) :
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $Tabelpaketwisata->Id_paket_wisata ?></td>
                                    <td><?= $Tabelpaketwisata->Nama_paket ?></td>
                                    <td><?= $Tabelpaketwisata->Nama_paket ?></td>
                                    <td>
                                        <a href="Tabelpaketwisata.html">
                                            <button type="button" class="btn btn-block btn-success btn-xs">
                                                Detail
                                            </button>
                                        </a>

                                        <a href="#">
                                            <button type="button" class="btn btn-block btn-primary btn-xs">
                                                Ubah
                                            </button>
                                        </a>

                                        <a href="<?= base_url('admin/hapusPaket/' . $Tabelpaketwisata->$idPaketwisata) ?>">
                                            <button type="button" class="btn btn-block btn-danger btn-xs">
                                                Hapus
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <?php
                            $x = 1;
                            foreach ($mainstock as $ambilstok) {
                            ?>

                                <tr>
                                    <td><?= $ambilstok->id_product ?></td>
                                    <td><?= $ambilstok->nama ?></td>
                                    <td><?= $ambilstok->harga ?></td>
                                    <td>
                                        <a href="detailvicky.html">
                                            <button type="button" class="btn btn-block btn-success btn-xs">
                                                Detail
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button type="button" class="btn btn-block btn-primary btn-xs">
                                                Ubah
                                            </button>


                                        </a>
                                        <a href="<?= base_url('Admin/delete/' . '$idProuct->id_product') ?>">
                                            <button type="button" class="btn btn-block btn-danger btn-xs">
                                                Hapus
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                            <?php
                                $x++;
                            }
                            ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Product</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
    </div>
    <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
</section>
</div>