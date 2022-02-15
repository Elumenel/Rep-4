<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/24e4d2a0d1.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="backstyles.css">

    <title>Agregar Novedad</title>
  </head>

  <body>
    <nav>
      <!-- NO nav. Page to display within page! -->
    </nav>

    <main>
      <div class="container">
        <!--Start Form-->
        <div class="container form-container" id="form-novedad">
          <form class="row g-4" action="f_guardar_novedades.php" method="POST">
            <div class="col-6">
              <label class="form-label">Nombre del Cliente</label>
              <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="col-6">
              <label class="form-label">Email de contacto</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label">Novedad</label>
              <textarea class="form-control" name="novedad" rows="4" maxlength="100"></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary btn-lg small-green-button" type="submit" value="submit" name="submit">Enviar</button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-secondary btn-lg small-green-button" onclick="location.reload()">Cancelar</button>
            </div>
          </form>
        </div>
        <!--End Form-->
      </div>
      
      <footer>
        <!-- NO footer. Page to display within page! -->
      </footer>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9Ah60zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
