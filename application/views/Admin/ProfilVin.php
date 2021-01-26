<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Profil</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Profil</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="card card-primary col-md-12">
        <div class="card-header">
          <h3 class="card-title">Ubah Profil</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
          <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pengguna</label>
              <input type="text" class="form-control" id="#" placeholder="Masukkan Nama" disabled>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="#" placeholder="Isi nama anda">
            </div>

            <div class="form-group">
              <label>Jenis Kelamin</label>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                <label for="customRadio1" class="custom-control-label">Pria</label>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                <label for="customRadio2" class="custom-control-label">Wanita</label>
              </div>
            </div>

            <div class="form-group">
              <label>Tempat Lahir</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                </div>
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" placeholder="Tulis alamat lengkap anda"></textarea>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>


    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>