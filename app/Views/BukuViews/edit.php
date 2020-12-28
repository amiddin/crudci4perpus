<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/BukuController/update/' . $buku['id']); ?>" method="post">
      <div class="card-body">
        <h3>Form edit buku</h3>
        <hr>
        <div class="form-group">
          <label for="judul">JUDUL</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="penulis">PENULIS</label>
          <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="tahunterbit">TAHUN TERBIT</label>
          <input type="number" class="form-control" id="tahunterbit" name="tahunterbit" value="<?= $buku['tahunterbit']; ?>" required="">
        </div>
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?= ('/BukuController/index'); ?>" class="btn btn-dark">BATAL</a>
  </div>
  </form>
</div>
</div>
<?= $this->endSection(); ?>