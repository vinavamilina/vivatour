<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row col-md-2">
            <div class="card">
            </div>
        </div>
        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <h3 class="card-title">Tambah Paket Pariwisata</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="<?= base_url('admin/updatedatawisata/' . $data->Id_paket_wisata) ?>" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="no">Id Paket Wisata</label>
                                <input type="text" name="no" class="form-control" id="no" placeholder="Lorem" value="<?= $data->Id_paket_wisata; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Tempat Wisata</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Lorem" value="<?= $data->Nama_paket; ?>">
                            </div>
                            <div class="form-group">
                                <label for="paket">Nama Paket</label>
                                <input type="text" name="paket" class="form-control" id="paket" placeholder="Lorem" value="<?= $data->Nama_tempat_wisata; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kegiatan Wisata</label>
                                <textarea name="kegiatan" name="kegitan" class="form-control" rows="3" placeholder="Enter ..."><?= $data->Kegiatan_wisata; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Lama Tour</label>
                                <textarea name="tour" name="tour" class="form-control" rows="3" placeholder="Enter ..."><?= $data->lama_tour; ?></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
    </div>
    <!-- /.container-fluid -->
</section>
</div>