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
                    <h3 class="card-title"><?= $heading; ?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="<?= base_url('admin/paket/') ?>" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama">Nama Paket</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Lorem" value="<?= $paket->nama; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="paket">Kategori Paket</label>
                                <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Lorem" value="<?= $paket->kategori; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="paket">Tujuan Wisata</label>
                                <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Lorem" value="<?= $paket->wisata; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="paket">Lama Tour</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="number" name="hari" class="form-control" id="hari" placeholder="Lorem" value="<?= $paket->hari ?>" disabled>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Hari</span>
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="number" name="malam" class="form-control" id="malam" placeholder="Lorem" value="<?= $paket->malam ?>" disabled>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Malam</span>
                                            </div>
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Paket</label>
                                <textarea name="kegiatan" name="kegitan" class="form-control" rows="5" placeholder="Enter ..." disabled><?= $paket->keterangan; ?></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Back</button>
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