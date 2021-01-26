<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Kata Sandi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Kata Sandi</li>
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
          <h3 class="card-title">Ubah Kata Sandi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
          <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">Kata sandi lama</label>
              <input type="password" class="form-control" id="kataSandiLama" placeholder="Kata sandi lama">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kata sandi baru</label>
              <input type="password" class="form-control" id="kataSandiBaru" placeholder="Kata sandi baru">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Ulangi kata sandi baru</label>
              <input type="password" class="form-control" id="ulangiKataSandi" placeholder="Ulangi kata sandi baru">
            </div>

            <div class="form-group">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input onclick="myFunction()" type="checkbox" class="custom-control-input" id="customSwitch3">
                <label class="custom-control-label" for="customSwitch3">Tampilkan sandi</label>
              </div>
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah Kata Sandi</button>
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