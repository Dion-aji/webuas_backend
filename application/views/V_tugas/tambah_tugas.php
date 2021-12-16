<div class="container-fluid">
  <h4>Tambah Tugas</h4>
  <hr>
  <br>
  <form method="post"enctype="multipart/form-data" action="<?php echo base_url('C_first/home/proses_tambah_tugas'); ?>">
    <div class="row mb-1">
      <label for="nama_tugas" class="col-sm-1 col-form-label">nama_tugas</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_tugas" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="sifat" class="col-sm-1 col-form-label">Sifat</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="sifat"  >
      </div>
    </div>
    <div class="row mb-1">
      <label for="deskripsi" class="col-sm-1 col-form-label">Deskripsi</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="deskripsi" >
      </div>
    </div>



    <div class="row mb-1">
      <label for="tambah" class="col-sm-1 col-form-label"></label>
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="reset" class="btn btn-danger" >Reset</button>
      </div>
    </div>
    </form>
</div>
