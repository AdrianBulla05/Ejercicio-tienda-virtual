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
    <h1 class="text-center"> Nuestras suscripciones </h1>
    </div>

    <div class= "col-lg-12   col-md-12">
        <img src="Imagenes/señalando.png" alt="" width="250px">
        <p>¿Ya conoces nuestros servicios de suscripción?, encuentralos abajo y escoje la tuya, recuerda que en cada suscripcion tendras descuentos exclusivos para las plataformas con las que tenemos alianzas, ademas de información de eventos, cupones, y promociones en nuestros productos, recuerda que siempre esaplicando los terminos y condiciones de cada situación.</p>
        <a class="nav-link" href="<?= ROOT?>/suscripciones/add.php"> <button class="btn btn-primary" type="submit">  No lo pienses más, suscríbete!!! </button><span class="sr-only"></span>
        </a>
    </div>

    <div class="row m-5">
    <div class= "col-lg-3   col-md-12">
        <h4>Anime</h4>
        <img src="Imagenes/anime-1.jpg" alt="" width="250px">
        <p>Sabemos que ver anime es muy llamativo para nosotros los Frikis, y para todos aquellos a quienes les gustan los animes tanto como a nosotros,  tendran un 15% de descuento en la suscripción de Crunchyroll y podrán ver los animes que más les gustan, sólo tienen que suscribirse a nuestra tienda y les diremos cuáles serán los pasos a seguir.</p>
        <a class="nav-link" href="https://www.crunchyroll.com/es/videos/anime"> <button class="btn btn-primary" type="submit">  Entra a Crunchyroll</button><span class="sr-only"></span>
        </a>
    </div>

    <div class= "col-lg-3   col-md-12">
        <h4>Peliculas</h4>
        <img src="Imagenes/peliculas.jpg" alt="" width="250px">
        <p>Las películas nos presentan un mundo en el cual en muchas ocasiones quisiéramos estar, así que si eres amante de las películas y los mundos que nos afrecen, tendras un 15% de descuento en la suscripción de Netflix o Disney+ para que puedas ver las películas que más te gustan, suscríbete a nuestra tienda y te diremos cuáles serán los pasos a seguir.</p>
        <a class="nav-link" href="https://www.netflix.com/co/"> <button class="btn btn-primary" type="submit">  Entra a Netflix</button><span class="sr-only"></span>
        </a>
        <a class="nav-link" href="https://www.disneyplus.com/es-co"> <button class="btn btn-primary" type="submit">  Entra a Disney+</button><span class="sr-only"></span>
        </a>
    </div>

    <div class="col-lg-3   col-md-12">
        <h4>Cómics</h4> 
        <img src="Imagenes/Cómics.jpg" alt="" width="250px">
        <p>A veces están quienes prefieren la lectura y están inmersos en ella, nosotros apoyamos su pasión y traemos para todos los que quieran leer cualquier tipo de comic, éste súper blog con aquellos cómics más representativos, suscríbete a nuestra tienda y te diremos cuáles serán los pasos a seguir.</p>
        <a class="nav-link" href=" https://leercomicsonline.com/"> <button class="btn btn-primary" type="submit">  Leer cómics</button><span class="sr-only"></span>
        </a>
    </div>

    <div class="col-lg-3   col-md-12">
        <h4>Series</h4>
        <img src="Imagenes/series.jpg" alt="" width="250px"> 
        <p>Así como las películas nos presentan un mundo en el cual en muchas ocasiones quisiéramos estar, las series a veces nos haceN sentir representados o quisiéramos decirle a los protagonistas qué deberían hacer, si este es tu caso, y eres fan de las series, tendras un 15% de descuento en la suscripción de Netflix o Disney+ para que puedas ver las que más te gustan, suscríbete a nuestra tienda y te diremos cuáles serán los pasos a seguir.</p>
        <a class="nav-link" href="https://www.netflix.com/co/"> <button class="btn btn-primary" type="submit">  Entra a Netflix</button><span class="sr-only"></span>
        </a>
        <a class="nav-link" href="https://www.disneyplus.com/es-co"> <button class="btn btn-primary" type="submit">  Entra a Disney+</button><span class="sr-only"></span>
        </a>
    </div>

  </div>
</div>


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