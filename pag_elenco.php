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

    <title>Elenco de Clientes</title>
  </head>

  <body>
    <nav>
      <?php include 'navs.php'; ?>
    </nav>

    <main>
      <div class="container main-container">
        <div class="table-header row justify-content-center">
          <h1 class="mb-4 text-center">Clientes</h1>
          <h2 class="mb-4 text-center">Elenco al día <?php echo date("d/m/y"); ?></h2>
        </div>

        <!--Start Table-->
        <div class="table-container">
          <table class="table align-top">
            <thead class="table-header">
              <tr>
                <th scope="col" style="width: 50px">&nbsp;</th>
                <th scope="col">Cliente</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfonos</th>
                <th scope="col">Dirección</th>
                <th scope="col" style="width: 30px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "db_consulta_clientes.php";
              while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                <tr class="table-row">
                  <td class="border-bottom-0">
                    <a href="db_eliminar_clientes.php?id=<?php echo $fila['id_cliente']; ?>" onclick="return confirm('¿Está seguro que desea eliminar?')"><i class="fas fa-times"></i></a>
                  </td>
                  <td class="border-bottom-0">
                    <span class="table-name"><?php echo $fila['nombre']." ".$fila['apellido']; ?></span><br>
                    <span class="table-description"><?php echo $fila['user']; ?></span>
                  </td>
                  <td class="border-bottom-0"><?php echo $fila['email']; ?></td>
                  <td class="border-bottom-0" ><?php echo "(".$fila['tel_area'].") ".$fila['tel_fijo'] ?><br><?php echo "(".$fila['tel_area'].") ".$fila['tel_cel']; ?></td>
                  <td class="border-bottom-0"><?php echo $fila['dom_calle']." ".$fila['dom_altura'].". Piso: ".$fila['dom_piso']." Dpto: ".$fila['dom_dpto']; ?><br>
                    <span class="table-description"><?php echo $fila['ciudad'].", ".$fila['provincia']; ?></span>
                  </td>
                  <td class="border-bottom-0">
                    <a href="pag_vcliente.php?id=<?php echo $fila['id_cliente']; ?>" target="_blank"><i class="fas fa-expand-alt"></i></a>
                  </td>
                </tr><?php
              } ?>
            </tbody>
          </table>
        </div>
        <!--End Table-->
      </div>
    </main>

    <footer>
      <?php include "footer.php" ?>
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
