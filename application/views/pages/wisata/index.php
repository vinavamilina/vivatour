<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row col-md-2">
            <div class="card">
            </div>
        </div>
        <div class="row col-md-2">
            <div class="card">
                <a href="<?= base_url('admin/adddatawisata') ?>">
                    <i class="fa fa-plus"></i> &nbsp;Tambah <?= $base; ?>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <h3 class="card-title"><?= $heading; ?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="idPaketwisata" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="2%">No.</th>
                                <th>Nama</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($wisata as $data) :
                            ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detaildatawisata/' . $data->id) ?>">
                                            <button type="button" class="btn btn-block btn-success btn-xs">
                                                Detail
                                            </button>
                                        </a>

                                        <a href="<?= base_url('admin/editdatawisata/' . $data->id) ?>">
                                            <button type="button" class="btn btn-block btn-primary btn-xs">
                                                Ubah
                                            </button>
                                        </a>

                                        <a href="<?= base_url('admin/hapusPaket/' . $data->id) ?>">
                                            <button type="button" class="btn btn-block btn-danger btn-xs">
                                                Hapus
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th width="2%">No.</th>
                                <th>Nama</th>
                                <th>Aksi</th>
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