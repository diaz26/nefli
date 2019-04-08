<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Netflix</title>
</head>
<body>
  <center><h1>Registrarse</h1></center>
  <div class="content">
    <center><img src="<?= base_url(); ?>images/net.jfif" width="700" height="200"></center>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <?php
          foreach ($pelis as $juli) {

            ?>
            <div class="col-lg-6">
              <h4><?php echo $juli->nombre; ?></h4>
              <center><img src="<?= base_url().$juli->img; ?>" width="100%"> </center>
            </div>
            <?php
          }
          ?>

        </div>
      </div>
      <div class="col-lg-6">
        <h1 style="text-align:center"><b>Registrate</b> </h1>
        <form action="<?= base_url(); ?>index.php/registrar/add" method="post">
          <div class="form-group">
            <label for=""><b>Nombre</b> </label>
            <input type="text" name="name" required>
          </div>
          <div class="form-group">
            <label for=""><b>User</b> </label>
            <input type="text" name="user" required>
          </div>
          <div class="form-group">
            <label for=""><b>Pass</b> </label>
            <input type="password" name="pass" required>
          </div>
          <button type="submit" class="btn btn-primary" name="button">Registrar</button>

        </form>
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
