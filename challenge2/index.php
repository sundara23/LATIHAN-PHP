<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Property</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body>
    <?php include('blueprint.php'); ?>
    <div class="container">
        <h1 class="text-center mb-5">Ayo Segera Lakukan Pemesanan Anda Hari Ini Juga !!!</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <img class="card-img-top" src="https://rumahdijual.com/attachments/bsd/22530500d1523526690-cluster-keia-lebar-10-rumah-3-lantai-kawasan-baru-img-20180412-wa0028.jpg" alt="Card image cap" height="350px">
                    <div class="card-body">
                        <table width="80%">
                            <tr>
                                <td>Spesifikasi</td>
                                <td>:</td>
                                <td><?= $perumahanPI->getSpesifikasi(); ?></td>
                            </tr>
                            <tr>
                                <td>Daerah</td>
                                <td>:</td>
                                <td><?= $perumahanPI->getDaerah(); ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td><?= $perumahanPI->getProvinsi(); ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>Rp. <?= number_format($perumahanPI->getHarga()); ?></td>
                            </tr>
                            <tr>
                                <td>Potongan</td>
                                <td>:</td>
                                <td><?= $perumahanPI->getPotongan(); ?> %</td>
                            </tr>
                            <tr>
                                <td>Harga + Potongan</td>
                                <td>:</td>
                                <td>Rp. <?= number_format($perumahanPI->getHargaPotongan()); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-muted text-right">
                     <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                <img class="card-img-top" src="https://apollo-singapore.akamaized.net/v1/files/06z250ygutdx2-ID/image;s=966x691;olx-st/_1_.jpg" alt="Card image cap" height="350px">
                    <div class="card-body">
                        <table width="80%">
                            <tr>
                                <td>Spesifikasi</td>
                                <td>:</td>
                                <td><?= $perumahanGS->getSpesifikasi(); ?></td>
                            </tr>
                            <tr>
                                <td>Daerah</td>
                                <td>:</td>
                                <td><?= $perumahanGS->getDaerah(); ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td><?= $perumahanGS->getProvinsi(); ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>Rp. <?= number_format($perumahanGS->getHarga()); ?></td>
                            </tr>
                            <tr>
                                <td>Potongan</td>
                                <td>:</td>
                                <td><?= $perumahanGS->getPotongan(); ?> %</td>
                            </tr>
                            <tr>
                                <td>Harga + Potongan</td>
                                <td>:</td>
                                <td>Rp. <?= number_format($perumahanGS->getHargaPotongan()); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-muted text-right">
                     <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>