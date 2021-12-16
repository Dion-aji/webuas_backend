<div class="container-fluid">
  <h4>Edit Tugas</h4>
  <hr>
  <br>
  <form method="post" action="<?php echo base_url('C_first/home/proses_edit_tugas'); ?>">
    <input type="hidden" name="id_tugas" value="<?php echo $barang['id_tugas']; ?>">
    <div class="row mb-1">
      <label for="nama_tugas" class="col-sm-1 col-form-label">Nama Tugas</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_tugas" required="" value="<?php echo $barang['nama_tugas']; ?>">
      </div>
    </div>
    <div class="row mb-1">
      <label for="sifat" class="col-sm-1 col-form-label">Sifat</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="sifat" required  value="<?php echo $barang['sifat']; ?>" >
      </div>
    </div>
    <div class="row mb-1">
      <label for="deskripsi" class="col-sm-1 col-form-label">Deskripsi</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="deskripsi" required  value="<?php echo $barang['deskripsi']; ?>">
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
