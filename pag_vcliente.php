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

    <title>Registro de Cliente</title>
  </head>

  <body>
    <nav>
      <?php include 'navs.php'; ?>
    </nav>

    <main>
      <div class="container main-container">
        <div class="table-header row justify-content-center">
          <?php include 'db_consulta_cliente_exp.php';
          $fila = mysqli_fetch_assoc($resultado) ?>
          <h1 class="mb-4 text-center">Clientes</h1>
          <h2 class="mb-4 text-center">Cliente #<?php echo $fila['id_cliente']; ?>: <?php echo $fila['nombre']." ".$fila['apellido']; ?></h2>
        </div>

        <!--Start Form-->
        <div class="container" id="nproduct-container">
          <form class="row g-4 readonly-form">
            <div class="col-12">
              <h4>Datos Personales</h4>
            </div>

            <div class="col-6">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre']; ?>" readonly>
            </div>
            <div class="col-6">
              <label class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" value="<?php echo $fila['apellido']; ?>" readonly>
            </div>
            <div class="col-3">
              <label class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="dob" value="<?php echo $fila['dob']; ?>" readonly>
            </div>
            <div class="col-3">
              <label class="form-label">DNI</span></label>
              <input type="number" class="form-control" name="dni" value="<?php echo $fila['dni']; ?>" readonly>
            </div>

            <div class="col-12">
              <h4>Datos de Contacto</h4>
            </div>
            <div class="col-4">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $fila['email']; ?>" readonly>
            </div>
            <div class="col-1">
              <label class="form-label">Cód. Area</label>
              <input type="number" class="form-control" name="tel_area" value="<?php echo $fila['tel_area']; ?>" readonly>
            </div>
            <div class="col-3">
              <label class="form-label">Teléfono Fijo</label>
              <input type="number" class="form-control" name="tel_fijo" value="<?php echo $fila['tel_fijo']; ?>" readonly>
            </div>
            <div class="col-3">
              <label class="form-label">Teléfono Celular</label>
              <input type="number" class="form-control" name="tel_cel" value="<?php echo $fila['tel_cel']; ?>" readonly>
            </div>

            <div class="col-12">
              <h4>Domicilio de Entrega</h4>
            </div>

            <div class="col-6">
              <label class="form-label">Calle</label>
              <input type="text" class="form-control" name="dom_calle" value="<?php echo $fila['dom_calle']; ?>" readonly>
            </div>
            <div class="col-2">
              <label class="form-label">Altura</label>
              <input type="text" class="form-control" name="dom_altura" value="<?php echo $fila['dom_altura']; ?>" readonly>
            </div>
            <div class="col-1">
              <label class="form-label">Piso</label>
              <input type="text" class="form-control" name="dom_piso" value="<?php echo $fila['dom_piso']; ?>"  readonly>
            </div>
            <div class="col-1">
              <label class="form-label">Depto</label>
              <input type="text" class="form-control" name="dom_dpto" value="<?php echo $fila['dom_dpto']; ?>"  readonly>
            </div>
            <div class="col-4">
              <label class="form-label">Ciudad</label>
              <input type="text" class="form-control" name="ciudad" value="<?php echo $fila['ciudad']; ?>" readonly>
            </div>
            <div class="col-3">
              <label class="form-label">Provincia</label>
                <input type="text" class="form-control" name="provincia" value="<?php echo $fila['provincia']; ?>"  readonly>
              </div>

            <div class="col-2">
              <label class="form-label">Código Postal</label>
              <input type="text" class="form-control" name="cp" value="<?php echo $fila['cp']; ?>" readonly>
            </div>

            <div class="col-12">
              <h4>Login</h4>
            </div>

            <div class="col-4">
              <label class="form-label">Usuario</label>
              <input type="text" class="form-control" name="user" value="<?php echo $fila['user']; ?>" readonly>
            </div>
            <div class="col-3">
              <label class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="pw" value="<?php echo $fila['pw']; ?>" readonly>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
              <!--These are LINKS, but the Bootstrap button classes style them as BUTTONS-->
              <a class="btn btn-primary btn-lg small-green-button" href="pag_ecliente.php?id=<?php echo $fila['id_cliente']; ?>">Editar Registro</i></a>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-secondary btn-lg small-green-button" href="db_eliminar_clientes.php?id=<?php echo $fila['id_cliente']; ?>" onclick="return confirm('¿Está seguro que desea eliminar?')">Borrar Registro</i></a>
            </div>
          </form>
        </div>
        <!--End Form-->
    </main>

    <footer>
      <?php include 'footer.php' ?>
    </footer>

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
