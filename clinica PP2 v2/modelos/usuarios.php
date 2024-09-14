<?php
   
   require_once ('conexion.php');

 class Usuario {
    private $id_usuario;
    private $nombre_usuario;
    private $email;
    private $password;
    private $persona_id_persona;
    private $clinica_id_clinica;

    public function __construct($id_usuario = '',$nombre_usuario = '', $email = '', $password = '', $persona_id_persona = '', $clinica_id_clinica = '') {
      $this->id_usuario = $id_usuario;
      $this->nombre_usuario = $nombre_usuario;
      $this->email = $email;
      $this->password = $password;
      $this->persona_id_persona = $persona_id_persona;
      $this->clinica_id_clinica = $clinica_id_clinica;
    }

    public function guardar() {
      $conexion = new Conexion();
      $password = password_hash($this->password, PASSWORD_DEFAULT);
      $query = "INSERT INTO clinica.usuario (nombre_usuario, email, password, persona_id_persona, clinica_id_clinica) VALUES ('$this->nombre_usuario', '$this->email', '$password', '$this->persona_id_persona', '$this->clinica_id_clinica')";
      echo $query;
      return $conexion->insertar($query);
  }

  public function actualizar(){
    $conexion = new Conexion();
    $password = password_hash($this->password, PASSWORD_DEFAULT);
    $query = "UPDATE clinica.usuario SET nombre_usuario = '$this->nombre_usuario', email = '$this->email', password = '$password', persona_id_persona = '$this->persona_id_persona', clinica_id_clinica = '$this->clinica_id_clinica' WHERE id_usuario = '$this->id_usuario'";
    return $conexion->actualizar($query);
  }

  public function actualizarUltimaConexion($id_usuario) {
    $conexion = new Conexion();
    $query = "UPDATE clinica.usuario SET ultima_conexion = NOW() WHERE id_usuario = $id_usuario";
    echo $query; // Imprimir la consulta
    return $conexion->actualizar($query);

    if ($id) {
      $usuario->actualizarUltimaConexion($id);
      echo " se actualizo conexion con exion";
    } else {
      echo " hubo un error al guardar";
    }
}

  public function eliminar(){
    $conexion = new Conexion();
    $query = "UPDATE clinica.usuario SET estado = 0 WHERE id_usuario = '$this->id_usuario'";
    return $conexion->actualizar($query);
  }

  public function validar_usuario(){
    $conexion = new Conexion();
    $query = "SELECT * FROM clinica.usuario WHERE nombre_usuario = '$this->nombre_usuario'";
    return $conexion->consultar($query);
  }


    /**
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * Get the value of nombre_usuario
     */ 
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * Set the value of nombre_usuario
     *
     * @return  self
     */ 
    public function setNombre_usuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of persona_id_persona
     */ 
    public function getPersona_id_persona()
    {
        return $this->persona_id_persona;
    }

    /**
     * Set the value of persona_id_persona
     *
     * @return  self
     */ 
    public function setPersona_id_persona($persona_id_persona)
    {
        $this->persona_id_persona = $persona_id_persona;

        return $this;
    }

    /**
     * Get the value of clinica_id_clinica
     */ 
    public function getClinica_id_clinica()
    {
        return $this->clinica_id_clinica;
    }

    /**
     * Set the value of clinica_id_clinica
     *
     * @return  self
     */ 
    public function setClinica_id_clinica($clinica_id_clinica)
    {
        $this->clinica_id_clinica = $clinica_id_clinica;

        return $this;
    }
}




?>