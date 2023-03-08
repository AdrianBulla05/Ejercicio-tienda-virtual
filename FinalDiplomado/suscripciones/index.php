<?php
include('../config/config.php');
include('suscripciones.php');
$p = new suscripciones();

$data = $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $remove = $p->delete($_GET['id']);
  if ($remove) {
    header('Location: ' . ROOT . 'suscripciones/index.php');
  } else {
    $msj = " <div class='alert alert-danger' rol='alert' > Error al eliminar agenda. </div> ";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Listado de suscripciones </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container" >
            <h2 class="text-center mb-2"> Lista de suscripciones </h2>
            <div class="row" >
            <?php
                while( $pt = mysqli_fetch_object($data) ){
                    echo "<div class='col' >";
                    echo " <div class='border border-info p-2'> ";
                    echo "<h5> 
                            $pt->nombres $pt->apellidos 
                        </h5>";
                         echo  "<p> $pt->email  <b> $pt->celular </b> </p>";
                            echo  "<p> <b> $pt->motivo </b> $pt->ciudad </p>"; 
                            echo  "<div class='text-center' >";
                                echo " <div class='text-center' ><a class='btn btn-success ' href='" . ROOT . "/suscripciones/edit.php?id=$pt->id' > Modificar </a> - <a class='btn btn-danger ' href='" . ROOT . "/suscripciones/index.php?id=$pt->id' > Eliminar </a> </div>";
                            echo  "</div>";
                        echo "</div>";
                    echo "</div>";
                }


            ?>



            </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>