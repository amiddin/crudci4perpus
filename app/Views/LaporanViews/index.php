<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DATA BUKU</h3><br>
            <a href="<?= ('/LaporanController/print'); ?>" class="btn btn-success">PRINT<i class="fas fa-print"></i></a>
            <br>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Tahun terbit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $i = 1; ?>
                  <?php foreach ($buku as $id => $data) : ?>
                    <td><?= $i; ?></td>
                    <td><?= $data['judul']; ?></td>
                    <td><?= $data['penulis']; ?></td>
                    <td><?= $data['tahunterbit']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>