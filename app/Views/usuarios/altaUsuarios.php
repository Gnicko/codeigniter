<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Registrar un nuevo usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body style="background-color: lightblue">
  <?php if (session('mensaje')) { ?>

    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
        <use xlink:href="#exclamation-triangle-fill" />
      </svg>
      <div>
        <?= session('mensaje'); ?>
      </div>
    </div>
    <?php } ?>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #80aebd;">
        
        <div style="padding-left:50px">
            <a href="<?= base_url(); ?>" class="btn btn-success">
            <i class="bi bi-arrow-left-circle">  Volver  </i>
            </a>
        </div>

        <div class="container"><a class="navbar-brand" style="color: rgb(51, 51, 51);"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul><span class="navbar-text actions"> <a class="login" style="color: rgb(51,51,51);">Funciones de administrador</a><a class="btn btn-light action-button" role="button" href="#" style="background: #c7dbd2;color: rgb(0,0,0);">Salir</a></span>
            </div>
        </div>
    </nav>


    <div>
        <br>
        <h1 style="text-align:center">Registrar un nuevo usuario</h1>
        <br>
    </div>
    <div class="container">
    <br>
      <div class="row">
        <div class="col align-self-center">
          <form method="POST" action="<?= base_url('home/guardar'); ?>">
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="<?= old("nombre") ?>">
            <br>
            <input type="text" name="apellido" placeholder="Apellido" class="form-control" value="<?= old("apellido") ?>">
            <br>
            <input type="text" name="DNI" placeholder="DNI" class="form-control"  value="<?= old("DNI") ?>">
            <br>
            <input type="email" name="email" placeholder="Email" class="form-control" value="<?= old("email") ?>">
            <br>
              <input type="date" name="fecha_de_nacimiento" placeholder="Fecha de nacimiento" class="form-control" value="<?= old("fecha_de_nacimiento") ?>">
              <br>

            <div>
              <h6>Seleccione un rol de la lista:</h6>
              <select name="id_rol" id="eleccionRol">
                <option disabled selected=inicial>--Seleccione un rol--</option>
                <?php foreach ($roles as $rol) : ?>

                  <option value=<?= $rol['id']; ?>> <?= $rol['nombre']; ?>: <?= $rol['descripcion']; ?></option>
                <?php endforeach; ?>

              </select>
              <br><br>
              <button class="btn btn-success" type="submit">Guardar</button>
            </div>
          </form>

        </div>
      </div>

    </div>

  </div>





</body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/js/altaUsuario.js"></script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
  </symbol>
</svg>

</html>