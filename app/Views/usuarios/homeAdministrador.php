
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('public/asserts/css/Admin/homeAdministrador.css'); ?>">

    
</head>

<body style="background: #add8e6;">
<?php if (session('mensajeLoad')) { ?>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill"/>
        </svg>
        <div>
            <?= session('mensajeLoad'); ?>
        </div>
    </div>

<?php } ?>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #80aebd;">
        <div class="container"><a class="navbar-brand" style="color: rgb(51, 51, 51);">Home</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul><span class="navbar-text actions"> <a class="login" style="color: rgb(51,51,51);">Funciones de administrador</a><a class="btn btn-light action-button" role="button" href="#" style="background: #c7dbd2;color: rgb(0,0,0);">Salir</a></span>
            </div>
        </div>
    </nav>

    <div class="div" style="padding-top: 2%;">
        <div class="row">
            <div class="col" style="padding-left: 15%;">
            <form method="POST" action="<?= base_url('home/redireccionar'); ?>">
                <select name="opcion" id="opcionUsuarios" style="background: var(--bs-green); color: white" class="form-control">
                <option value="0" id="opcion" disabled selected=inicial style="background:darkgrey; color:black"> --Opciones de usuarios-- ↓↓
                </option>
                <option value="1" id="opcion" style="background: white; color:black"> Registrar un nuevo usuario</option>
                <option value="2" id="opcion" style="background: white; color:black"> Modificar un usuario existente</option>
                
                    <option value="3" id="opcion" style="background: white; color:black"> Buscar/Eliminar un usuario</option>
                    <option value="4" id="opcion" style="background: white; color:black"> Restablecer contraseña de usuario</option>
                
                </select>
                <br>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding-right: 20%;">
                        <button class="btn btn-success" type="submit"> Ir 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                            </svg>
                            
                        </button>
                </div>
            
    </div>
            
            <br>
            <div class="vr" style="padding-left: 10%;"></div>
            <br>

            
            

            <div class="col">
                <button class="btn btn-primary" type="button" style="background: var(--bs-green);">
                     Listado de vehiculos estacionados
                </button></div>
            </div>

        </div>
    </div>

</body>


<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>

</svg>

</html>
