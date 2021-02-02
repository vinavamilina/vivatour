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

                <?= validation_errors(); ?>

                <!-- /.card-header -->
                <div class="card-body">
                    <?= form_open('admin/paket/edit/' . $paket->id); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">Nama Paket</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Lorem" value="<?= $paket->nama; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori Paket</label>
                            <select class="custom-select" id="kategori" name="kategori">
                                <?php foreach ($kategori as $value) : ?>
                                    <option value="<?= $value->id ?>" <?= ($paket->paket_kategori_id == $value->id) ? 'selected' : '' ?>><?= $value->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="wisata">Tujuan Wisata</label>
                            <select class="custom-select" id="wisata" name="wisata">
                                <?php foreach ($wisata as $value) : ?>
                                    <option value="<?= $value->id ?>" <?= ($paket->paket_wisata_id == $value->id) ? 'selected' : '' ?>><?= $value->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="paket">Lama Tour</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="number" name="hari" class="form-control" id="hari" placeholder="Lorem" value="<?= $paket->hari; ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Hari</span>
                                        </div>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="number" name="malam" class="form-control" id="malam" placeholder="Lorem" value="<?= $paket->malam; ?>">
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
                            <label for="harga">Harga Paket</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp. </span>
                                </div>
                                <input type="number" name="harga" class="form-control" id="harga" placeholder="Lorem" value="<?= $paket->harga; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan Paket</label>
                            <textarea id="keterangan" name="keterangan" class="form-control" rows="5" placeholder="Enter ..."><?= $paket->keterangan; ?></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="<?= base_url('admin/paket/') ?>" type="submit" name="submit" class="btn btn-primary float-left">Back</a>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
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