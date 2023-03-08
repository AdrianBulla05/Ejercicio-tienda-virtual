<?php

    include('../config/config.php');
    include('../config/Database.php');
  
    class suscripciones{
      public $conexion;
  
      function __construct()
      {
          $db = new Database();
          $this->conexion = $db->connectToDatabase();
      }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $motivo = $params['motivo'];
        $ciudad = $params['ciudad'];

        $insert = "INSERT INTO suscripciones VALUES (NULL,'$nombres', '$apellidos', '$email', $celular, '$motivo', '$ciudad')";
        return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql = "SELECT * FROM suscripciones";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM suscripciones WHERE id = $id";
        return mysqli_query($this->conexion, $sql); 
    }

    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $motivo = $params['motivo'];
        $ciudad = $params['ciudad'];
        $id = $params['id'];

        $update = " UPDATE suscripciones SET nombres='$nombres', apellidos='$apellidos', email='$email', celular=$celular, motivo='$motivo', ciudad='$ciudad' WHERE id = $id"; 
        return mysqli_query($this->conexion, $update);
    }

    function delete($id){
        $delete = "DELETE FROM suscripciones WHERE id = $id";
        return mysqli_query($this->conexion, $delete);
    }

}

?>