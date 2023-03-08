<?php

    include_once('../config/config.php');
    include('suscripciones.php');

        $p = new suscripciones();
        $ds = mysqli_fetch_object($p->getOne($_GET['id']));

    if (isset ($_POST) && !empty($_POST)){

        $update = $p->update($_POST);
        if ($update){
            $mensaje =  '<div class="alert alert-sucess" role="alert">  Modificación exitosa !!! </div>';
        }else{
            $mensaje =  '<div class="alert alert-danger" role="alert">  Error al modificar !!! </div>';
        }
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title> Modificar suscripción </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
        <ul class="navbar-nav">
        <li class=nav-item>
                <a class="nav-link" href="../index.html"> Inicio </a>
            </li>
            <li class=nav-item>
                <a class="nav-link" href="<?= ROOT?>/suscripciones/add.php"> Formulario de suscripción </a>
            </li>
            <li class=nav-item>
                <a class="nav-link" href=""> Iniciar sesión </a>
            </li>
        </ul>
    </nav>

    <div class="container">
            <?php 
                if(isset($mensaje)){
                    echo $mensaje;
                }
            ?>

        <h1 class="text-center mb-2" > Modificar suscripción </h1>

        <form method="POST" enctype="multipart/form-data" class="was-validated" >
     
            <div class="row mb-2">

                <div class="col">
                    <label>Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control is-invalid" required value="<?= $ds->nombres ?>">
                    <input type="hidden" name="id" value="<?= $ds->id ?>">
                    <div class="valid-feedback">
                        Excelente !!!
                    </div>
                </div>

                <div class="col">
                    <label>Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control is-invalid" required value="<?= $ds->apellidos ?>">
                    <div class="valid-feedback">
                        Excelente !!!
                    </div>
                </div>

            </div>

            <div class="row mb-2">
                <div class="col">
                    <label>Celular</label>
                    <input type="number" name="celular" id="celular" class="form-control is-invalid" required value="<?= $ds->celular ?>">
                    <div class="valid-feedback">
                        Excelente !!!
                    </div>
                 </div>

                <div class="col">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control  is-invalid" placeholder="ElTiburonMagico@ejemplo.com" required value="<?= $ds->email ?>">
                    <div class="valid-feedback">
                        Correo Electrónico válido
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label>Motivo o tipo de suscripción</label>
                    <input type="text" name="motivo" id="motivo" class="form-control is-invalid" placeholder="Suscripción Crunchyroll / Netflix / Disney+" required value="<?= $ds->motivo ?>">
                    <div class="valid-feedback">
                        Motivo seleccionado
                    </div>
                 </div>

                <div class="col">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control  is-invalid" placeholder="Bogotá / Ibagué / otras" required value="<?= $ds->ciudad ?>">
                    <div class="valid-feedback">
                        Excelente !!!
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="form-row mb-2">
                <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="invalidCheck3">
                    Acepto terminos y condiciones
                </label>
                <div  id="invalidCheck3Feedback" class="valid-feedback">
                    Has aceptado nuestros términos y condiciones para éste formulario 
                </div>
                </div>
            </div>
            
            <button class="btn btn-primary" type="submit"> Modificar </button>
            <br>
            </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>