<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Laporan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <center>
                  <h3 class="my-3">LAPORAN BUKU PERPUS</h3><br>
                </center>
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
              <br>
              <br><br><br><br>
              <P>TTD</P>
              <u>PEGAWAI PERPUS</u>
              <br>
              <p>Dicetak pada <?= date('d M Y'); ?></p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
  </div>
  <script>
    window.print();
  </script>

</body>

</html>