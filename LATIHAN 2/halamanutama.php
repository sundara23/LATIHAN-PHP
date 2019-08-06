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
            <form action="halaman1.php" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukan Nama Anda..." name="nama">
            </div>
            <div class="form-group">
                <label >Alamat</label>
                <textarea class="form-control" name="alamat" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label >Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jk" id="lk" value="Laki - Laki">Laki - Laki 
                </div>
                <div class="form-check"> 
                    <input type="radio" class="form-check-input" name="jk" id="p" value="Perempuan">Perempuan
                </div>
            </div>
            <div class="form-group">
                <label >Hobi</label>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" name="hobi[]" value="Traveling" >
                <label class="form-check-label">Traveling</label>
                <br>
                <input type="checkbox" class="form-check-input" name="hobi[]" value="Game Online" >
                <label class="form-check-label">Game Online</label>
                <br>
                <input type="checkbox" class="form-check-input" name="hobi[]" value="Music" >
                <label class="form-check-label">Music</label>
                <br>
                <input type="checkbox" class="form-check-input" name="hobi[]" value="Begadang" >
                <label class="form-check-label">Begadang</label>
                <br>
                <input type="checkbox" class="form-check-input" name="hobi[]" value="Ngopi Bareng" >
                <label class="form-check-label">Ngopi Bareng</label>
                <br>
                <input type="checkbox" class="form-check-input" name="hobi[]" value="Ngebolang" >
                <label class="form-check-label">Ngebolang</label>
            </div>
            </div>
            
            <div class="form-group">
                <label>Cita - Cita</label>
                <input type="text" class="form-control" placeholder="Masukan Impian Anda..." name="cita">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
  </body>
</html>
