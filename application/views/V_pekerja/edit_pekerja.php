<div class="container-fluid">
  <h4>Edit Pekerja</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_pekerja/home/proses_edit_pekerja'); ?>">
    <input type="hidden" name="id_pekerja" value="<?php echo $list['id_pekerja']; ?>">
    <div class="row mb-1">
      <label for="nama_lengkap" class="col-sm-1 col-form-label">Nama Lengkap</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_lengkap" required="" value="<?php echo $list['nama_lengkap']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="umur" class="col-sm-1 col-form-label">Umur</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="umur" required  value="<?php echo $list['umur']; ?>" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="gender" class="col-sm-1 col-form-label">Gender</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="gender" required  value="<?php echo $list['gender']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="jabatan" required  value="<?php echo $list['jabatan']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="gaji" class="col-sm-1 col-form-label">Gaji</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="gaji" required  value="<?php echo $list['gaji']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="tambah" class="col-sm-1 col-form-label"></label>
      <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
    </form>
</div>
