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

    <title>Agregar Cliente</title>
  </head>

  <body>
    <nav>
      <?php include 'navs.php'; ?>
    </nav>

    <main>
      <div class="container main-container">
        <div class="table-header row justify-content-center">
          <h1 class="mb-4 text-center">Clientes</h1>
          <h2 class="mb-4 text-center">Agregar Nuevo Cliente</h2>
        </div>

        <!--Start Form-->
        <div class="container form-container">
          <form class="row g-4" action="db_insertar_cliente.php" method="POST">
            <div class="col-12">
              <h4>Datos Personales</h4>
            </div>

            <div class="col-6">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="col-6">
              <label class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" required>
            </div>
            <div class="col-3">
              <label class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="dob" min="<?php date("Y-m-d", strtotime("-115 years")); ?> " max="<?php date('Y-m-d'); ?>" required>
            </div>
            <div class="col-3">
              <label class="form-label">DNI</span></label>
              <input type="number" class="form-control" name="dni" maxlength="8" required>
            </div>

            <div class="col-12">
              <h4>Datos de Contacto</h4>
            </div>
            <div class="col-4">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-1">
              <label class="form-label">Cód. Area</label>
              <input type="number" class="form-control" name="tel_area">
            </div>
            <div class="col-3">
              <label class="form-label">Teléfono Fijo</label>
              <input type="number" class="form-control" name="tel_fijo">
            </div>
            <div class="col-3">
              <label class="form-label">Teléfono Celular</label>
              <input type="number" class="form-control" name="tel_cel">
            </div>

            <div class="col-12">
              <h4>Domicilio de Entrega</h4>
            </div>

            <div class="col-6">
              <label class="form-label">Calle</label>
              <input type="text" class="form-control" name="dom_calle" required>
            </div>
            <div class="col-2">
              <label class="form-label">Altura</label>
              <input type="text" class="form-control" name="dom_altura" required>
            </div>
            <div class="col-1">
              <label class="form-label">Piso</label>
              <input type="text" class="form-control" name="dom_piso" value="-">
            </div>
            <div class="col-1">
              <label class="form-label">Depto</label>
              <input type="text" class="form-control" name="dom_dpto" value="-">
            </div>
            <div class="col-4">
              <label class="form-label">Ciudad</label>
              <input type="text" class="form-control" name="ciudad" required>
            </div>
            <div class="col-3">
              <label class="form-label">Provincia</label>
              <select class="form-select" aria-label="Provincia" name="provincia" required>
                  <option selected>-- Seleccionar --</option>
                  <option>Buenos Aires</option>
                  <option>Capital Federal</option>
                  <option>Catamarca</option>
                  <option>Chaco</option>
                  <option>Chubut</option>
                  <option>Córdoba</option>
                  <option>Corrientes</option>
                  <option>Entre Ríos</option>
                  <option>Formosa</option>
                  <option>Jujuy</option>
                  <option>La Pampa</option>
                  <option>La Rioja</option>
                  <option>Mendoza</option>
                  <option>Misiones</option>
                  <option>Neuquén</option>
                  <option>Río Negro</option>
                  <option>Salta</option>
                  <option>San Juan</option>
                  <option>San Luis</option>
                  <option>Santa Cruz</option>
                  <option>Santa Fe</option>
                  <option>Santiago del Estero</option>
                  <option>Jujuy</option>
                  <option>Tierra del Fuego</option>
                  <option>Tucumán</option>
                </select>
              </div>

            <div class="col-2">
              <label class="form-label">Código Postal</label>
              <input type="text" class="form-control" name="cp" required>
            </div>

            <div class="col-12">
              <h4>Login</h4>
            </div>

            <div class="col-4">
              <label class="form-label">Usuario</label>
              <!--Note to self: used class 'mytooltip' because 'tooltip' alone seems to be reserved (maybe for Bootstrap's dumb js tooltip?) and the icon just won't display) -->
              <span class="mytooltip" data-text="Hasta 10 caracteres" ><i class="fa-solid fa-circle-question"></i></span>
              <input type="text" class="form-control" name="user" maxlength="10" required>
            </div>
            <div class="col-3">
              <label class="form-label">Contraseña</label>
              <span class="mytooltip" data-text="Entre 8 y 15 caracteres" ><i class="fa-solid fa-circle-question"></i></span>
              <input type="password" class="form-control" name="pw" minlength="8" maxlength="15" required>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary btn-lg small-green-button" type="submit" value="submit" name="submit">Guardar Registro</button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-secondary btn-lg small-green-button" onclick="location.reload()">Borrar</button>
            </div>
          </form>

        </div>
        <!--End Form-->
      </div>
    </main>

    <footer>
      <?php include "footer.php" ?>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
