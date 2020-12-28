<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/BukuController/store'); ?>" method="post">
      <div class="card-body">
        <h3>FORM TAMBAH DATA</h3>
        <hr>
        <div class="form-group">
          <label for="judul">JUDUL</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" required="">
        </div>
        <div class="form-group">
          <label for="penulis">PENULIS</label>
          <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan penulis" required="">
        </div>
        <div class="form-group">
          <label for="tahunterbit">TAHUN TERBIT</label>
          <input type="number" class="form-control" id="tahunterbit" name="tahunterbit" placeholder="Masukkan tahun terbit" required="">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="<?= ('/BukuController/index'); ?>" class="btn btn-dark">Batal</a>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>