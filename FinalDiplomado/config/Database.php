<?php
class Database
{
  public $host = 'localhost'; // Servidor
  public $user = 'root'; // Usuario de phpMyadmin
  public $pass = '';  // Contraseña de phpMyadmin
  public $db = 'suscribete'; // Base de datos.
  private $conexion;

  /**
   * Método constructor, este método será el primero que se ejecute al momento de llamar la clase Database.
   */
  function __construct()
  {
    $this->conexion = $this->connectToDatabase(); //Hacemos un llamado a la función connectToDatabase()
    return $this->conexion; // retornamos la conexión.
  }


  /**
   * Función que permitirá conectarnos a nuestra base de satos.
   * @return $conn => Conexión a la DB.
   */
  function connectToDatabase()
  {
    //Utilizamos el mysql para interactuar con nuestra base de datos.
    //Con el método mysqli_connect() vamos a generar la conexión con la base de datos.
    $conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    //Validamos si existe algún error de conexión con el método mysqli_connect_error();
    if (mysqli_connect_error()) {
      echo "Tenemos un error de conexión " . mysqli_connect_error(); //Mostramos el error de conexión.
    }
    return $conexion;
  }
}
?>