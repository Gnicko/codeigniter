<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Listado de usuarios existentes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/asserts/DataTable/DataTables-1.11.3/css/dataTables.bootstrap4.css')?>">
    <link rel="stylesheet" href="<?= base_url('public/asserts/DataTable/datatables.css')?>">
    <link rel="stylesheet" href="<?= base_url('public/asserts/DataTables/datatables.css/datatables.min.css')?>">




    <style>
        .navigation-clean-button {
            background: #fff;
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #333;
            border-radius: 0;
            box-shadow: none;
            border: none;
            margin-bottom: 0;
        }

        @media (min-width: 768px) {
            .navigation-clean-button {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .navigation-clean-button .navbar-brand {
            font-weight: bold;
            color: inherit;
        }

        .navigation-clean-button .navbar-brand:hover {
            color: #222;
        }

        .navigation-clean-button .navbar-toggler {
            border-color: #ddd;
        }

        .navigation-clean-button .navbar-toggler:hover, .navigation-clean-button .navbar-toggler:focus {
            background: none;
        }

        .navigation-clean-button .navbar-toggler {
            color: #888;
        }

        .navigation-clean-button .navbar-nav a.active, .navigation-clean-button .navbar-nav > .show > a {
            background: none;
            box-shadow: none;
        }

        .navigation-clean-button.navbar-light .navbar-nav a.active, .navigation-clean-button.navbar-light .navbar-nav a.active:focus, .navigation-clean-button.navbar-light .navbar-nav a.active:hover {
            color: #8f8f8f;
            box-shadow: none;
            background: none;
            pointer-events: none;
        }

        .navigation-clean-button.navbar .navbar-nav .nav-link {
            padding-left: 18px;
            padding-right: 18px;
        }

        .navigation-clean-button.navbar-light .navbar-nav .nav-link {
            color: #465765;
        }

        .navigation-clean-button.navbar-light .navbar-nav .nav-link:focus, .navigation-clean-button.navbar-light .navbar-nav .nav-link:hover {
            color: #37434d !important;
            background-color: transparent;
        }

        .navigation-clean-button .navbar-nav > li > .dropdown-menu {
            margin-top: -5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
            background-color: #fff;
            border-radius: 2px;
        }

        .navigation-clean-button .dropdown-menu .dropdown-item:focus, .navigation-clean-button .dropdown-menu .dropdown-item {
            line-height: 2;
            font-size: 14px;
            color: #37434d;
        }

        .navigation-clean-button .dropdown-menu .dropdown-item:focus, .navigation-clean-button .dropdown-menu .dropdown-item:hover {
            background: #eee;
            color: inherit;
        }

        .navigation-clean-button .actions .login {
            margin-right: 1rem;
            text-decoration: none;
            color: #465765;
        }

        .navigation-clean-button .navbar-text .action-button, .navigation-clean-button .navbar-text .action-button:active, .navigation-clean-button .navbar-text .action-button:hover {
            background: #56c6c6;
            border-radius: 20px;
            font-size: inherit;
            color: #fff;
            box-shadow: none;
            border: none;
            text-shadow: none;
            padding: .5rem 1rem;
            transition: background-color 0.25s;
            font-size: inherit;
        }

        .navigation-clean-button .navbar-text .action-button:hover {
            background: #66d7d7;
        }

    </style>


</head>

<body style="background-color: lightblue">
<?php if (session('mensajeError')) { ?>

    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill"/>
        </svg>
        <div>
            <?= session('mensajeError'); ?>
        </div>
    </div>
<?php } ?>

<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #80aebd;">

    <div style="padding-left:50px">
        <a href="<?= base_url(); ?>" class="btn btn-success">
            <i class="bi bi-arrow-left-circle"> Volver </i>
        </a>
    </div>

    <div class="container"><a class="navbar-brand" style="color: rgb(51, 51, 51);"></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <span class="navbar-text actions"> <a class="login"
                                                  style="color: rgb(51,51,51);">Funciones de administrador</a><a
                        class="btn btn-light action-button" role="button" href="#"
                        style="background: #c7dbd2;color: rgb(0,0,0);">Salir</a></span>
        </div>
    </div>
</nav>
<div>
    <br>
    <h1 style="text-align:center">Listado de Usuarios</h1>
    <br>
</div>
<div class="container">
    <br>


    <button onclick="cargarTabla()" class="btn btn-serch"
            style="color:#0dcaf0 ;background-color: #268bd2">
        <i class="bi bi-search"></i>
    </button>

    <br>
    <div class="table-responsive container">

        <table id="tableUsuarios" class="table table-striped table-dark table-bordered table-hover ">

                <thead>
                <tr class="table-success">

                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($usuarioInfo as $usuario) : ?>

                    <tr>
                        <td><?= $usuario['DNI']; ?></td>
                        <td><?= $usuario['nombre']; ?></td>
                        <td><?= $usuario['apellido']; ?></td>
                        <td><?= $usuario['fecha_de_nacimiento']; ?></td>
                        <td><?= $usuario['email']; ?></td>
                        <td><?= $usuario['rol_nombre']; ?> </td>
                        <td>
                            <a href="<?= base_url('home/editar/' . $usuario['id']); ?>"
                               class="btn btn-outline-warning bt-sm      ">
                                <i class="bi bi-pencil-square"></i></a>

                            <a style="margin-left:10px"
                               onclick="return mensajeEliminado('<?= base_url('home/eliminar/' . $usuario['id']); ?>')"
                               class="btn btn-outline-danger bt-sm  ">
                                <i class="bi bi-trash"></i>
                            </a>


                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

        </table>
    </div>
</div>

</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
<script>
    function mensajeEliminado(direccion) {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: '¿Esta seguro que desea eliminar el usuario?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: ' Si ',
            cancelButtonText: ' No ',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'El Usuario fue eliminado',
                    'Your file has been deleted.',
                    'success'
                );
                location.href = direccion;
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Your imaginary file is safe :)',
                    'error'
                )
                return false;
            }
        })
    }
</script>
<script>
    var baseurl='<?= base_url( )?>'
</script>
<script src="<?= base_url('public/asserts/Js/tables.js')?>">  </script>
<script src="<?= base_url('public/asserts/DataTable/datatables.js')?>">  </script>
<script src="<?= base_url('public/asserts/DataTable/DataTables-1.11.3/js/dataTables.bootstrap4.js')?>">  </script>
<script src="<?= base_url('public/asserts/DataTable/DataTables-1.11.3/js/jquery.dataTables.js')?>">  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>