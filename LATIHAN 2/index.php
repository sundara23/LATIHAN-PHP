<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form login</title>
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
       <div class="row ml-auto">
           <div class="col-md-4 mt-5">
           <div class="card">
            <article class="card-body">
                <h4 class="card-title text-center mb-4 mt-1">Silahkan Masuk !</h4>
                <hr>
                <?php

                if(isset($_POST['btnlogin'])) {
                    if ($_POST['username'] == "sundara" && $_POST['password'] == 12345) {
                        header("Location: halamanutama.php");
                    } else {
                        echo "<p class='text-danger text-center'>Login Gagal !!!</p>";
                    }
                }
                ?>
                <form method="post" action="">
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="Username" type="text">
                </div> <!-- input-group.// -->
                </div> <!-- form-group// -->
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="******" type="password" name="password">
                </div> <!-- input-group.// -->
                </div> <!-- form-group// -->
                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="btnlogin"> Login  </button>
                </div> <!-- form-group// -->
               
                </form>
            </article>
            </div> <!-- card.// -->
           </div>
       </div>
   </div>
    
</body>
</html>