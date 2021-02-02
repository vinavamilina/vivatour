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
                    <?= form_open('admin/paket/create'); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">Nama Paket</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Lorem" value="<?= set_value('nama'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori Paket</label>
                            <select class="custom-select" id="kategori" name="kategori">
                                <?php foreach ($kategori as $value) : ?>
                                    <option value="<?= $value->id ?>"><?= $value->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="wisata">Tujuan Wisata</label>
                            <select class="custom-select" id="wisata" name="wisata">
                                <?php foreach ($wisata as $value) : ?>
                                    <option value="<?= $value->id ?>"><?= $value->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="durasi">Lama Tour</label>
                            <input type="number" name="durasi" class="form-control" id="durasi" placeholder="Lorem" value="<?= set_value('durasi'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Paket</label>
                            <input type="number" name="harga" class="form-control" id="harga" placeholder="Lorem" value="<?= set_value('harga'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan Paket</label>
                            <textarea id="keterangan" name="keterangan" class="form-control" rows="5" placeholder="Enter ..."><?= set_value('keterangan'); ?></textarea>
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