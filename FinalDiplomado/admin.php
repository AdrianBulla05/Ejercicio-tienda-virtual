<?php

    include_once('config/config.php');
  
    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Suscripción </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
        <ul class="navbar-nav">
            <li class=nav-item>
                <a class="nav-link" href="index.html"> Inicio </a>
            </li>
            <li class=nav-item>
                <a class="nav-link" href="<?= ROOT?>/suscripciones/add.php"> Formulario de suscripción </a>
            </li>
            <li class=nav-item>
                <a class="nav-link" href="<?= ROOT?>admin.php"> Iniciar sesión </a>
            </li>
        </ul>
    </nav>  


    <div class="container">
    <h1 class="text-center"> Ingresa a tu perfil </h1>
    </div>


        <div class= "col-lg-12   col-md-12">
            <img src="Imagenes/Haruhi suzumiya.jpg" alt="" width="250px">
        </div>
              
            <form action="suscripciones/index.php" style="background: gary" width="500px">
                <div class="row m-5">
                    <div class="col-lg-6     col-md-12">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                

            
                    <div class="col-lg-6     col-md-12">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


      




<footer>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="Imagenes/spider man - card.jpg" class="card-img-top" alt="..." height="400px">
        <div class="card-body">
          <h5 class="card-title"> <b>Redes sociales</b></h5>
            <p class="card-text">
              <h6>Instagram: <br> @ElTiburonMagico</h6> - <h6>Facebook: <br> @ElTiburonMagico2020</h6> - <h6>WhatsApp: <br> +57 310 2906736</h6>
            </p>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="Imagenes/InuYasha- card.jpg" class="card-img-top" alt="..." height="400px">
        <div class="card-body">
          <h3 class="card-title"> <b> Próximamente </b> </h3>
          <p class="card-text">- Traeremos figuras originales de los animes más conocidos de todos los tiempos. <br> - Tendremos más diseños de cuadros para que decores tus espacios con lo que más te gusta.<br> - Consolas de videojuegos con los mejores accesorios</p>
          <br>
          <h5 class="card-title"><b></b>Creadores</b></h5>
          <p class="card-text">Adrian Bulla <br> Profesional en Marketing y Negocios Internacionales<br></p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h2><b>El Tiburón Mágico © <br> 2021</h2></b>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>