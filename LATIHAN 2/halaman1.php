<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mt-5">
                <h1>Isi Identitas Anda !</h1>
            <form action="index.php">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <h4><?php echo $_POST['nama']; ?></h4>
        </div>
        <div class="form-group">
            <label >Alamat</label>
            <pre><?php echo $_POST['alamat']; ?></pre>
        </div>
        <div class="form-group">
            <label >Jenis Kelamin</label>
            <h4> <?php echo $_POST['jk']; ?></h4>
        </div>
        <div class="form-group">
            <label >Hobi</label>
            <h6>
                <?php foreach ($_POST['hobi'] as $hobi) {
                    echo " - ".$hobi."<br>";
                } ?>
            </h6>
        </div>
        
        <div class="form-group">
            <label>Cita - Cita</label>
            <h4> <?php echo $_POST['cita']; ?></h4>
        </div>
        <button type="submit" class="btn btn-primary">Logout</button>
        </form>
            </div>
        </div>
    </div>
  </body>
</html>
